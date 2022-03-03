<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Signup</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/highlightjs/github.css" rel="stylesheet">
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

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-500 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Practice <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Test Practice WebApp</div>
        
        <form action="form-validation.html" data-parsley-validate>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter your username" required>
            </div><!-- form-group -->

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div><!-- form-group -->

            <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter your password" required>
            </div><!-- form-group -->

            <div class="form-group">
                <div class="row row-xs">

                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="firstname" required>
                    </div><!-- col-6 -->

                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="lastname" required>
                    </div><!-- col-6 -->

                </div><!-- row -->
            </div><!-- form-group -->

            <div class="form-group">
            <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Birthday</label>
              <div class="mg-b-30">
                <div class="input-group">
                  <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                  <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" required>
                </div>
              </div><!-- wd-200 -->
            </div><!-- form-group -->

            <div class="form-group">
                <select class="form-control select2" data-placeholder="User Type" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" required>
                    <option label="User Type"></option>
                    <option value="1"> Student </option>
                    <option value="2"> Faculty </option>
                </select>
            </div><!-- form-group -->
        
            <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form> <!-- form-validation -->
        <!--<div class="mg-t-40 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>-->
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>
    <script src="../lib/highlightjs/highlight.pack.js"></script>
    <script src="../lib/jquery-toggles/toggles.min.js"></script>
    <script src="../lib/jt.timepicker/jquery.timepicker.js"></script>
    <script src="../lib/spectrum/spectrum.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../lib/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="../lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    
    <script src="../js/bracket.js"></script>

    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
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
        $('#tp2').timepicker({'scrollDefault': 'now'});
        $('#tp3').timepicker();

        $('#setTimeButton').on('click', function (){
        $('#tp3').timepicker('setTime', new Date());
      });
      });
    </script>
  </body>
</html>
