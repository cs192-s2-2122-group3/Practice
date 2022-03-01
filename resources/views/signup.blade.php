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
            <div class="row row-xs">
                <div class="col-sm-4">
                <select class="form-control select2" data-placeholder="Month" data-parsley-class-handler="#slWrapper1" data-parsley-errors-container="#slErrorContainer1" required>
                    <option label="Month"></option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                </select>
                </div><!-- col-4 -->
                <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                <select class="form-control select2" data-placeholder="Day" data-parsley-class-handler="#slWrapper1" data-parsley-errors-container="#slErrorContainer1" required>
                    <option label="Day"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                </div><!-- col-4 -->
                <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                <select class="form-control select2" data-placeholder="Year" data-parsley-class-handler="#slWrapper1" data-parsley-errors-container="#slErrorContainer1" required>
                    <option label="Year"></option>
                    <option value="1">2010</option>
                    <option value="2">2011</option>
                    <option value="3">2012</option>
                    <option value="4">2013</option>
                    <option value="5">2014</option>
                </select>
                </div><!-- col-4 -->
            </div><!-- row -->
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
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
