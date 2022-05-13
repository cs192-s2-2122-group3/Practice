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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
@endpush

@section('content')
    <div class="br-mainpanel">
        <!-- LINK TAGS -->
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <span class="breadcrumb-item active">Take Tests - {{ $test->title }}</span>
            </nav>
        </div>

        <!-- PAGE HEADER -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5"> {{ $test->course->title.' - '.$test->title }} </h4>
            <p class="mg-b-0">{{ $test->description }}</p>
        </div>

        <!-- PAGE BODY -->
        <div class="br-pagebody">
            <!-- CONTENT -->
            <div class="br-section-wrapper">

                <form action="/test/{{ $test->id }}/evaluate" method="post" data-parsley-validated> @csrf
                    @php $count = 0 @endphp
                    @foreach($test->items as $item)

                        <!-- MULTIPLE CHOICE -->
                        @if($item->type == 0)
                            <div class="form-layout form-layout-1 mg-b-10">
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question {{ ++$count }} - {{ $item->title }} </h6>
                                <p class="mg-b-30 tx-gray-600"> {{ $item->description }} </p>

                                @foreach($item->answers as $answer)
                                    <div class="row col-lg-4">
                                        <label class="rdiobox">
                                            <input name={{ $item->id."" }} type="radio" value="{{ $answer->id }}" required>
                                            <span>{{ $answer->description }}</span>
                                        </label>
                                    </div><!-- row -->
                                @endforeach
                                
                            </div><!-- form-layout -->
                        @endif

                        <!-- MULTIPLE ANSWERS -->
                        @if($item->type == 1)
                            <div class="form-layout form-layout-1 mg-b-10">
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question {{ ++$count }} - {{ $item->title }} </h6>
                                <p class="mg-b-30 tx-gray-600"> {{ $item->description }} </p>

                                @foreach($item->answers as $answer)
                                    <div class="row col-lg-4">
                                        <label class="ckbox">
                                            <input name={{ $item->id."[]" }} type="checkbox" value="{{ $answer->id }}">
                                            <span>{{ $answer->description }}</span>
                                        </label>
                                    </div><!-- row -->
                                @endforeach
                                
                            </div><!-- form-layout -->
                        @endif

                        <!-- IDENTIFICATION -->
                        @if($item->type == 2)
                            <div class="form-layout form-layout-1 mg-b-10">
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question {{ ++$count }} - {{ $item->title }} </h6>
                                <p class="mg-b-30 tx-gray-600"> {{ $item->description }} </p>

                                <textarea name={{ $item->id."" }} class="editable tx-16 bd pd-30 tx-inverse" required>
                                    write your answer here...
                                </textarea>
                                
                            </div><!-- form-layout -->
                        @endif
                        
                    @endforeach

                    <div class="d-flex pd-t-5 justify-content-end">
                        <button type="submit" class="btn btn-info mg-r-3">Submit</button>
                        <a href="/test/archive" class="btn btn-secondary">Return</a>
                    </div><!-- btn-group -->
                </form>
            </div>
        </div>
    </div>
@endsection

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
        });
    </script>
@endpush
