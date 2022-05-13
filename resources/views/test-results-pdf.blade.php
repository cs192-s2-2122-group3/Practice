<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Practice</title>

    <style>
        @include('style')
    </style>    
</head>

<body>

    <div class="br-mainpanel">

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
        </div>
    </div>

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>
    <script src="../lib/highlightjs/highlight.pack.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script src="../lib/jquery-toggles/toggles.min.js"></script>
    <script src="../lib/jt.timepicker/jquery.timepicker.js"></script>
    <script src="../lib/spectrum/spectrum.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../lib/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="../lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

    <script src="../js/bracket.js"></script>
    <script>
      $(function(){
        'use strict'

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
        $('#tp2').timepicker({'scrollDefault': 'now'});
        $('#tp3').timepicker();

        $('#setTimeButton').on('click', function (){
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
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });


        // Rangeslider
        if($().ionRangeSlider) {
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
</body>
</html>
