<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Forgot Password</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse"><span class="tx-normal"></span> Forgot Password? <span class="tx-normal"></span></div>

        <form action="form-validation.html" data-parsley-validate>
            <div class="form-group mg-t-20">
                <input type="text" class="form-control" placeholder="Enter your email" required>
            </div><!-- form-group -->

            <button type="submit" class="btn btn-info btn-block">Send Password Reset Link</button>
        </form>

        <div class="mg-t-10 tx-center">Go back to <a href="\login" class="tx-info">Log In</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<div class="pd-y-50 bg-gray-700">
    <div id="reset-link" class="modal d-block pos-static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-success mg-b-20">Reset password link sent!</h4>
                    <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                    <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">
                        Continue</button>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
</div><!-- pd-y-50 -->

<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/popper.js/popper.js"></script>
<script src="../lib/bootstrap/bootstrap.js"></script>

</body>
</html>
