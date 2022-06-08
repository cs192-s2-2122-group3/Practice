<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Practice</title>

    <!-- vendor css -->
    <link href="{{ URL::asset('/lib/font-awesome/css/font-awesome.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/Ionicons/css/ionicons.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/perfect-scrollbar/css/perfect-scrollbar.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/jquery-switchbutton/jquery.switchButton.css'); }}" rel="stylesheet">

    <!-- page styles -->
    @stack('styles')

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bracket.css'); }}">

    <!--custom styles -->
    @stack('custom_styles')
</head>

<body class="with-subleft">
    @guest
        <div class="ht-65 bd bg-gray-100 pd-x-20 d-flex align-items-center justify-content-end">
            <h4 class="mg-b-0 tx-uppercase tx-bold tx-spacing--2 tx-inverse tx-poppins mg-r-auto">Practice</h4>
            <!-- navbar -->
            <ul class="nav nav-pills flex-column flex-md-row justify-content-end hidden-xs-down" role="tablist">
                <!-- login -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            </ul>

            <div class="dropdown hidden-sm-up">
                <a href="" class="tx-gray-800 d-inline-block" data-toggle="dropdown"><i class="icon ion-more"></i></a>
                <div class="dropdown-menu pd-10 wd-200" style="right: 0; left: auto;">
                    <nav class="nav nav-style-2 flex-column">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </nav>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->

        </div><!-- pd-x-20 -->
    @else
        @include('layouts.lpanel') <!-- START: LEFT PANEL -->
        @include('layouts.hpanel') <!-- START: HEAD PANEL -->
        @include('layouts.rpanel') <!-- START: RIGHT PANEL -->
    @endguest

    @yield('content') <!-- START: MAIN PANEL -->

    <!-- required scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--<script src="{{ URL::asset('/lib/jquery/jquery.js'); }}"></script>-->
    <script src="{{ URL::asset('/lib/popper.js/popper.js'); }}"></script>
    <script src="{{ URL::asset('/lib/bootstrap/bootstrap.js'); }}"></script>
    <script src="{{ URL::asset('/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js'); }}"></script>
    <script src="{{ URL::asset('/lib/moment/moment.js'); }}"></script>
    <script src="{{ URL::asset('/lib/jquery-ui/jquery-ui.js'); }}"></script>
    <script src="{{ URL::asset('/lib/jquery-switchbutton/jquery.switchButton.js'); }}"></script>
    <script src="{{ URL::asset('/lib/peity/jquery.peity.js'); }}"></script>
    
    <!-- page script -->
    @stack('scripts')

    <script src="{{ URL::asset('/js/bracket.js'); }}"></script>

    @stack('custom_scripts')
</body>
</html>
