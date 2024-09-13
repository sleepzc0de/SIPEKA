<?php

namespace App\Http\Controllers;

use App\Models\Penataan;
use App\Models\RefKabKota;
use App\Models\RefProvinsi;
use Exception;
use Illuminate\Http\Request;

class PenataanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {


        return view('penataan.index');
    }


    public function getDataPenataan()
    {
        $query = Penataan::with(['kabkota', 'provinsi'])->select('*');

        if (request()->ajax()) {
            return datatables()->of($query)
                ->editColumn('pic', function ($row) {
                    $pic = json_decode($row->pic, true);
                    if (is_array($pic)) {
                        $badges = '';
                        foreach ($pic as $k) {
                            $badges .= '<span class="badge bg-warning bg-opacity-50 text-black">' . $k . '</span> ';
                        }
                        return $badges;
                    }
                    return '';  // Jika $konseptor bukan array, kembalikan string kosong
                })
                ->editColumn('approver', function ($row) {
                    $approver = json_decode($row->approver, true);
                    if (is_array($approver)) {
                        $badges = '';
                        foreach ($approver as $k) {
                            $badges .= '<span class="badge bg-yellow text-black">' . $k . '</span> ';
                        }
                        return $badges;
                    }
                    return '';  // Jika $konseptor bukan array, kembalikan string kosong
                })
                ->editColumn('validator', function ($row) {
                    $validator = json_decode($row->validator, true);
                    if (is_array($validator)) {
                        $badges = '';
                        foreach ($validator as $k) {
                            $badges .= '<span class="badge bg-teal">' . $k . '</span> ';
                        }
                        return $badges;
                    }
                    return '';  // Jika $konseptor bukan array, kembalikan string kosong
                })
                ->editColumn('konseptor', function ($row) {
                    $konseptor = json_decode($row->konseptor, true);
                    if (is_array($konseptor)) {
                        $badges = '';
                        foreach ($konseptor as $k) {
                            $badges .= '<span class="badge bg-purple">' . $k . '</span> ';
                        }
                        return $badges;
                    }
                    return '';  // Jika $konseptor bukan array, kembalikan string kosong
                })

                ->editColumn('file_dukungan', function ($row) {
                    $files = json_decode($row->file_dukungan, true);
                    if (is_array($files)) {
                        $fileLinks = '';
                        $i = 1;
                        foreach ($files as $file) {
                            $fileName = basename($file);
                            $fileLinks .= '<a href="' . asset('storage/' . $file) . '" target="_blank">File Dukung ' . $i . '</a><br>';
                            $i++;
                        }
                        return $fileLinks;
                    }
                    return '';
                })
                ->rawColumns(['file_dukungan', 'konseptor', 'validator', 'approver', 'pic']) // Menandakan kolom ini berisi HTML

                ->addIndexColumn()
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsis = RefProvinsi::all();


        return view('penataan.create', compact('provinsis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_provinsi' => 'required',
                'konseptor' => 'required|array',
                'konseptor.*' => 'string|max:100',
                'validator' => 'required|array',
                'validator.*' => 'string|max:100',
                'approver' => 'required|array',
                'approver.*' => 'string|max:100',
                'pic' => 'required|array',
                'pic.*' => 'string|max:100',
                'file_penataan' => 'required|mimes:pdf,docx|max:10240',
                'file_dukungan.*' => 'nullable|mimes:jpg,jpeg,png,pdf,docx,xlsx|max:10240',
            ]);


            $uploadedFiles = [];

            // Proses upload file dukungan
            if ($request->hasFile('file_dukungan')) {
                foreach ($request->file('file_dukungan') as $file) {

                    $hashName = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();

                    $filePath = $file->storeAs('file-dukungan-penataan', $hashName, 'public');

                    $uploadedFiles[] = $filePath;
                }
            }


            // Proses upload file
            if ($request->hasFile('file_penataan')) {

                $fileUtama = $request->file('file_penataan');

                // Generate nama file dengan hash
                $hashName = hash('sha256', time() . $fileUtama->getClientOriginalName()) . '.' . $fileUtama->getClientOriginalExtension();

                // Simpan file di folder 'public/penataan' di storage

                $filePathFilePenataanUtama = $fileUtama->storeAs('file-utama-penataan', $hashName, 'public');
            }


            $data = [
                'id_provinsi' => $request->id_provinsi,
                'id_kab_kota' => $request->id_kab_kota,
                'konseptor' => json_encode($request->konseptor),
                'validator' => json_encode($request->validator),
                'approver' => json_encode($request->approver),
                'pic' => json_encode($request->pic),
                'file_dukungan' => json_encode($uploadedFiles),
                'file_penataan' => $filePathFilePenataanUtama
            ];

            Penataan::create($data);

            return redirect()->route('penataan.index')->with('success', "Data Penataan $request->judul berhasil ditambahkan!");
        } catch (Exception $e) {

            return redirect()->back()->with(['failed' => 'Data Penataan Gagal Ditambahkan! | Pesan Error: ' . $e->getMessage()])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil data penataan berdasarkan ID
        $penataan = Penataan::findOrFail($id);

        // Ambil daftar provinsi
        $provinsis = RefProvinsi::all();
        $kabKotas = RefKabKota::all();

        // Kirim data ke view edit
        return view('penataan.edit', compact('penataan', 'provinsis','kabKotas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Validasi input
            $request->validate([
                'id_provinsi' => 'required',
                'konseptor' => 'required|array',
                'konseptor.*' => 'string|max:100',
                'validator' => 'required|array',
                'validator.*' => 'string|max:100',
                'approver' => 'required|array',
                'approver.*' => 'string|max:100',
                'pic' => 'required|array',
                'pic.*' => 'string|max:100',
                'file_penataan' => 'nullable|mimes:pdf,docx|max:10240',
                'file_dukungan.*' => 'nullable|mimes:jpg,jpeg,png,pdf,docx,xlsx|max:10240',
            ]);

            // Temukan data penataan berdasarkan ID
            $penataan = Penataan::findOrFail($id);

            $uploadedFiles = json_decode($penataan->file_dukungan, true);

            // Proses upload file dukungan (opsional)
            if ($request->hasFile('file_dukungan')) {
                foreach ($request->file('file_dukungan') as $file) {
                    $hashName = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('file-dukungan-penataan', $hashName, 'public');
                    $uploadedFiles[] = $filePath;
                }
            }

            // Proses upload file penataan utama (opsional)
            $filePathFilePenataanUtama = $penataan->file_penataan;
            if ($request->hasFile('file_penataan')) {
                $fileUtama = $request->file('file_penataan');
                $hashName = hash('sha256', time() . $fileUtama->getClientOriginalName()) . '.' . $fileUtama->getClientOriginalExtension();
                $filePathFilePenataanUtama = $fileUtama->storeAs('file-utama-penataan', $hashName, 'public');
            }

            // Update data penataan
            $penataan->update([
                'id_provinsi' => $request->id_provinsi,
                'id_kab_kota' => $request->id_kab_kota,
                'konseptor' => json_encode($request->konseptor),
                'validator' => json_encode($request->validator),
                'approver' => json_encode($request->approver),
                'pic' => json_encode($request->pic),
                'file_dukungan' => json_encode($uploadedFiles),
                'file_penataan' => $filePathFilePenataanUtama,
            ]);

            return redirect()->route('penataan.index')->with('success', "Data Penataan $request->judul berhasil diperbarui!");
        } catch (Exception $e) {
            return redirect()->back()->with(['failed' => 'Data Penataan Gagal Diperbarui! | Pesan Error: ' . $e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getKabKota($provinsiId)
    {
        $kabKota = RefKabKota::where('provinsi_id', $provinsiId)->get();
        return response()->json($kabKota);
    }
}
