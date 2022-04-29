@extends('layouts.app')

@section('content')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-600 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="tx-left mg-b-10">Reset Password:</div>

        <form action="{{ route('password.email') }}" method="post" data-parsley-validate>
            @csrf

            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control "
                        placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->

            <button type="submit" class="btn btn-info btn-block">Send Password Reset Link</button>
        </form> <!-- form-validation -->
        <!--<div class="mg-t-40 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>-->
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
