<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Edit Course</title>

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
            <span class="breadcrumb-item active">Edit Course</span>
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

                    <!-- HANDLERS -->
                    <h6 class="tx-gray-800 mg-b-5">Handlers </h6>
                    <div class="form-group">
                    <input type="text" value="Angel Hernandez, Lorenzo Sotto, Julia Ysobel, Rey Delos Reyes" data-role="tagsinput">
                    </div><!-- form-group -->
                    
                    <!-- VERIFICATION -->                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-info mg-r-3">Update</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div><!-- btn-group -->
                    
                </form> <!-- form-validation -->
        </div>

        <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">
    
            <!-- START: DISPLAYED FOR MOBILE ONLY -->
            <div class="dropdown hidden-sm-up">
              <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="icon ion-more"></i></a>
              <div class="dropdown-menu pd-10">
                <nav class="nav nav-style-1 flex-column mg-l-10">
                    <a href="#" class="btn btn-info">Add to Handlers</a>
                </nav>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <!-- END: DISPLAYED FOR MOBILE ONLY -->
    
            <div class="btn-group hidden-xs-down">
              <a href="#" class="btn btn-outline-info"><i class="fa fa-th"></i></a>
              <a href="#" class="btn btn-outline-info active"><i class="fa fa-th-list"></i></a>
            </div><!-- btn-group -->
    
            <div class="mg-l-auto hidden-xs-down">
              <a href="#" class="btn btn-info">Add to Handlers</a>
            </div>
    
          </div><!-- d-flex -->
    
          <div class="br-pagebody pd-x-20 pd-sm-x-30 mg-b-30">
            <div class="card bd-0 shadow-base">
              <table class="table mg-b-0 table-contact">
    
                <!-- TABLE HEADER -->
                <thead>
                  <tr>
                    <th class="wd-5p">
                      <label class="ckbox mg-b-0">
                        <input type="checkbox"><span></span>
                      </label>
                    </th>
                    <th class="tx-10-force tx-mont tx-medium">Name / Email</th>
                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Username</th>
                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Type</th>
                    <th class="wd-5p hidden-xs-down"></th>
                  </tr>
                </thead>
    
                <!-- TABLE BODY -->
                <tbody>
                    <!-- for loop -->
                    @for ($i = 0; $i < 10; $i++)
    
                    <tr>
                        <td class="valign-middle">
                          <label class="ckbox mg-b-0">
                            <input type="checkbox"><span></span>
                          </label>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                            <div class="mg-l-15">
                              <div class="tx-inverse">Somebody T. Iusetoknow</div>
                              <span class="tx-12">STIUSTK@up.edu.ph</span>
                            </div>
                          </div>
                        </td>
                        <td class="valign-middle hidden-xs-down">shiro</td>
                        <td class="valign-middle hidden-xs-down">Faculty</td>
                        <td class="dropdown hidden-xs-down">
                          <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                          <div class="dropdown-menu dropdown-menu-right pd-10">
                            <nav class="nav nav-style-1 flex-column">
                              <a href="" class="nav-link">Info</a>
                              <a href="" class="nav-link">Email</a>
                              <a href="" class="nav-link">Edit</a>
                              <a href="" class="nav-link">Delete</a>
                            </nav>
                          </div><!-- dropdown-menu -->
                        </td>
                      </tr>
    
                    @endfor
    
                </tbody>
              </table>
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