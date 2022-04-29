@extends('layouts.app')

@push('styles')
    <link href="{{ URL::asset('/lib/highlightjs/github.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/medium-editor/medium-editor.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/medium-editor/default.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/summernote/summernote-bs4.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/jquery-toggles/toggles-full.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/jt.timepicker/jquery.timepicker.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/spectrum/spectrum.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/bootstrap-tagsinput/bootstrap-tagsinput.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/ion.rangeSlider/css/ion.rangeSlider.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css'); }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ URL::asset('/lib/summernote/summernote-bs4.min.js'); }}"></script>
    <script src="{{ URL::asset('/lib/highlightjs/highlight.pack.js'); }}"></script>
    <script src="{{ URL::asset('/lib/medium-editor/medium-editor.js'); }}"></script>
    <script src="{{ URL::asset('/lib/jquery-toggles/toggles.min.js'); }}"></script>
    <script src="{{ URL::asset('/lib/jt.timepicker/jquery.timepicker.js'); }}"></script>
    <script src="{{ URL::asset('/lib/spectrum/spectrum.js'); }}"></script>
    <script src="{{ URL::asset('/lib/jquery.maskedinput/jquery.maskedinput.js'); }}"></script>
    <script src="{{ URL::asset('/lib/bootstrap-tagsinput/bootstrap-tagsinput.js'); }}"></script>
    <script src="{{ URL::asset('/lib/ion.rangeSlider/js/ion.rangeSlider.min.js'); }}"></script>
@endpush

@section('content')
    
    <div class="br-mainpanel">
        <!-- LINK TAGS -->
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <span class="breadcrumb-item active">Edit Test</span>
            </nav>
        </div>

        <!-- PAGE BODY -->
        <div class="br-pagebody">
            <!-- CONTENT -->
            <div class="br-section-wrapper">

                <form action="form-validation.html" data-parsley-validate>
                    <!-- TITLE -->
                    <h5 class="tx-gray-800 mg-b-5">Title </h5>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter the test title" required>
                    </div><!-- form-group -->

                    <!-- DESCRIPTION -->
                    <h6 class="tx-gray-800 mg-b-5">Description </h6>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter the test description">
                    </div><!-- form-group -->

                    <!-- QUESTIONS -->
                    <div class="mg-b-5" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-secondary active"><i class="fa fa-plus"></i></button>
                    </div>

                    <!-- ACTUAL QUESTIONS -->
                    <div class="br-section-wrapper mg-b-10 teal-100">

                        <!-- DEFAULT -->
                        <div class="form-layout form-layout-4 mg-b-20">
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question 1 - Default</h6>
                            <div class="row row-xs">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="title" required>
                                    </div><!-- form-group -->
                                </div><!-- col-3 -->

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="description">
                                    </div><!-- form-group -->
                                </div><!-- col-6 -->

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control select2" data-placeholder="Question Type">
                                            <option label="Question Type"></option>
                                            <option value="1"> Multiple Choice </option>
                                            <option value="2"> Multiple Answers </option>
                                            <option value="2"> Essay Type </option>
                                        </select>
                                    </div><!-- form-group -->
                                </div><!-- col-3 -->
                            </div><!-- row -->
                        </div><!-- form-layout -->

                        <!-- Multiple Choice -->
                        <div class="form-layout form-layout-4 mg-b-20">
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question 2 - RB Multiple Choice</h6>

                            <div class="row row-xs">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="title" required>
                                    </div><!-- form-group -->
                                </div><!-- col-3 -->

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="description">
                                    </div><!-- form-group -->
                                </div><!-- col-6 -->

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control select2" data-placeholder="Multiple Choice">
                                            <option label="Question Type"></option>
                                            <option value="1"> Multiple Choice </option>
                                            <option value="2"> Multiple Answers </option>
                                            <option value="2"> Essay Type </option>
                                        </select>
                                    </div><!-- form-group -->
                                </div><!-- col-3 -->
                            </div><!-- row -->

                            <table class="table mg-b-0 table-contact">

                                <!-- TABLE HEADER -->
                                <thead>
                                    <tr>
                                        <th class="wd-5p"></th>
                                        <th class="tx-10-force tx-mont tx-medium hidden-xs-down"></th>
                                    </tr>
                                </thead>

                                <!-- TABLE BODY -->
                                <tbody>
                                    <!-- for loop -->
                                    @for ($i = 0; $i < 4; $i++) <tr>
                                        <td class="valign-middle">
                                            <label class="rdiobox mg-b-0">
                                                <input name="rdio" type="radio"><span></span>
                                            </label>
                                        </td>

                                        <td class="valign-middle">
                                            <div class="form-group mb-2">
                                                <input type="text" class="form-control pd-5 mg-t-5" placeholder="answer"
                                                    required>
                                            </div><!-- form-group -->
                                        </td>
                                        </tr>
                                        @endfor
                                </tbody>
                            </table>

                            <div class="mg-b-5 float-right" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-secondary active"><i class="fa fa-plus"></i></button>
                            </div>
                        </div><!-- form-layout -->

                        <!-- ESSAY TYPE -->
                        <div class="form-layout form-layout-4 mg-b-20">
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question 3 - CB Multiple Choice</h6>

                            <div class="row row-xs">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="title" required>
                                    </div><!-- form-group -->
                                </div><!-- col-3 -->

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="description">
                                    </div><!-- form-group -->
                                </div><!-- col-6 -->

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control select2" data-placeholder="Multiple Choice">
                                            <option label="Question Type"></option>
                                            <option value="1"> Multiple Choice </option>
                                            <option value="2"> Multiple Answers </option>
                                            <option value="2"> Essay Type </option>
                                        </select>
                                    </div><!-- form-group -->
                                </div><!-- col-3 -->
                            </div><!-- row -->

                            <table class="table mg-b-0 table-contact">

                                <!-- TABLE HEADER -->
                                <thead>
                                    <tr>
                                        <th class="wd-5p"></th>
                                        <th class="tx-10-force tx-mont tx-medium hidden-xs-down"></th>
                                    </tr>
                                </thead>

                                <!-- TABLE BODY -->
                                <tbody>
                                    <!-- for loop -->
                                    @for ($i = 0; $i < 4; $i++) <tr>
                                        <td class="valign-middle">
                                            <label class="ckbox mg-b-0">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </td>

                                        <td class="valign-middle">
                                            <div class="form-group mb-2">
                                                <input type="text" class="form-control pd-5 mg-t-5" placeholder="answer"
                                                    required>
                                            </div><!-- form-group -->
                                        </td>
                                        </tr>
                                        @endfor
                                </tbody>
                            </table>

                            <div class="mg-b-5 float-right" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-secondary active"><i class="fa fa-plus"></i></button>
                            </div>
                        </div><!-- form-layout -->


                        <!-- ESSAY TYPE -->
                        <div class="form-layout form-layout-2 mg-b-20">
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question 4 - Essay Type</h6>

                            <div class="row row-xs">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="title" required>
                                    </div><!-- form-group -->
                                </div><!-- col-3 -->

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="description">
                                    </div><!-- form-group -->
                                </div><!-- col-6 -->

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control select2" data-placeholder="Multiple Choice">
                                            <option label="Question Type"></option>
                                            <option value="1"> Multiple Choice </option>
                                            <option value="2"> Multiple Answers </option>
                                            <option value="2"> Essay Type </option>
                                        </select>
                                    </div><!-- form-group -->
                                </div><!-- col-3 -->
                            </div><!-- row -->
                        </div><!-- form-layout -->
                    </div><!-- br-section-wrapper -->

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-info mg-r-3" data-toggle="modal"
                            data-target="#verify-publish">Save</button>
                        <button class="btn btn-secondary">Return</button>
                    </div><!-- btn-group -->

                </form> <!-- form-validation -->

            </div>
        </div>

        <!-- SMALL MODAL - PUBLISH -->
        <div id="verify-publish" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Publish?</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pd-20">
                        <p class="mg-b-5">Are you sure? Publishing this test will make it available to the students under
                            this course.
                            You may opt to save it in your drafts to continue editing later.
                        </p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <a href="\test-manager" class="btn btn-info">Publish</a>
                        <a href="\test-manager" class="btn btn-secondary">Save as Draft</a>
                    </div>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div>
@endsection

@push('custom_scripts')
    <script>
        $(function () {
            'use strict'

            // Summernote editor
            $('#summernote').summernote({
                height: 150,
                tooltip: true
            })
        });
    </script>
@endpush