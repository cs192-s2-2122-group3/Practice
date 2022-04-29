@extends('layouts.app')

@push('styles')
    <link href="{{ URL::asset('/lib/highlightjs/github.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/select2/css/select2.min.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/jt.timepicker/jquery.timepicker.css'); }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ URL::asset('/lib/highlightjs/highlight.pack.js'); }}"></script>
    <script src="{{ URL::asset('/lib/select2/js/select2.min.js'); }}"></script>
@endpush

@section('content')
    <div class="br-mainpanel">

        <div class="br-pageheader pd-y-15 pd-md-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <a class="breadcrumb-item" href="\account">Account Manager</a>
                <span class="breadcrumb-item active">Edit Account</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Edit Account</h4>
            <p class="mg-b-0">Edit an existing account. Change roles or email and passwords if neccessary.</p>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-10 mg-b-10">Edit Account Form</h6>
                <p class="mg-b-30 tx-gray-600">Input the required values in the following fields</p>

                <div class="form-layout form-layout-2 mg-b-20">
                    <form action="/user/{{ $user->id }}" method="post" data-parsley-validate>
                        @csrf
                        @method('put')

                        <div class="row no-gutters">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">First Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="first_name" value="{{ $user->first_name }}"
                                        placeholder="Enter firstname" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                <div class="form-group mg-md-l--1">
                                    <label class="form-control-label">Middle Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="middle_name" value="{{ $user->middle_name }}"
                                        placeholder="Enter lastname" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                <div class="form-group mg-md-l--1">
                                    <label class="form-control-label">Last Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="last_name" value="{{ $user->last_name }}"
                                        placeholder="Enter lastname" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">User Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="user_name" value="{{ $user->user_name }}"
                                        placeholder="Enter username" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label">Birthday: <span class="tx-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="birth_date" value="{{ $user->birth_date->format('Y-m-d') }}" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label mg-b-0-force">Role: <span
                                        class="tx-danger">*</span></label>
                                    <select id="select2-a" name="role" class="form-control" data-placeholder="Choose role" value="{{ $user->role }}">
                                        <option label="Choose country"></option>
                                        <option value="admin" {{ ($user->role == 'admin') ? 'selected' : '' }}>Admin</option>
                                        <option value="faculty" {{ ($user->role == 'faculty') ? 'selected' : '' }}>Faculty</option>
                                        <option value="student" {{ ($user->role == 'student') ? 'selected' : '' }}>Student</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            
                            <div class="col-md-8">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Email address: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="email" name="email" value="{{ $user->email }}"
                                    placeholder="Enter email address" required>
                                </div>
                            </div><!-- col-8 -->

                            <div class="col-md-4">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label">Password: <span
                                        class="tx-danger"></span></label>
                                    <input class="form-control" type="text" name="password" data-parsley-type="alphanum" data-parsley-min="8"
                                        placeholder="Enter new password">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-12">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Description:</label>
                                    <input class="form-control" type="text" name="description" value="{{ $user->description }}"
                                        placeholder="Enter self description">
                                </div>
                            </div><!-- col-12 -->

                        </div><!-- row -->

                        <div class="form-layout-footer bd pd-20 bd-t-0">
                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn btn-info mg-r-5">Edit User</button>
                                <a href="/user" class="btn btn-secondary" role="button">Cancel</a>
                            </div><!-- btn-group -->
                        </div><!-- form-group -->

                    </form>
                </div><!-- form-layout -->

                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong class="d-block d-sm-inline-block-force">Heads up!</strong> {{ $error }}
                        </div><!-- alert -->
                    @endforeach
                @endif

            </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->

        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Create Account:</div>
            </div>
        </footer>
    </div><!-- br-mainpanel -->
@endsection

@push('custom_scripts')
    <script>
        $(function () {
            'use strict'

            $('.form-layout .form-control').on('focusin', function () {
                $(this).closest('.form-group').addClass('form-group-active');
            });

            $('.form-layout .form-control').on('focusout', function () {
                $(this).closest('.form-group').removeClass('form-group-active');
            });

            // Select2
            $('#select2-a, #select2-b').select2({
                minimumResultsForSearch: Infinity
            });

            $('#select2-a').on('select2:opening', function (e) {
                $(this).closest('.form-group').addClass('form-group-active');
            });

            $('#select2-a').on('select2:closing', function (e) {
                $(this).closest('.form-group').removeClass('form-group-active');
            });

            // Datepicker
            $('.fc-datepicker').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });
            
            $('#datepickerNoOfMonths').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                numberOfMonths: 2
            });

            // Timepicker
            $('#tpBasic').timepicker();
            $('#tp2').timepicker({
                'scrollDefault': 'now'
            });
            $('#tp3').timepicker();

            $('#setTimeButton').on('click', function () {
                $('#tp3').timepicker('setTime', new Date());
            });

        });
    </script>
@endpush