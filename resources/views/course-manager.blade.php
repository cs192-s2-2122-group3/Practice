@extends('layouts.app')

@push('styles')
    <link href="{{ URL::asset('/lib/highlightjs/github.css'); }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ URL::asset('/lib/highlightjs/highlight.pack.js'); }}"></script>
@endpush

@section('content')
    <div class="br-subleft">
        <div class="pd-10">
            <a href="/course/create" class="btn btn-teal bd-0 btn-compose"><i class="icon ion-ios-compose-outline"></i> New Course</a>
        </div>

        <h6 class="tx-uppercase tx-10 tx-mont tx-spacing-1 mg-t-10 pd-x-10 tx-white-7">Filter Course</h6>

        <div class="mg-t-20 pd-x-10 mg-b-40">
            <div class="form-group">
                <input type="text" class="form-control form-control-inverse tx-13" placeholder="Enter course name">
            </div><!-- form-group -->
            <div class="form-group">
                <input type="text" class="form-control form-control-inverse tx-13" placeholder="Enter course handler">
            </div><!-- form-group -->
            <button class="btn btn-info btn-block tx-uppercase tx-10 tx-mont tx-spacing-2 tx-medium">Filter
                List</button>
        </div>

        <h6 class="tx-uppercase tx-10 mg-t-40 pd-x-10 bd-b pd-b-10 tx-roboto tx-white-7">My Courses</h6>

        <nav class="nav br-nav-mailbox flex-column">
            <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Course A</a>
            <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Course B</a>
            <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Course C</a>
            <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Course D</a>
        </nav>
    </div><!-- br-subleft -->

    <div class="br-contentpanel">
        <div class="br-pageheader pd-y-15 pd-md-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <span class="breadcrumb-item active">Course Manager</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Course Manager</h4>
            <p class="mg-b-0">Manage courses for the Practice app</p>
        </div>

        <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">

            <button id="showSubLeft" class="btn btn-secondary mg-r-10 hidden-lg-up"><i
                    class="fa fa-navicon"></i></button>

            <!-- START: DISPLAYED FOR MOBILE ONLY -->
            <div class="dropdown hidden-sm-up">
                <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="icon ion-more"></i></a>
                <div class="dropdown-menu pd-10">
                    <nav class="nav nav-style-1 flex-column">
                        <a href="" class="nav-link">Add Students</a>
                        <a href="" class="nav-link">Add Handlers</a>
                        <div class="dropdown-divider"></div>
                        <a href="" class="nav-link">Edit</a>
                        <a href="" class="nav-link">Delete</a>
                    </nav>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <!-- END: DISPLAYED FOR MOBILE ONLY -->

            <div class="btn-group hidden-xs-down">
                <a href="" class="btn btn-outline-info">Add students</a>
                <a href="" class="btn btn-outline-info">Add Handlers</a>
            </div><!-- btn-group -->

            <div class="btn-group mg-l-auto hidden-sm-down">
                <!-- 
                <a href="#" class="btn btn-outline-info active">All</a>
                <a href="#" class="btn btn-outline-info">ID</a>
                <a href="#" class="btn btn-outline-info">Date</a>
                <a href="#" class="btn btn-outline-info">Students</a>
                -->
                <a href="/course/create" class="btn btn-outline-info">Create</a>
                <a href="#" class="btn btn-outline-info">Delete</a>
            </div><!-- btn-group -->

            <!-- START: DISPLAYED FOR MOBILE ONLY -->
            <div class="dropdown mg-l-auto hidden-md-up">
                <!--
                <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown">All <i
                        class="fa fa-angle-down mg-l-5"></i></a>
                <div class="dropdown-menu dropdown-menu-right pd-10">

                    <nav class="nav nav-style-1 flex-column">
                    <a href="#" class="nav-link">All</a>
                    <a href="#" class="nav-link">ID</a>
                    <a href="#" class="nav-link">Date</a>
                    <a href="#" class="nav-link">Students</a>
                    </nav>
                </div>
                -->
            </div><!-- dropdown -->
            <!-- END: DISPLAYED FOR MOBILE ONLY -->

        </div><!-- d-flex -->

        <div class="br-pagebody pd-x-20 pd-sm-x-30">
            <div class="card bd-0 shadow-base" id="courses_container">
                @include('course-table', ['courses'=>$courses])
            </div>
        </div><!-- br-pagebody -->
        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Filter Info:</div>
                <div>name, handler</div>
            </div>
        </footer>
    </div><!-- br-contentpanel -->
@endsection

@push('custom_scripts')
    <script>
        $(function () {
            'use strict';

            // add classes to body
            $('body').addClass('collapsed-menu with-subleft');

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

            $(document).ready(function() {
                $(document).on('click', '.page-link', function(event) {
                    event.preventDefault();
                    var page = $(this).attr('href').split('page=')[1];
                    $.ajax({
                        url:"/course/fetch?page="+page,
                        success:function(data) {
                            $('#courses_container').html(data);
                        }
                    });
                });
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
