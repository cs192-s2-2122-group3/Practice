<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Practice - Edit Course</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="../lib/medium-editor/default.css" rel="stylesheet">
    <link href="../lib/summernote/summernote-bs4.css" rel="stylesheet">

    <link href="../lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="../lib/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
    <link href="../lib/spectrum/spectrum.css" rel="stylesheet">
    <link href="../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">

    <style>
        .bootstrap-tagsinput .tag [data-role="remove"]:after {
            content: "";
            padding: 0px 2px;
        }

    </style>
</head>

<body>

    <!-- ========== START: LEFT PANEL =========== -->
    @include('layouts.lpanel')
    <!-- ============ END: LEFT PANEL ============ -->


    <!-- =========== START: HEAD PANEL =========== -->
    @include('layouts.hpanel')
    <!-- ============ END: HEAD PANEL ============ -->


    <!-- ========== START: RIGHT PANEL =========== -->
    @include('layouts.rpanel')
    <!-- =========== END: RIGHT PANEL ============ -->

    <!-- =========== START: MAIN PANEL =========== -->
    <div class="br-mainpanel">
        <!-- LINK TAGS -->
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <span class="breadcrumb-item active">Edit Course</span>
            </nav>
        </div>

        <!-- PAGE BODY -->
        <div class="br-pagebody">
            <!-- CONTENT -->

            <form action="/course" method="post" data-parsley-validate> @csrf

                <div class="br-section-wrapper">
                    <!-- TITLE -->
                    <h5 class="tx-gray-800 mg-b-5">Title </h5>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Enter the test title"
                            value="{{ old('title') }}" required>
                    </div><!-- form-group -->

                    <!-- DESCRIPTION -->
                    <h6 class="tx-gray-800 mg-b-5">Description </h6>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control"
                            placeholder="Enter the test description" value="{{ old('description') }}" required>
                    </div><!-- form-group -->

                    <!-- HANDLERS -->
                    @php $handlers = '' @endphp
                    @foreach((array) session('added_users') as $user)
                        @if($user->role == 'faculty' || $user->role == 'admin')
                            @php $handlers = $user->first_name.' '.$user->last_name.','.$handlers @endphp
                        @endif
                    @endforeach

                    <h6 class="tx-gray-800 mg-b-5">Handlers </h6>
                    <div class="form-group">
                        <input type="text" class="bootstrap-tagsinput" placeholder="Current Handlers"
                            value="{{ $handlers }}" data-role="tagsinput" required>
                    </div><!-- form-group -->

                    <!-- STUDENTS -->
                    @php $students_ = '' @endphp
                    @foreach((array) session('added_users') as $user)
                        @if($user->role == 'student')
                            @php $students_ = $user->first_name.' '.$user->last_name.','.$students_ @endphp
                        @endif
                    @endforeach

                    <h6 class="tx-gray-800 mg-b-5">Students </h6>
                    <div class="form-group">
                        <input type="text" class="bootstrap-tagsinput" placeholder="Students Added"
                            value="{{ $students_ }}" data-role="tagsinput">
                    </div><!-- form-group -->

                    <!-- ERRORS -->
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

                    <!-- VERIFICATION -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-info mg-r-5">Create</button>
                        <a href="/course" class="btn btn-secondary" role="button">Cancel</a>
                    </div><!-- btn-group -->
                </div>

                <!-- SHOW USERS -->
                <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">

                    <!-- START: DISPLAYED FOR MOBILE ONLY -->
                    <div class="dropdown hidden-sm-up">
                        <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i
                                class="icon ion-more"></i></a>
                        <div class="dropdown-menu pd-10">
                            <nav class="nav nav-style-1 flex-column mg-l-10">
                                <a href="#" class="btn btn-info">Add to Course</a>
                            </nav>
                        </div><!-- dropdown-menu -->
                    </div><!-- dropdown -->
                    <!-- END: DISPLAYED FOR MOBILE ONLY -->

                    <!-- TAB BUTTONS -->
                    <div class="btn-group hidden-xs-down">
                        <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
                            <li><a class="btn btn-outline-info {{  $page == 1 ? 'active':'' }}"
                                    href="/course/create?faculty_page=1">Faculty</a></li>
                            <li><a class="btn btn-outline-info {{  $page == 0 ? 'active':'' }}"
                                    href="/course/create?student_page=1">Student</a></li>
                        </ul>
                    </div><!-- btn-group -->
                </div><!-- d-flex -->

                <!-- TABS -->
                <div class="tab-content br-profile-body">
                    <!-- SHOW FACULTY -->
                    <div class="tab-pane fade {{  $page == 1 ? 'active show':'' }}" id="faculties">
                        <div class="br-pagebody pd-x-20 pd-sm-x-30 mg-b-30">
                            <div class="card bd-0 shadow-base">
                                <table class="table mg-b-0 table-contact">

                                    <!-- TABLE HEADER -->
                                    <thead>
                                        <tr>
                                            <th class="wd-5p">
                                                <label class="ckbox mg-b-0">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </th>
                                            <th class="tx-10-force tx-mont tx-medium">Name / Email</th>
                                            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Username</th>
                                            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Type</th>
                                            <th class="wd-5p hidden-xs-down"></th>
                                        </tr>
                                    </thead>

                                    <!-- TABLE BODY -->
                                    <tbody>
                                        <!-- for each loop -->
                                        @foreach($faculties as $user)
                                        <tr>
                                            <td class="valign-middle">
                                                <label class="ckbox mg-b-0">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="http://via.placeholder.com/280x280"
                                                        class="wd-40 rounded-circle" alt="">
                                                    <div class="mg-l-15">
                                                        <div class="tx-inverse">
                                                            {{ $user->first_name.' '.$user->middle_name[0].'. '.$user->last_name }}
                                                        </div>
                                                        <span class="tx-12">{{ $user->email }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="valign-middle hidden-xs-down">{{ $user->user_name }}</td>
                                            <td class="valign-middle hidden-xs-down">{{ $user->role }}</td>
                                            <td class="dropdown hidden-xs-down">
                                                @php $added_users = session()->get('added_users', []) @endphp
                                                @if(!isset($added_users[$user->id]))
                                                    <a href="/course/create/add/{{ $user->id }}" class="btn btn-info btn-icon">
                                                        <div><i class="fa fa-plus"></i></div>
                                                    </a>
                                                @else
                                                    <a href="/course/create/remove/{{ $user->id }}" class="btn btn-danger btn-icon">
                                                        <div><i class="fa fa-minus"></i></div>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{  $faculties->links('layouts.pagination') }}
                            </div>
                        </div>
                    </div>

                    <!-- SHOW STUDENT -->
                    <div class="tab-pane fade {{  $page == 0 ? 'active show':'' }}" id="students">
                        <div class="br-pagebody pd-x-20 pd-sm-x-30 mg-b-30">
                            <div class="card bd-0 shadow-base">
                                <table class="table mg-b-0 table-contact">

                                    <!-- TABLE HEADER -->
                                    <thead>
                                        <tr>
                                            <th class="wd-5p">
                                                <label class="ckbox mg-b-0">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </th>
                                            <th class="tx-10-force tx-mont tx-medium">Name / Email</th>
                                            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Username</th>
                                            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Type</th>
                                            <th class="wd-5p hidden-xs-down"></th>
                                        </tr>
                                    </thead>

                                    <!-- TABLE BODY -->
                                    <tbody>
                                        <!-- for each loop -->
                                        @foreach($students as $user)
                                        <tr>
                                            <td class="valign-middle">
                                                <label class="ckbox mg-b-0">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="http://via.placeholder.com/280x280"
                                                        class="wd-40 rounded-circle" alt="">
                                                    <div class="mg-l-15">
                                                        <div class="tx-inverse">
                                                            {{ $user->first_name.' '.$user->middle_name[0].' '.$user->last_name }}
                                                        </div>
                                                        <span class="tx-12">{{ $user->email }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="valign-middle hidden-xs-down">{{ $user->user_name }}</td>
                                            <td class="valign-middle hidden-xs-down">{{ $user->role }}</td>
                                            <td class="dropdown hidden-xs-down">
                                                @php $added_users = session()->get('added_users', []) @endphp
                                                @if(!isset($added_users[$user->id]))
                                                    <a href="/course/create/add/{{ $user->id }}" class="btn btn-info btn-icon">
                                                        <div><i class="fa fa-plus"></i></div>
                                                    </a>
                                                @else
                                                    <a href="/course/create/remove/{{ $user->id }}" class="btn btn-danger btn-icon">
                                                        <div><i class="fa fa-minus"></i></div>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{  $students->links('layouts.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </form> <!-- form-validation -->
        </div>

        <!-- ============ END: MAIN PANEL ============ -->

        <script src="../lib/jquery/jquery.js"></script>
        <script src="../lib/popper.js/popper.js"></script>
        <script src="../lib/bootstrap/bootstrap.js"></script>
        <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
        <script src="../lib/moment/moment.js"></script>
        <script src="../lib/summernote/summernote-bs4.min.js"></script>
        <script src="../lib/jquery-ui/jquery-ui.js"></script>
        <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
        <script src="../lib/peity/jquery.peity.js"></script>
        <script src="../lib/highlightjs/highlight.pack.js"></script>
        <script src="../lib/medium-editor/medium-editor.js"></script>

        <script src="../lib/jquery-toggles/toggles.min.js"></script>
        <script src="../lib/jt.timepicker/jquery.timepicker.js"></script>
        <script src="../lib/spectrum/spectrum.js"></script>
        <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
        <script src="../lib/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script src="../lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

        <script src="../js/bracket.js"></script>
        <script>
            $(function () {
                'use strict'

                // Inline editor
                var editor = new MediumEditor('.editable');

                // Summernote editor
                $('#summernote').summernote({
                    height: 150,
                    tooltip: false
                })

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
