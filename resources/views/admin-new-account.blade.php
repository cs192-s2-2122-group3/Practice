<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Edit Test</title>

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
            <span class="breadcrumb-item active">Admin:New Account</span>
            </nav>
        </div>
    
        <!-- PAGE BODY -->
        <div class="br-pagebody">
            <!-- CONTENT -->
            <div class="br-section-wrapper">
                
                <form action="form-validation.html" data-parsley-validate>

                    <div class="d-flex justify-content-center">
                        <h4 class="tx-gray-800 mg-b-5.text-center">Create New Account </h4>
                    </div>

                    <div class="d-flex flex-column bd-highlight mb-2">

                        <div class="p-2 bd-highlight">
                            <!-- MIDDLE NAME -->
                            <h5 class="tx-gray-800 mg-b-5">Username </h5>
                            <div class="form-group">
                            <input type="text" class="form-control">
                            </div><!-- form-group -->
                        </div>

                        <div class="p-2 bd-highlight">
                            <!-- MIDDLE NAME -->
                            <h5 class="tx-gray-800 mg-b-5">Email Address </h5>
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="example: abc123@up.edu.ph">
                            </div><!-- form-group -->
                        </div>

                        <div class="p-2 bd-highlight">
                            <!-- MIDDLE NAME -->
                            <h5 class="tx-gray-800 mg-b-5">Password </h5>
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Must contain at least one (1) number and an uppercase letter">
                            </div><!-- form-group -->
                        </div>
                        
                        <div class="d-flex flex-row bd-highlight">
                            <div class="p-2 bd-highlight">
                                <!-- FIRST NAME -->
                                <h5 class="tx-gray-800 mg-b-5">First Name </h5>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="Include Suffix if any">
                                </div><!-- form-group -->
                            </div>
                            <div class="p-2 bd-highlight">
                                <!-- MIDDLE NAME -->
                                <h5 class="tx-gray-800 mg-b-5">Middle Name </h5>
                                <div class="form-group">
                                <input type="text" class="form-control">
                                </div><!-- form-group -->
                            </div>
                            <div class="p-2 bd-highlight">
                                <!-- LAST NAME -->
                                <h5 class="tx-gray-800 mg-b-5">Last Name </h5>
                                <div class="form-group">
                                <input type="text" class="form-control">
                                </div><!-- form-group -->
                            </div>
                        </div>

                        <div class="p-2 bd-highlight">
                                <h5 class="tx-gray-800 mg-b-5">Birthdate </h5>
                                <div class="form-group">
                                    <div class="mg-b-30">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                            <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" required>
                                        </div>
                                    </div><!-- wd-200 -->
                                </div><!-- form-group -->
                        </div>

                        <div class="p-2 bd-highlight">
                            <h5 class="tx-gray-800 mg-b-5">User Type </h5>
                            <div class="form-group">
                                <select class="form-control select2" data-placeholder="User Type" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" required>
                                    <option label="User Type"></option>
                                    <option value="1"> Student </option>
                                    <option value="2"> Faculty </option>
                                </select>
                            </div><!-- form-group -->
                        </div>

                        <div class="p-2 bd-highlight">
                            <!-- MIDDLE NAME -->
                            <h5 class="tx-gray-800 mg-b-5">Description/Bio </h5>
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Maximum of 140 characters">
                            </div><!-- form-group -->
                        </div>

                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-info mg-r-3">Create Account</button>
                    </div><!-- btn-group -->
                    
                </form> <!-- form-validation -->
    
        </div>
    </div>

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