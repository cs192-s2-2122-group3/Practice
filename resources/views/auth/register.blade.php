@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-600 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Practice <span
                class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Test Practice WebApp</div>

        <form action="{{ route('register') }}" method="post" data-parsley-validate>
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

            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Enter your password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group">
                <input type="password" name="password_confirmation" id="password-confirm" class="form-control"
                        placeholder="Confirm your password" required autocomplete="new-password">
            </div><!-- form-group -->

            <div class="form-group">
                <div class="row row-xs">

                    <div class="col-sm-4">
                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror"
                                placeholder="firstname" value="{{ old('first_name') }}" required>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div><!-- col-6 -->

                    <div class="col-sm-4">
                        <input type="text" name="middle_name" id="middle_name" class="form-control @error('middle_name') is-invalid @enderror"
                                placeholder="middlename" value="{{ old('middle_name') }}" required>
                        @error('middle_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div><!-- col-6 -->

                    <div class="col-sm-4">
                        <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror"
                                placeholder="lastname" value="{{ old('last_name') }}" required>
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div><!-- col-6 -->

                </div><!-- row -->
            </div><!-- form-group -->

            <div class="form-group">
                <input type="text" name="user_name" id="user_name" class="form-control @error('user_name') is-invalid @enderror"
                                placeholder="Enter your username" value="{{ old('user_name') }}" required>
                @error('user_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group">
                <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Birthday</label>
                <div class="mg-b-30">
                    <div class="input-group">
                        <!--<span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>-->
                        <input type="date" name="birth_date" id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" placeholder="mm-dd-yyyy" 
                                        pattern="\d{4}-\d{2}-\d{2}" value="{{ old('birth_date') }}" required>
                    @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div><!-- wd-200 -->
            </div><!-- form-group -->

            <div class="form-group">
                <select name="role" id="role" class="form-control select2 @error('role') is-invalid @enderror" data-placeholder="User Type"
                    data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" required>
                    <option label="User Type"></option>
                    <option value="student"> Student</option>
                    <option value="faculty"> Faculty</option>
                </select>
                @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->

            <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and
                terms of use of our website.</div>
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form> <!-- form-validation -->
        <!--<div class="mg-t-40 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>-->
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

@endsection