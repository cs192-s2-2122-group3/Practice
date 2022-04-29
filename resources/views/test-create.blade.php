@extends('layouts.app')

@push('styles')
    <link href="{{ URL::asset('/lib/highlightjs/github.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/medium-editor/medium-editor.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/medium-editor/default.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/summernote/summernote-bs4.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/jquery-toggles/toggles-full.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/jt.timepicker/jquery.timepicker.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/spectrum/spectrum.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/bootstrap-tagsinput/bootstrap-tagsinput.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/ion.rangeSlider/css/ion.rangeSlider.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('/lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css'); }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ URL::asset('/lib/summernote/summernote-bs4.min.js'); }}"></script>
    <script src="{{ URL::asset('/lib/highlightjs/highlight.pack.js'); }}"></script>
    <script src="{{ URL::asset('/lib/medium-editor/medium-editor.js'); }}"></script>
    <script src="{{ URL::asset('/lib/jquery-toggles/toggles.min.js'); }}"></script>
    <script src="{{ URL::asset('/lib/jt.timepicker/jquery.timepicker.js'); }}"></script>
    <script src="{{ URL::asset('/lib/spectrum/spectrum.js'); }}"></script>
    <script src="{{ URL::asset('/lib/jquery.maskedinput/jquery.maskedinput.js'); }}"></script>
    <script src="{{ URL::asset('/lib/bootstrap-tagsinput/bootstrap-tagsinput.js'); }}"></script>
    <script src="{{ URL::asset('/lib/ion.rangeSlider/js/ion.rangeSlider.min.js'); }}"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
@endpush

@section('content')
    
    <div class="br-mainpanel">
        <!-- LINK TAGS -->
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="\">Home</a>
                <a class="breadcrumb-item" href="\">Pages</a>
                <span class="breadcrumb-item active">Edit Test</span>
            </nav>
        </div>

        <!-- PAGE BODY -->
        <div class="br-pagebody">
            <!-- CONTENT -->
                <form action="/test" method="post" data-parsley-validated> @csrf

                    <div class="br-section-wrapper">
                        <!-- TITLE -->
                        <h5 class="tx-gray-800 mg-b-5">Title </h5>
                        <div class="form-group">
                            <input id="title" name="title" type="text" class="form-control" placeholder="Enter the test title" required>
                        </div><!-- form-group -->

                        <!-- DESCRIPTION -->
                        <h6 class="tx-gray-800 mg-b-5">Description </h6>
                        <div class="form-group">
                            <input id="description" name="description" type="text" class="form-control" placeholder="Enter the test description">
                        </div><!-- form-group -->

                        <div class="d-flex">
                            <button name="draft" id="draft" type="submit" class="btn btn-dark mr-auto" value="draft">Draft</button>
                            <button name="publish" id="publish" type="submit" class="btn btn-info mg-r-3" value="publish">Publish</button>
                            <a href="/test" class="btn btn-secondary">Return</a>
                        </div><!-- btn-group -->
                    </div>

                    <div class="card bd-0 shadow-base mg-t-20" id="pagination_data">
                        <table class="table mg-b-0">
        
                            <thead>
                                <tr>
                                    <th class="wd-5p">
                                        <label class="ckbox mg-b-0"></label>
                                    </th>
                                    <th class="wd-5p hidden-xs-down">ID</th>
                                    <th class="tx-10-force tx-mont tx-medium">Course Name</th>
                                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Date Created</th>
                                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Handler</th>
                                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Students</th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @foreach ($courses as $course)
                                <tr>
                                    <!-- CHECK BOX -->
                                    <td class="valign-middle">
                                        <label class="rdiobox mg-b-0">
                                            <input type="radio" name="course" id="course" value="{{ $course->id }}" required><span></span>
                                        </label>
                                    </td>
        
                                    <!-- COURSE ID -->
                                    <td class="hidden-xs-down">{{ $course->id }}</td>
        
                                    <!-- COURSE TITLE -->
                                    <td>
                                        <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                                        <!--<i class="fa fa-book tx-22 tx-danger lh-0 valign-middle"></i>-->
                                        <span class="pd-l-5">{{ $course->title }}</span>
                                    </td>
        
                                    <!-- COURSE - CREATED AT -->
                                    <td class="hidden-xs-down">{{ $course->created_at->format('d/m/Y - h:m') }}</td>
        
                                    <!-- COURSE HANDLER -->
                                    <td class="hidden-xs-down">
                                        @if($course->handlers->first())
                                            {{ $course->handlers->first()->first_name.' '.$course->handlers->first()->last_name }}
                                        @endif
                                    </td>
        
                                    <!-- COURSE STUDENT COUNT -->
                                    <td class="hidden-xs-down">
                                    {{ $course->students->count() }}
                                    </td>
                                </tr>
                                @endforeach
        
                            </tbody>
                        </table>
                        {{ $courses->links('layouts.pagination') }}
                    </div>
                </form> <!-- form-validation -->
        </div>

        <!-- SMALL MODAL - PUBLISH -->
        <div id="verify-publish" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Publish?</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pd-20">
                        <p class="mg-b-5">Are you sure? Publishing this test will make it available to the students under
                            this course.
                            You may opt to save it in your drafts to continue editing later.
                        </p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <a href="\test-manager" class="btn btn-info">Publish</a>
                        <a href="\test-manager" class="btn btn-secondary">Save as Draft</a>
                    </div>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div>
@endsection

@push('custom_scripts')
    <script>
        $(function () {
            'use strict'
            /*
            $(document).on("click",".page-link",function(){

                //get url and make final url for ajax 
                var url=$(this).attr("href");
                var append=url.indexOf("?")==-1?"?":"&";
                var finalURL=url+append;

                //set to current url
                window.history.pushState({},null, finalURL);

                $.get(finalURL,function(data){
                    $("#pagination_data").html(data);
                });
                return false;
            })
            */

            // Summernote editor
            $('#summernote').summernote({
                height: 150,
                tooltip: true
            })
        });
    </script>
@endpush