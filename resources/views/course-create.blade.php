@extends('layouts.app')

@push('styles')
    <link href="{{ URL::asset('/lib/highlightjs/github.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/medium-editor/medium-editor.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/medium-editor/default.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/summernote/summernote-bs4.css'); }}" rel="stylesheet">

    <link href="{{ URL::asset('/lib/jquery-toggles/toggles-full.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/jt.timepicker/jquery.timepicker.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/spectrum/spectrum.css" rel="stylesheet'); }}">
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
                <span class="breadcrumb-item active">Edit Course</span>
            </nav>
        </div>

        <!-- PAGE BODY -->
        <div class="br-pagebody">
            <!-- CONTENT -->

            <form action="/course" method="post" data-parsley-validate> @csrf
                @method('post')

                <div class="br-section-wrapper">
                    <!-- TITLE -->
                    <h5 class="tx-gray-800 mg-b-5">Title </h5>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Enter the test title"
                            value="{{ old('title') }}" required>
                    </div><!-- form-group -->

                    <!-- DESCRIPTION -->
                    <h6 class="tx-gray-800 mg-b-5">Description </h6>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control"
                            placeholder="Enter the test description" value="{{ old('description') }}" required>
                    </div><!-- form-group -->

                    <!-- ERRORS -->
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

                    <!-- VERIFICATION -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-info mg-r-5">Create</button>
                        <a href="/course" class="btn btn-secondary" role="button">Cancel</a>
                    </div><!-- btn-group -->
                </div>

                <div id="users_container">
                    @include('course-create-table',['faculties'=>$faculties,'students'=>$students,'page'=>$page])
                </div>
            </form> <!-- form-validation -->
        </div>
    </div>
@endsection

@push('custom_styles')
    <style>
        .bootstrap-tagsinput .tag [data-role="remove"]:after {
            content: "";
            padding: 0px 2px;
        }
    </style>
@endpush


@push('custom_scripts')
    <script>
        $(function () {
            'use strict'

            // Inline editor
            var editor = new MediumEditor('.editable');

            // Summernote editor
            $('#summernote').summernote({
                height: 150,
                tooltip: false
            })

            // Toggles
            $('.toggle').toggles({
                on: true,
                height: 26
            });

            // Input Masks
            $('#dateMask').mask('99/99/9999');
            $('#phoneMask').mask('(999) 999-9999');
            $('#ssnMask').mask('999-99-9999');

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

            // Time Picker
            $('#tpBasic').timepicker();
            $('#tp2').timepicker({
                'scrollDefault': 'now'
            });
            $('#tp3').timepicker();

            $('#setTimeButton').on('click', function () {
                $('#tp3').timepicker('setTime', new Date());
            });

            // Color picker
            $('#colorpicker').spectrum({
                color: '#17A2B8'
            });

            $('#showAlpha').spectrum({
                color: 'rgba(23,162,184,0.5)',
                showAlpha: true
            });

            $('#showPaletteOnly').spectrum({
                showPaletteOnly: true,
                showPalette: true,
                color: '#DC3545',
                palette: [
                    ['#1D2939', '#fff', '#0866C6', '#23BF08', '#F49917'],
                    ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
                ]
            });


            // Rangeslider
            if ($().ionRangeSlider) {
                $('#rangeslider1').ionRangeSlider();

                $('#rangeslider2').ionRangeSlider({
                    min: 100,
                    max: 1000,
                    from: 550
                });

                $('#rangeslider3').ionRangeSlider({
                    type: 'double',
                    grid: true,
                    min: 0,
                    max: 1000,
                    from: 200,
                    to: 800,
                    prefix: '$'
                });

                $('#rangeslider4').ionRangeSlider({
                    type: 'double',
                    grid: true,
                    min: -1000,
                    max: 1000,
                    from: -500,
                    to: 500,
                    step: 250
                });
            }

            $(document).ready(function() {
                $(document).on('click', '.page-link', function(event) {
                    event.preventDefault();
                    var page = $(this).attr('href').split('?')[1];
                    $.ajax({
                        url:"/course/create/fetch?"+page,
                        success:function(data) {
                            $('#users_container').html(data);
                            $('input[data-role=tagsinput]').tagsinput();
                        }
                    });
                });

                $(document).on('click', '.btn-tab', function(event) {
                    event.preventDefault();
                    var page = $(this).attr('href').split('?')[1];
                    $.ajax({
                        url:"/course/create/fetch?"+page,
                        success:function(data) {
                            $('#users_container').html(data);
                            $('input[data-role=tagsinput]').tagsinput();
                        }
                    });
                });

                $(document).on('click', '.btn-add', function(event) {
                    event.preventDefault();
                    var id = $(this).attr('href').split('add/')[1];
                    $.ajax({
                        url:"/course/create/add/" + id,
                        success:function(data) {
                            $('#user_list').html(data);
                            $("#add"+id).prop("hidden", true);
                            $("#sub"+id).prop("hidden", false);
                            $('input[data-role=tagsinput]').tagsinput();
                        }
                    });
                });

                $(document).on('click', '.btn-sub', function(event) {
                    event.preventDefault();
                    var id = $(this).attr('href').split('remove/')[1];
                    $.ajax({
                        url:"/course/create/remove/" + id,
                        success:function(data) {
                            $('#user_list').html(data);
                            $("#add"+id).prop("hidden", false);
                            $("#sub"+id).prop("hidden", true);
                            $('input[data-role=tagsinput]').tagsinput();
                        }
                    });
                });
            });
        });

    </script>
@endpush