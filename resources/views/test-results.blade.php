<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Manage Accounts</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="../lib/medium-editor/default.css" rel="stylesheet">
    <link href="../lib/summernote/summernote-bs4.css" rel="stylesheet">

    <link href="../lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="../lib/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
    <link href="../lib/spectrum/spectrum.css" rel="stylesheet">
    <link href="../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>

  <body>

    <!-- ========== START: LEFT PANEL =========== -->
    @include('layouts.lpanel')
    <!-- ============ END: LEFT PANEL ============ -->


    <!-- =========== START: HEAD PANEL =========== -->
    @include('layouts.hpanel')
    <!-- ============ END: HEAD PANEL ============ -->


    <!-- ========== START: RIGHT PANEL =========== -->
    @include('layouts.rpanel')
    <!-- =========== END: RIGHT PANEL ============ -->

    <!-- =========== START: MAIN PANEL =========== -->
    <div class="br-mainpanel">
        <!-- LINK TAGS -->
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="\">Home</a>
            <a class="breadcrumb-item" href="\">Pages</a>
            <span class="breadcrumb-item active">Test Results - (Insert Test Name)</span>
            </nav>
        </div>
    
        <!-- PAGE HEADER -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">CS 145 - EM Waves Go Brrt (Results)</h4>
            <p class="mg-b-0">some test description, blah blah</p>
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
                <td>CS 145</td> 
            </tr>
            <tr>
                <th>Topic</th>
                <td>EM Waves Go Brrt</td>
            </tr>
            <tr>
                <th>Score</th>
                <td>4/4</td>
            </tr>
        </table>
        </body>

    
        <!-- PAGE BODY -->
        <div class="br-pagebody">
            <!-- CONTENT -->
            <div class="br-section-wrapper">
    
                <!-- MULTIPLE CHOICE -->
                <div class="form-layout form-layout-1 mg-b-10">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question 1 - RB Multiple Choice</h6>
                    <p class="mg-b-30 tx-gray-600">Question Details: Radio Box</p>
    
                    @for($i = 0; $i < 3; $i++)
                        <div class="row col-lg-3">
                            <label class="rdiobox">
                                <input name="rdio" type="radio">
                                <span>Radio Unchecked</span>
                            </label>
                        </div><!-- row -->
                    @endfor

                    <div class="row col-lg-3">
                        <label class="rdiobox">
                            <input name="rdio" type="radio" checked>
                            <span>Radio Unchecked</span>
                        </label>
                    </div><!-- row -->

                    <div class="form-layout form-layout-1 mg-b-5 mt-4">
                        <p class="mg-b-10 tx-gray-600">Your answer is: <span style="color:green">Correct</span></p>
                        <p class="mg-b-5 tx-gray-600">Explanation:</span></p>
                        <ul>
                            <li> The EM waves are yes. </li>
                            <li> They are NOT no. </li>
                        </ul>
                    </div><!-- form-layout -->

                </div><!-- form-layout -->

                <!-- MULTIPLE CHOICE -->
                <div class="form-layout form-layout-1 mg-b-10">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question 2 - CB Multiple Choice</h6>
                    <p class="mg-b-30 tx-gray-600">Question Details: Check Box</p>
    
                    @for($i = 0; $i < 4; $i++)
                        <div class="row col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox"><span>Checkbox Unchecked</span>
                            </label>
                        </div><!-- row -->
                    @endfor
                    
                    <div class="row col-lg-4">
                        <label class="ckbox">
                            <input type="checkbox" checked><span>Checkbox Checked</span>
                          </label>
                    </div><!-- row -->

                    <div class="form-layout form-layout-1 mg-b-5 mt-4">
                        <p class="mg-b-10 tx-gray-600">Your answer is: <span style="color:green">Correct</span></p>
                        <p class="mg-b-5 tx-gray-600">Explanation:</span></p>
                        <ul>
                            <li> Checked is correct. </li>
                        </ul>
                    </div><!-- form-layout -->
    
                </div><!-- form-layout -->
    
                <!-- ESSAY TYPE -->
                <div class="form-layout form-layout-1 mg-b-10">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question 3 - Essay</h6>
                    <p class="mg-b-30 tx-gray-600">Question Details: Essay Type</p>
    
                    <div class="tx-16 bd pd-30 tx-inverse">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <div class="form-layout form-layout-1 mg-b-5 mt-4">
                        <p class="mg-b-10 tx-gray-600">Your answer is: <span style="color:green">Correct</span></p>
                        <p class="mg-b-5 tx-gray-600">Comments:</span></p>
                        <ul>
                            <li> Good insights! </li>
                        </ul>
                    </div><!-- form-layout -->
    
                </div><!-- form-layout -->
    
                <!-- ESSAY TYPE -->
                <div class="form-layout form-layout-1 mg-b-10">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question 4 - Essay</h6>
                    <p class="mg-b-30 tx-gray-600">Question Details: Essay Type</p>
    
                    <div class="tx-16 bd pd-30 tx-inverse">
                        Hello World!
                    </div>

                    <div class="form-layout form-layout-1 mg-b-5 mt-4">
                        <p class="mg-b-10 tx-gray-600">Your answer is: <span style="color:green">Correct</span></p>
                        <p class="mg-b-5 tx-gray-600">Comments:</span></p>
                        <ul>
                            <li> Good insights! </li>
                        </ul>
                    </div><!-- form-layout -->
    
                </div><!-- form-layout -->
                
                <div class="pd-t-10">
                    <button class="btn btn-info">Download as PDF</button>
                    <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#verify-exit"> Return</a>
                </div><!-- form-layout-footer -->
    
        </div>
    </div>

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
            <a href="\test-manager" class="btn btn-info">Exit</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Review Answers</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->



    <!-- ============ END: MAIN PANEL ============ -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/summernote/summernote-bs4.min.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>
    <script src="../lib/highlightjs/highlight.pack.js"></script>
    <script src="../lib/medium-editor/medium-editor.js"></script>
    
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