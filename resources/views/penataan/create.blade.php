@extends('layouts.SIPEKA.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tambah Data Penataan Kawasan</h5>
        </div>
        <form class="form-validate-jquery" action="{{route('penataan.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card-body">
                <p class="mb-4">Input data penataan kawasan</p>

                <div class="mb-4 col-xl-12">
                    {{-- SELECT PROVINSI --}}
                    <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Pilih Provinsi<span class="text-danger ms-1">*</span></label></label>
                        <div class="col-lg-9">
                            <select name="id_provinsi" id="provinsi" class="form-select select form-control-select2" data-placeholder="Pilih Provinsi" required>
                                <option></option>
                                <optgroup label="Provinsi Indonesia">
                                    @php
                                        $i = 1;
                                    @endphp
                                @foreach ($provinsis as $provinsi)
                                    <option value="{{ $provinsi->id }}">{{ $i++ ." - ".$provinsi->nama_provinsi }}</option>
                                @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    {{-- END SELECT PROVINSI --}}

                    {{-- SELECT KABUPATEN/KOTA --}}
                    <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Pilih Kabupaten/Kota<span class="text-danger ms-1">*</span></label></label>
                        <div class="col-lg-9">
                            <select name="id_kab_kota" id="kabupaten-kota" class="form-control select" data-placeholder="Pilih Kabupaten/Kota">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    {{-- END SELECT KABUPATEN/KOTA --}}

                    {{-- KONSEPTOR --}}
                    <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Input Konseptor<span class="text-danger ms-1">*</span></label></label>
                        <div class="col-lg-9">
                            <select name="konseptor[]" class="form-control select" multiple="multiple" data-tags="true" data-maximum-input-length="100">
                            </select>
                            <div class="form-text">Pemisahan nama konseptor dengan memencet 'enter' jika lebih dari satu dan maximal karakter 100</div>
                        </div>
                    </div>
                    {{-- END KONSEPTOR --}}

                    {{-- FILE UTAMA --}}
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Upload File Utama Penataan<span class="text-danger ms-1">*</span></label>
                        <div class="col-lg-9">
                            <input name="file_penataan" type="file" class="form-control required" id="customFile">
                        </div>
                    </div>
                    {{-- END FILE UTAMA --}}

                     {{-- FILE PENDUKUNG --}}
                     <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Upload File Pendukung Penataan</label>
                        <div class="col-lg-9">
                            <input name="file_dukungan[]" type="file" class="file-input" multiple="multiple">
                        </div>
                    </div>
                    {{-- END FILE PENDUKUNG --}}

                    {{-- VALIDATOR --}}
                    <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Input Validator<span class="text-danger ms-1">*</span></label>
                        <div class="col-lg-9">
                            <select name="validator[]" class="form-control select" multiple="multiple" data-tags="true" data-maximum-input-length="100">
                            </select>
                            <div class="form-text">Pemisahan nama validator dengan memencet 'enter' jika lebih dari satu dan maximal karakter 100</div>
                        </div>
                    </div>
                    {{-- END VALIDATOR --}}

                     {{-- PIC --}}
                     <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Input PIC Teknis<span class="text-danger ms-1">*</span></label>
                        <div class="col-lg-9">
                            <select name="pic[]" class="form-control select" multiple="multiple" data-tags="true" data-maximum-input-length="100">
                            </select>
                            <div class="form-text">Pemisahan nama PIC dengan memencet 'enter' jika lebih dari satu dan maximal karakter 100</div>
                        </div>
                    </div>
                    {{-- END PIC --}}

                    {{-- APPROVER --}}
                    <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Input Approver<span class="text-danger ms-1">*</span></label>
                        <div class="col-lg-9">
                            <select name="approver[]" class="form-control select" multiple="multiple" data-tags="true" data-maximum-input-length="100">
                            </select>
                            <div class="form-text">Pemisahan nama Approver dengan memencet 'enter' jika lebih dari satu dan maximal karakter 100</div>
                        </div>
                    </div>
                    {{-- END APPROVER --}}

                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button type="reset" class="btn btn-light" id="reset">Reset</button>
                <button type="submit" class="btn btn-primary ms-3">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
            </div>
        </form>
    </div>
@endsection


@section('css')
@endsection

@section('js')
    <script src="{{ asset('assets/js/vendor/forms/validation/validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/demo/pages/form_select2.js') }}"></script> --}}
    <script src="{{ asset('assets/demo/pages/form_validation_library.js') }}"></script>
    <script src="{{asset('assets/sipekajs/select2_penataan.js')}}"></script>

    <script src="{{asset('assets/demo/pages/uploader_bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/vendor/uploaders/fileinput/fileinput.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Notifikasi sukses
            @if(session('success'))
                toastr.success("{{ session('success') }}", 'Success', {
                    closeButton: true,
                    progressBar: true,
                    preventDuplicates: true,
                    newestOnTop: true
                });
            @endif

            // Notifikasi gagal
            @if(session('failed'))
                toastr.error("{{ session('failed') }}", 'Error', {
                    closeButton: true,
                    progressBar: true,
                    preventDuplicates: true,
                    newestOnTop: true
                });
            @endif
        });
    </script>

@endsection
