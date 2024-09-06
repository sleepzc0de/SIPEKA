@extends('layouts.SIPEKA.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tambah Data Penataan Kawasan</h5>
        </div>
        <form class="form-validate-jquery" action="#">
            <div class="card-body">
                <p class="mb-4">Input data penataan kawasan</p>

                <div class="mb-4">

                    {{-- SELECT PROVINSI --}}
                    <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Pilih Provinsi</label>
                        <div class="col-lg-9">
                            <select data-placeholder="Pilih Provinsi" class="form-control select">
                                <option></option>

                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    {{-- END SELECT PROVINSI --}}
                </div>
            </div>
        </form>
    </div>
@endsection


@section('css')
@endsection

@section('js')


    <script src="{{ asset('assets/js/vendor/forms/validation/validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{asset('assets/demo/pages/form_select2.js')}}"></script>
    <script src="{{ asset('assets/demo/pages/form_validation_library.js') }}"></script>
@endsection
