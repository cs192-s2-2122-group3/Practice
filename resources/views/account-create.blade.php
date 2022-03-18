<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Create Accounts</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../lib/jt.timepicker/jquery.timepicker.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
</head>

<body>

    <!-- ========== START: LEFT PANEL ============ -->
    @include('layouts.lpanel')
    <!-- ============ END: LEFT PANEL ============ -->


    <!-- =========== START: HEAD PANEL =========== -->
    @include('layouts.hpanel')
    <!-- ============ END: HEAD PANEL ============ -->


    <!-- ========== START: RIGHT PANEL =========== -->
    @include('layouts.rpanel')
    <!-- =========== END: RIGHT PANEL ============ -->

    <!-- ========== START: MAIN PANEL ============ -->
    <div class="br-mainpanel">

        <div class="br-pageheader pd-y-15 pd-md-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <a class="breadcrumb-item" href="\account">Account Manager</a>
                <span class="breadcrumb-item active">Create Account</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Create Account</h4>
            <p class="mg-b-0">Create an account for a user here. Please specify the correct role.</p>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-10 mg-b-10">New Account Form</h6>
                <p class="mg-b-30 tx-gray-600">Input the required values in the following fields</p>

                <div class="form-layout form-layout-2 mg-b-20">
                    <form action="/account-manager" method="post" data-parsley-validate>
                        @csrf
                        <div class="row no-gutters">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">First Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="first_name"
                                        placeholder="Enter firstname" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                <div class="form-group mg-md-l--1">
                                    <label class="form-control-label">Middle Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="middle_name"
                                        placeholder="Enter lastname" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                <div class="form-group mg-md-l--1">
                                    <label class="form-control-label">Last Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="last_name"
                                        placeholder="Enter lastname" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">User Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="user_name"
                                        placeholder="Enter username" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label">Birthday: <span class="tx-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="mm-dd-yyyy" name="birth_date"
                                        pattern="\d{4}-\d{2}-\d{2}" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label mg-b-0-force">Role: <span
                                            class="tx-danger">*</span></label>
                                    <select id="select2-a" name="role" class="form-control"
                                        data-placeholder="Choose role">
                                        <option label="Choose user role"></option>
                                        <option value="admin">Admin</option>
                                        <option value="faculty">Faculty</option>
                                        <option value="student">Student</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-8">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Email address: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="email" name="email"
                                        placeholder="Enter email address" required>
                                </div>
                            </div><!-- col-8 -->

                            <div class="col-md-4">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="password"
                                        placeholder="Enter email address" data-parsley-type="alphanum"
                                        data-parsley-min="8" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-12">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Description:</label>
                                    <input class="form-control" type="text" name="description"
                                        placeholder="Enter self description">
                                </div>
                            </div><!-- col-12 -->

                        </div><!-- row -->

                        <div class="form-layout-footer bd pd-20 bd-t-0">
                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn btn-info mg-r-5">Create User</button>
                                <a href="/account-manager" class="btn btn-secondary" role="button">Cancel</a>
                            </div><!-- btn-group -->
                        </div><!-- form-group -->

                    </form>

                </div><!-- form-layout -->

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

            </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->

        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Create Account:</div>
            </div>
        </footer>
    </div><!-- br-mainpanel -->
    <!-- ============ END: MAIN PANEL ============ -->

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

    <script src="../js/bracket.js"></script>
    <script>
        $(function () {
            'use strict'

            $('.form-layout .form-control').on('focusin', function () {
                $(this).closest('.form-group').addClass('form-group-active');
            });

            $('.form-layout .form-control').on('focusout', function () {
                $(this).closest('.form-group').removeClass('form-group-active');
            });

            // Select2
            $('#select2-a, #select2-b').select2({
                minimumResultsForSearch: Infinity
            });

            $('#select2-a').on('select2:opening', function (e) {
                $(this).closest('.form-group').addClass('form-group-active');
            });

            $('#select2-a').on('select2:closing', function (e) {
                $(this).closest('.form-group').removeClass('form-group-active');
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
            $('#tp2').timepicker({
                'scrollDefault': 'now'
            });
            $('#tp3').timepicker();

            $('#setTimeButton').on('click', function () {
                $('#tp3').timepicker('setTime', new Date());
            });

        });

    </script>
</body>

</html>
