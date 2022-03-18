@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Practice <span
                class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Test Practice WebApp</div>

        <form action="{{ route('login') }}" method="post" data-parsley-validate>
            @csrf
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email address" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div><!-- form-group -->

            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                @if (Route::has('password.request'))
                    <a class="tx-info tx-12 d-block mg-t-10" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div><!-- form-group -->

            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>

        <div class="mg-t-60 tx-center">Not yet registered? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->
@endsection