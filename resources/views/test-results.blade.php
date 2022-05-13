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
        
        @if($test->updated_at <= $attempt->created_at)
            <!-- LINK TAGS -->
            <div class="br-pageheader pd-y-15 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <span class="breadcrumb-item active">Test Results - {{ $test->title }}</span>
                </nav>
            </div>

            <!-- PAGE HEADER -->
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                <h4 class="tx-gray-800 mg-b-5">{{ $test->title }}</h4>
                <p class="mg-b-0">{{ $test->description }}</p>
            </div>

            <style>
            table, th, td {
                margin-left: 30px;
                margin-top: 20px;
            }
            th, td {
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
            }
            </style>
            
            <body>
            <table style="width:350px">
                <tr>
                    <th>Subject</th>
                    <td>{{ $test->course->title }}</td> 
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{ $test->user->first_name.' '.$test->user->last_name }}</td>
                </tr>
                <tr>
                    <th>Score</th>
                    <td>{{ $attempt->score.'/'.$test->count }}</td>
                </tr>
            </table>
            </body>
            <!-- PAGE BODY -->
            <div class="br-pagebody">
                <!-- CONTENT -->
                <div class="br-section-wrapper">

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
                                            @php $select = in_array((string)$answer->id,json_decode($results[$count-1]->answer_ids)) @endphp
                                            <input name={{ $item->id."" }} type="radio" value="{{ $answer->id }}" disabled {{ $select ? 'checked':'' }}>
                                            <span>{{ $answer->description }}</span>
                                        </label>
                                    </div><!-- row -->
                                @endforeach

                                <div class="form-layout form-layout-1 mg-b-5 mt-4">
                                    @php $score = $results[$count-1]->score @endphp
                                    <p class="mg-b-10 tx-gray-600">Your answer: <span style="color:{{ $score ? 'green':'red' }}">{{ $score ? 'Correct':'Wrong' }}</span></p>
                                    <p class="mg-b-5 tx-gray-600">The answer is:</span></p>
                                    <ul>
                                        @foreach($item->answers as $answer)
                                            <li {{ $answer->type ? '':'hidden'}}> {{ $answer->description }} </li>
                                        @endforeach
                                    </ul>
                                </div><!-- form-layout -->
                                
                            </div><!-- form-layout -->
                        @endif

                        <!-- MULTIPLE ANSWERS -->
                        @if($item->type == 1)
                            <div class="form-layout form-layout-1 mg-b-10">
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question {{ ++$count }} - {{ $item->title }} </h6>
                                <p class="mg-b-30 tx-gray-600"> {{ $item->description }} </p>

                                @php $ma_count = 0 @endphp
                                @foreach($item->answers as $answer)
                                    <div class="row col-lg-4">
                                        <label class="ckbox">
                                            @php
                                                $ma_count   = $ma_count + $answer->type;
                                                $ids        = json_decode($results[$count-1]->answer_ids);
                                                $select     = $ids ? in_array((string)$answer->id,$ids):0;
                                            @endphp

                                            <input name={{ $item->id."[]" }} type="checkbox" value="{{ $answer->id }}" disabled {{ $select ? 'checked':'' }}>
                                            <span>{{ $answer->description }}</span>
                                        </label>
                                    </div><!-- row -->
                                @endforeach

                                <div class="form-layout form-layout-1 mg-b-5 mt-4">
                                    @php $score = $results[$count-1]->score @endphp
                                    <p class="mg-b-10 tx-gray-600">Your answer: <span style="color:{{ $score ? 'green':'red' }}">{{ $score ? 'Correct':'Wrong' }}</span></p>
                                    <p class="mg-b-5 tx-gray-600">The answer/s are:</span></p>
                                    <ul>
                                        @if(!$ma_count) <li> none </li> @endif
                                        @foreach($item->answers as $answer)
                                            <li {{ $answer->type ? '':'hidden'}}> {{ $answer->description }} </li>
                                        @endforeach
                                    </ul>
                                </div><!-- form-layout -->
                                
                            </div><!-- form-layout -->
                        @endif

                        <!-- IDENTIFICATION -->
                        @if($item->type == 2)
                            <div class="form-layout form-layout-1 mg-b-10">
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question {{ ++$count }} - {{ $item->title }} </h6>
                                <p class="mg-b-30 tx-gray-600"> {{ $item->description }} </p>

                                <div name={{ $item->id."" }} class="tx-16 bd pd-30 tx-inverse">
                                    {{ json_decode($results[$count-1]->answer_ids)[0] }}
                                </div>

                                <div class="form-layout form-layout-1 mg-b-5 mt-4">
                                    @php $score = $results[$count-1]->score @endphp
                                    <p class="mg-b-10 tx-gray-600">Your answer: <span style="color:{{ $score ? 'green':'red' }}">{{ $score ? 'Correct':'Wrong' }}</span></p>
                                    <p class="mg-b-5 tx-gray-600">Possible answers:</span></p>
                                    <ul>
                                        @foreach($item->answers as $answer)
                                            <li {{ $answer->type ? '':'hidden'}}> {{ $answer->description }} </li>
                                        @endforeach
                                    </ul>
                                </div><!-- form-layout -->
                                
                            </div><!-- form-layout -->
                        @endif
                        
                    @endforeach

                    <div class="d-flex pd-t-5 justify-content-end">
                        <a href="/test/{{ $test->id }}/attempt/{{ $attempt->id }}/pdf" type="submit" class="btn btn-info mg-r-5">Download as PDF</a>
                        <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#verify-exit"> Return</a>
                    </div><!-- btn-group -->
            </div>
        </div>
        @else
            <!-- LINK TAGS -->
            <div class="br-pageheader pd-y-15 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <span class="breadcrumb-item active">Test Results - {{ $test->title }}</span>
                </nav>
            </div>

            <!-- PAGE HEADER -->
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                <h4 class="tx-gray-800 mg-b-5">{{ $test->title }}</h4>
                <p class="mg-b-0">{{ $test->description }}</p>
            </div>

            <style>
            table, th, td {
                margin-left: 30px;
                margin-top: 20px;
            }
            th, td {
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
            }
            </style>

            <body>
            <table style="width:350px">
                <tr>
                    <th>Subject</th>
                    <td>{{ $test->course->title }}</td> 
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{ $test->user->first_name.' '.$test->user->last_name }}</td>
                </tr>
                <tr>
                    <th>Score</th>
                    <td>{{ $attempt->score }}</td>
                </tr>
            </table>
            </body>
            <!-- PAGE BODY -->
            <div class="br-pagebody">
                <!-- CONTENT -->
                <div class="br-section-wrapper">

                    <div class="form-layout form-layout-1 mg-b-5 mt-4">
                        <p class="mg-b-5 tx-gray-600">The test was updated:</span></p>
                    </div><!-- form-layout -->

                    <div class="d-flex pd-t-5 justify-content-end">
                        <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#verify-exit"> Return</a>
                    </div><!-- btn-group -->
                </div>
            </div>
        @endif

        <!-- SMALL MODAL - EXIT -->
        <div id="verify-exit" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Exit?</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pd-20">
                        <p class="mg-b-5">Are you sure you want to exit? You will no longer be able to review the correct answers. </p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <a href="/test/archive" class="btn btn-info">Exit</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Review Answers</button>
                    </div>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div><!-- modal -->
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