<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Login</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Practice <span
                    class="tx-normal">]</span></div>
            <div class="tx-center mg-b-40">The Test Practice WebApp</div>

            <form action="form-validation.html" data-parsley-validate>
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your email address" required>
                </div><!-- form-group -->

<<<<<<< HEAD
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password" required>
                    <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div><!-- form-group -->
=======
            <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter your password" required>
            <a href="\forgot-password" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
            </div><!-- form-group -->
>>>>>>> 1b90a4b5bd2e2861c2cefa16ee6fa434469aad8b

                <button type="submit" class="btn btn-info btn-block">Sign In</button>
            </form>

            <div class="mg-t-60 tx-center">Not yet registered? <a href="\signup" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>

</body>

</html>
