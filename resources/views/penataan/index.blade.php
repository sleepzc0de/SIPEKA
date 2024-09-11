@extends('layouts.SIPEKA.master')
@section('content')
    <div class="card">
        <div class="table-responsive">
            <table class="table text-nowrap datatable-basic">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Provinsi</th>
                        <th>Kabupaten/Kota</th>
                        <th>PIC</th>
                        <th>Approver</th>
                        <th>Validator</th>
                        <th>Konseptor</th>
                        {{-- <th>File Dukungan</th> --}}
                    </tr>
                </thead>
            </table>
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
                $.extend($.fn.dataTable.defaults, {
                    autoWidth: false,
                    ajax: '{{ route('data.penataan') }}',
                    scrollY: 300,
                    scrollX: true,
                    lengthMenu: [
                        [5, 10, 25, -1],
                        [5, 10, 25, "All"]
                    ],
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            width: '10px',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'provinsi.nama_provinsi',
                            name: 'provinsi.nama_provinsi',
                            render: function(data, type, row) {
                                return '<span class="badge bg-dark bg-opacity-20 text-reset" style="text-transform: uppercase;">Provinsi ' + data.toUpperCase() +
                                    '</span>';
                            }
                        },

                        {
                            data: 'kabkota.nama_kab_kota',
                            name: 'kabkota.nama_kab_kota',
                            render: function(data, type, row) {
                                if (row.kabkota.isKota == true) {
                                    return '<span class="badge bg-pink" style="text-transform: uppercase;">Kota ' +
                                        data.toUpperCase() + '</span>';
                                } else if (row.kabkota.isKota == false) {
                                    return '<span class="badge bg-indigo" style="text-transform: uppercase;">Kabupaten ' +
                                        data.toUpperCase() + '</span>';
                                } else {
                                    return 'NOT DEFINED'
                                }
                            }
                        },
                        {
                            data: 'pic',
                            name: 'pic'
                        },
                        {
                            data: 'approver',
                            name: 'approver'
                        },
                        {
                            data: 'validator',
                            name: 'validator'
                        },
                        {
                            data: 'konseptor',
                            name: 'konseptor'
                        },
                        // {
                        //     data: 'file_dukungan',
                        //     name: 'file_dukungan'
                        // }
                    ],
                    columnDefs: [{
                        orderable: false,
                        width: 100,
                        targets: [0]
                    }],
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    language: {
                        search: '<span class="me-3">Cari Data:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                        searchPlaceholder: 'Ketik untuk mencari...',
                        lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                        paginate: {
                            'first': 'First',
                            'last': 'Last',
                            'next': document.dir == "rtl" ? '&larr;' : '&rarr;',
                            'previous': document.dir == "rtl" ? '&rarr;' : '&larr;'
                        }
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



    <script>
        $(document).ready(function() {
            // Notifikasi sukses
            @if (session('success'))
                toastr.success("{{ session('success') }}", 'Success', {
                    closeButton: true,
                    progressBar: true,
                    preventDuplicates: true,
                    newestOnTop: true
                });
            @endif

            // Notifikasi gagal
            @if (session('failed'))
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
