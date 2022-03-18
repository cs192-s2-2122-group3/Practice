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
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

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
    @guest 
        <div class="ht-65 bd bg-gray-100 pd-x-20 d-flex align-items-center justify-content-end">
            <h4 class="mg-b-0 tx-uppercase tx-bold tx-spacing--2 tx-inverse tx-poppins mg-r-auto">Practice</h4>

            <ul class="nav nav-pills flex-column flex-md-row justify-content-end" role="tablist">
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            </ul>
        </div><!-- pd-10 -->

    @else
        <!-- ========== START: LEFT PANEL =========== -->
        @include('layouts.lpanel')
        <!-- ============ END: LEFT PANEL ============ -->

        <!-- =========== START: HEAD PANEL =========== -->
        @include('layouts.hpanel')
        <!-- ============ END: HEAD PANEL ============ -->

        <!-- ========== START: RIGHT PANEL =========== -->
        @include('layouts.rpanel')
        <!-- =========== END: RIGHT PANEL ============ -->
    @endguest

    <!-- =========== START: MAIN PANEL =========== -->
    @yield('content')
    <!-- ============ END: MAIN PANEL ============ -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="../lib/d3/d3.js"></script>
    <script src="../lib/rickshaw/rickshaw.min.js"></script>

    <script src="../lib/highlightjs/highlight.pack.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>

    <script src="../js/bracket.js"></script>
    <script src="../js/ResizeSensor.js"></script>
    <script src="../js/widgets.js"></script>

    <script src="../lib/jquery-toggles/toggles.min.js"></script>
    <script src="../lib/jt.timepicker/jquery.timepicker.js"></script>
    <script src="../lib/spectrum/spectrum.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../lib/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="../lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

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

        });

    </script>

    <script>
        $(function () {
            'use strict'

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
            $('#tp2').timepicker({
                'scrollDefault': 'now'
            });
            $('#tp3').timepicker();

            $('#setTimeButton').on('click', function () {
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
                showPalette: true,
                color: '#DC3545',
                palette: [
                    ['#1D2939', '#fff', '#0866C6', '#23BF08', '#F49917'],
                    ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
                ]
            });


            // Rangeslider
            if ($().ionRangeSlider) {
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
