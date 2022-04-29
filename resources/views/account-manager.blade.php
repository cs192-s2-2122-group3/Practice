@extends('layouts.app')

@push('styles')
    <link href="{{ URL::asset('/lib/highlightjs/github.css'); }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ URL::asset('/lib/highlightjs/highlight.pack.js'); }}"></script>
@endpush

@section('content')
<body class="collapsed-menu with-subleft">
    <div class="br-subleft">
        <h6 class="tx-uppercase tx-10 tx-mont tx-spacing-1 mg-t-10 pd-x-10 tx-white-7">Filter Users</h6>

        <div class="mg-t-20 pd-x-10 mg-b-40">
            <div class="form-group">
                <input type="text" class="form-control form-control-inverse tx-13" placeholder="Enter name of user">
            </div><!-- form-group -->
            <div class="form-group">
                <input type="text" class="form-control form-control-inverse tx-13" placeholder="Enter email of user">
            </div><!-- form-group -->
            <button class="btn btn-info btn-block tx-uppercase tx-10 tx-mont tx-spacing-2 tx-medium">Filter
                List</button>
        </div>

        <h6 class="tx-uppercase tx-10 tx-mont tx-spacing-1 mg-t-10 pd-x-10 tx-white-7">User Groups</h6>

        <nav class="nav br-nav-mailbox flex-column">
            <a href="" class="nav-link"><i class="icon ion-person-stalker tx-16-force"></i> Admin</a>
            <a href="" class="nav-link"><i class="icon ion-person-stalker tx-16-force"></i> Faculty</a>
            <a href="" class="nav-link"><i class="icon ion-person-stalker tx-16-force"></i> Students</a>
        </nav>
    </div><!-- br-subleft -->

    <div class="br-contentpanel">
        <div class="br-pageheader pd-y-15 pd-md-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <span class="breadcrumb-item active">Account Manager</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Account Manager</h4>
            <p class="mg-b-0">Manage user accounts of Practice</p>
        </div>

        <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">

            <button id="showSubLeft" class="btn btn-secondary mg-r-10 hidden-lg-up"><i
                    class="fa fa-navicon"></i></button>

            <!-- START: DISPLAYED FOR MOBILE ONLY -->
            <div class="dropdown hidden-sm-up">
                <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="icon ion-more"></i></a>
                <div class="dropdown-menu pd-10">
                    <nav class="nav nav-style-1 flex-column">
                        <a href="/" class="nav-link">New Account</a>
                        <a href="" class="nav-link">Delete</a>
                    </nav>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <!-- END: DISPLAYED FOR MOBILE ONLY -->

            <div class="btn-group hidden-xs-down">
                <a href="#" class="btn btn-outline-info"><i class="fa fa-th"></i></a>
                <a href="#" class="btn btn-outline-info active"><i class="fa fa-th-list"></i></a>
            </div><!-- btn-group -->

            <div class="mg-l-auto hidden-xs-down">
                <a href="/user/create" class="btn btn-info">New Account</a>
                <a href="#" class="btn btn-outline-info mg-l-5">Delete</a>
            </div>

        </div><!-- d-flex -->

        <div class="br-pagebody pd-x-20 pd-sm-x-30">
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
                        <!-- for loop -->
                        @foreach ($users as $user)
                            <td class="valign-middle">
                                <label class="ckbox mg-b-0">
                                    <input type="checkbox" name="bodychk"><span></span>
                                </label>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="mg-l-15">
                                        <div class="tx-inverse">{{ $user->first_name }} {{ $user->middle_name[0] }}. {{ $user->last_name }}</div>
                                        <span class="tx-12">{{ $user->email }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="valign-middle hidden-xs-down">{{ $user->user_name }}</td>
                            <td class="valign-middle hidden-xs-down">{{ $user->role }}</td>
                            <td class="dropdown hidden-xs-down">
                                <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i
                                        class="icon ion-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right pd-10">
                                    <nav class="nav nav-style-1 flex-column">
                                        <!-- INFO -->
                                        <a href="" class="nav-link">Info</a>
                                        <!-- EMAIL -->
                                        <a href="" class="nav-link">Email</a>
                                        <!-- EDIT -->
                                        <a href="/user/{{ $user->id }}/edit" class="nav-link">Edit</a>
                                        <!-- DELETE -->
                                        <form action="user/{{ $user->id }}" method='POST'> @csrf @method('delete')
                                            <button type="submit" class="nav-link btn-link btn-block text-left">Delete</button>
                                        </form>
                                    </nav>
                                </div><!-- dropdown-menu -->
                            </td>
                            </tr>

                            @endforeach

                    </tbody>
                </table>
                {{ $users->links('layouts.pagination') }}
            </div>
        </div><!-- br-pagebody -->
        
        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Filter Info:</div>
                <div>name, email</div>
            </div>
        </footer>
    </div><!-- br-contentpanel -->
@endsection

@push('custom_scripts')
    <script>
        $(function () {
            'use strict';

            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');

            $(document).on('mouseover', function (e) {
                e.stopPropagation();
                if ($('body').hasClass('collapsed-menu')) {
                    var targ = $(e.target).closest('.br-sideleft').length;
                    if (targ) {
                        $('body').addClass('expand-menu');

                        // show current shown sub menu that was hidden from collapsed
                        $('.show-sub + .br-menu-sub').slideDown();

                        var menuText = $('.menu-item-label,.menu-item-arrow');
                        menuText.removeClass('d-lg-none');
                        menuText.removeClass('op-lg-0-force');

                    } else {
                        $('body').removeClass('expand-menu');

                        // hide current shown menu
                        $('.show-sub + .br-menu-sub').slideUp();

                        var menuText = $('.menu-item-label,.menu-item-arrow');
                        menuText.addClass('op-lg-0-force');
                        menuText.addClass('d-lg-none');
                    }
                }
            });

            // Showing sub left menu
            $('#showSubLeft').on('click', function () {
                if ($('body').hasClass('show-subleft')) {
                    $('body').removeClass('show-subleft');
                } else {
                    $('body').addClass('show-subleft');
                }
            });

        });
    </script>
@endpush
