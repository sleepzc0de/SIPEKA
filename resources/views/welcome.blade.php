@extends('layouts.SIPEKA.master')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <!-- Dashboard SIPEKA -->
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="mb-0">Sistem Informasi Penataan Kawasan</h5>
                    <div class="d-inline-flex ms-auto">
                        <span class="badge bg-success rounded-pill">38 Provinsi</span>
                        <div class="dropdown d-inline-flex ms-3">
                            <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle"
                                data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-line me-2"></i>
                                    Statistics
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-eraser me-2"></i>
                                    Clear list
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                    {{-- <div class="d-flex align-items-center mb-3 mb-sm-0">
                        <div id="campaigns-donut"></div>
                        <div class="ms-3">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">1</h5>
                            </div>
                            <span class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                            <span class="text-muted">APPROVED</span>
                        </div>
                    </div> --}}
                     <!-- Current server load -->
                     <div class="d-flex align-items-center mb-sm-0">
                     <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">25 Approved</h3>
                            </div>

                            <div>
                                Konsep Penataan Sudah <b>SELESAI</b>
                            </div>
                        </div>

                        <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                    </div>
                     </div>
                    <!-- /current server load -->

                    {{-- <div class="d-flex align-items-center mb-3 mb-sm-0">
                        <div id="campaigns-donut"></div>
                        <div class="ms-3">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">32</h5>
                            </div>
                            <span class="d-inline-block bg-warning rounded-pill p-1 me-1"></span>
                            <span class="text-muted">DISCUSS</span>
                        </div>
                    </div> --}}
                     <!-- Current server load -->
                     <div class="d-flex align-items-center mb-sm-0">
                     <div class="card bg-warning text-white">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">10 Discuss</h3>
                            </div>

                            <div>
                                Konsep Penataan Perlu <b>DISKUSI</b>
                            </div>
                        </div>

                        <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                    </div>
                     </div>
                    <!-- /current server load -->
                    {{-- <div class="d-flex align-items-center mb-3 mb-sm-0">
            <div class="ms-3">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">2</h5>
                </div>
                <span class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                <span class="text-muted">STUCK</span>
            </div>
        </div> --}}
                    <!-- Current server load -->
                    <div class="d-flex align-items-center mb-sm-0">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">2 Stuck</h3>
                            </div>

                            <div>
                                Konsep Penataan Perlu <b>DIKERJAKAN</b>
                            </div>
                        </div>

                        <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                    </div>
                    </div>
                    <!-- /current server load -->

                    <div>
                        <a href="#" class="btn btn-teal">
                            <i class="ph-file-pdf me-2"></i>
                            Lihat Report
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table text-nowrap datatable-basic">
                        <thead>
                            <tr>
                                <th>Provinsi</th>
                                <th>Kab/Kota</th>
                                <th>Konseptor</th>
                                <th>Validator</th>
                                <th>PIC</th>
                                <th>Status</th>
                                <th>Approver</th>
                                <th class="text-center" style="width: 20px;">
                                    <i class="ph-dots-three"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="d-block me-3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Coat_of_arms_of_West_Java.svg/330px-Coat_of_arms_of_West_Java.svg.png"
                                                class="rounded-circle" width="36" height="36" alt="">
                                        </a>
                                        <div>
                                            <a href="#" class="text-body fw-semibold">Jawa Barat</a>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="text-muted"><a href="#" class="link-teal">Kota Cirebon</a></span></td>
                                <td><span class="text-muted">Aul, Dwi, Budi</span></td>
                                <td><span class="text-muted">Andrianto, Tatan</span></td>
                                <td><span class="text-muted">Anita</span></td>
                                <td><span class="badge bg-success bg-opacity-10 text-success">APPROVED</span></td>
                                <td><span class="text-muted">Joko Legowo</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                View statement
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-pencil me-2"></i>
                                                Edit campaign
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-lock-key me-2"></i>
                                                Disable campaign
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-gear me-2"></i>
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="d-block me-3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Coat_of_arms_of_Central_Java.svg/800px-Coat_of_arms_of_Central_Java.svg.png"
                                                class="rounded-circle" width="36" height="36" alt="">
                                        </a>
                                        <div>
                                            <a href="#" class="text-body fw-semibold">Jawa Tengah</a>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="text-muted"><a href="#" class="link-teal">Kota Semarang</a></span></td>
                                <td><span class="text-muted">Billy, Winny</span></td>
                                <td><span class="text-muted">Nuzfari</span></td>
                                <td><span class="text-muted">Indra</span></td>
                                <td><span class="badge bg-warning bg-opacity-10 text-warning">DISCUSS</span></td>
                                <td><span class="text-muted">Kun Anindya</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                View statement
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-pencil me-2"></i>
                                                Edit campaign
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-lock-key me-2"></i>
                                                Disable campaign
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-gear me-2"></i>
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Dashboard SIPEKA -->
        </div>
    </div>
@endsection


@section('css')
@endsection

@section('js')
    <script src="{{ asset('assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>

    {{-- DATATABLES --}}
    <script>
        /* ------------------------------------------------------------------------------
 *
 *  # Basic datatables
 *
 *  Demo JS code for datatable_basic.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

const DatatableBasic = function() {


//
// Setup module components
//

// Basic Datatable examples
const _componentDatatableBasic = function() {
    if (!$().DataTable) {
        console.warn('Warning - datatables.min.js is not loaded.');
        return;
    }

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        columnDefs: [{
            orderable: false,
            width: 100,
            targets: [ 5 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span class="me-3">Cari Data:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
            searchPlaceholder: 'Ketik untuk mencari...',
            lengthMenu: '<span class="me-3">Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' }
        }
    });

    // Basic datatable
    $('.datatable-basic').DataTable();

    // Resize scrollable table when sidebar width changes
    $('.sidebar-control').on('click', function() {
        table.columns.adjust().draw();
    });
};


//
// Return objects assigned to module
//

return {
    init: function() {
        _componentDatatableBasic();
    }
}
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
DatatableBasic.init();
});

    </script>
    {{-- END DATATABLES --}}
@endsection
