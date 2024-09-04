@extends('layouts.SIPEKA.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Form validation</h5>
        </div>
        <form class="form-validate-jquery" action="#">
            <div class="card-body">
                <p class="mb-4">Input data penataan kawasan</p>

                <div class="mb-4">
                    <!-- Basic text input -->
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="basic" class="form-control" required
                                placeholder="Text input validation">
                        </div>
                    </div>
                    <!-- /basic text input -->

                    {{-- SELECT PROVINSI --}}
                    <div class="mb-3 row">
                        <label class="col-form-label col-lg-3">Select with placeholder</label>
                        <div class="col-lg-9">
                            <select data-placeholder="Select a State..." class="form-control select">
                                <option></option>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
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
