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
            <div class="br-section-wrapper">

                <div class="card bd-0 bd-b-10">
                    <!-- TITLE -->
                    <div class="card-header tx-medium bd-0 tx-white bg-dark">
                        {{ $test->title }}
                    </div><!-- card-header -->

                    <!-- DESCRIPTION -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <p class="mg-b-0">{{ $test->description }}</p>
                    </div><!-- card-body -->
                </div><!-- card -->

                <!-- QUESTIONS -->
                <div class="mg-b-5 mg-t-10" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary" id="remove_item"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-secondary active" id="add_item"><i class="fa fa-plus"></i></button>
                </div>

                <!-- ACTUAL QUESTIONS -->
                <div class="br-section-wrapper mg-b-10 bg-gray-700" id="question_container">
                    @include('test-items-table', ['test' => $test])
                </div><!-- br-section-wrapper -->
            </div>
        </div>
    </div>
@endsection

@push('custom_scripts')
    <script>

        function item_type(id) {
            val =  document.getElementById("select"+id).value;

            if (val == 0) {
                $(".radio"+id).prop("required", true);
                $(".radio"+id).prop("hidden", false);
                $(".radio"+id).show();

                $(".ckbox"+id).prop("hidden", true);
                $(".ckbox"+id).hide();
            }

            else if (val == 1) {
                $(".radio"+id).prop("required", false);
                $(".radio"+id).prop("hidden", true);
                $(".radio"+id).hide();

                $(".ckbox"+id).prop("hidden", false);
                $(".ckbox"+id).show();
            }

            else {
                $(".radio"+id).prop("required", false);
                $(".radio"+id).prop("hidden", false);
                $(".radio"+id).hide();

                $(".ckbox"+id).prop("hidden", false);
                $(".ckbox"+id).hide();
            }
        }

        $(function () {
            'use strict'
            
            function fetch_items() {
                var $request = $.get('/test/{{ $test->id }}/items/fetch'); // make request
                var $container = $('#question_container');

                $container.addClass('loading'); // add loading class (optional)

                $request.done(function(data) { // success
                    $container.html(data.html);
                });
                $request.always(function() {
                    $container.removeClass('loading');
                });
            }

            function fetch_answers(id) {
                var $request = $.get('/test/{{ $test->id }}/items/'+id+'/answer/fetch'); // make request
                var $container = $('#answer_container'+id);

                $container.addClass('loading'); // add loading class (optional)

                $request.done(function(data) { // success
                    $container.html(data.html);
                });
                $request.always(function() {
                    $container.removeClass('loading');
                });
            }

            $(document).ready(function() {
                $(document).on('click', '#add_item', function(event) {
                    event.preventDefault();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "/test/{{ $test->id }}/items",
                        data: null,
                        dataType: "json",
                        success: function () {
                            fetch_items();
                        }
                    });
                });

                $(document).on('click', '#remove_item', function(event) {
                    event.preventDefault();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "DELETE",
                        url: "/test/{{ $test->id }}/items",
                        data: null,
                        dataType: "json",
                        success: function () {
                            fetch_items();
                        }
                    });
                });

                $(document).on('click', '#add_answer', function(event) {
                    event.preventDefault();

                    var val = $(this).attr('value');

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "/test/{{ $test->id }}/items/"+val+"/answer",
                        data: null,
                        dataType: "json",
                        success: function () {
                            fetch_answers(val);
                        }
                    });
                });

                $(document).on('click', '#remove_answer', function(event) {
                    event.preventDefault();

                    var val = $(this).attr('value');

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "DELETE",
                        url: "/test/{{ $test->id }}/items/"+val+"/answer",
                        data: null,
                        dataType: "json",
                        success: function () {
                            fetch_answers(val);
                        }
                    });
                });

                

                /*
                $(document).on('click', 'form', function(event) {

                    var data = $(this).serializeArray();

                    console.log(data);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "PUT",
                        url: "/test/{test_id}/items/"+$(this).attr('value')+"/save",
                        data: $("form").serialize(),
                        dataType: "json",
                        success: function () {
                            fetch_items();
                        }
                    });
                });
                */
            });

            // Summernote editor
            $('#summernote').summernote({
                height: 150,
                tooltip: true
            })
        });
    </script>
@endpush