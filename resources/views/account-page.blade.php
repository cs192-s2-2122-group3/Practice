@extends('layouts.app')
@section('content')
    <div class="br-mainpanel br-profile-page">

        <div class="card shadow-base bd-0 rounded-0 widget-4">
            <div class="card-header ht-75">

                <div class="hidden-xs-down"> </div>
                <div class="tx-24 hidden-xs-down">
                    <a href="" class="mg-r-10"><i class="icon ion-ios-email-outline"></i></a>
                    <a href=""><i class="icon ion-more"></i></a>
                </div>

            </div><!-- card-header -->

            <div class="card-body">
                <div class="card-profile-img">
                    <img src="http://via.placeholder.com/280x280" alt="">
                </div><!-- card-profile-img -->
                <h4 class="tx-normal tx-roboto tx-white">Rey Christian E. Delos Reyes</h4>
                <p class="mg-b-25">Student</p>

                <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">Some self description of the user</p>
            </div><!-- card-body -->
        </div><!-- card -->

        <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
            <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#recent" role="tab">Tests</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scores" role="tab">More info</a></li>
            </ul>
        </div>

        <div class="tab-content br-profile-body">
            <div class="tab-pane fade active show" id="recent">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="media-list bg-white rounded shadow-base">
                            @for($i = 0; $i < 7; $i++) <div class="media pd-20 pd-xs-30">
                                    <img src="http://via.placeholder.com/280x280" alt="" class="wd-40 rounded-circle">
                                    <div class="media-body mg-l-20">
                                        <div class="d-flex justify-content-between mg-b-10">
                                            <div>
                                                <h6 class="mg-b-2 tx-inverse tx-14">Test Title</h6>
                                                <span class="tx-12 tx-gray-500">Test Description</span>
                                            </div>
                                            <span class="tx-12">2 minutes ago</span>
                                        </div><!-- d-flex -->
                                        <p class="mg-b-20">I got a 1/20 in the CS 145 exam! Cheers!</p>
                                        <div class="media-footer">
                                        </div><!-- d-flex -->
                                    </div><!-- media-body -->
                            </div><!-- media -->
                            @endfor
                        </div><!-- card -->

                        <div class="bg-white pd-y-12 tx-center mg-t-15 mg-xs-t-30 shadow-base rounded">
                            <a href="" class="tx-gray-600 hover-info">Load more</a>
                        </div>
                    </div><!-- col-lg-8 -->
                    <div class="col-lg-4 mg-t-30 mg-lg-t-0">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                            <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Contact Information</h6>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Phone Number</label>
                            <p class="tx-info mg-b-25">+63 1234 567 8910</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Email Address</label>
                            <p class="tx-inverse mg-b-25">hellotheremyoldfriend@up.edu.ph</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Home Address</label>
                            <p class="tx-inverse mg-b-25">Sa puso mo </p>

                            <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Other Information</h6>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Degree</label>
                            <p class="tx-inverse mg-b-25">Bachelor of Science in Computer Science</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-5">Tests Passed</label>
                            <ul class="list-unstyled profile-skills">
                                <li><span>test 1</span></li>
                                <li><span>test 2</span></li>
                                <li><span>test 3</span></li>
                                <li><span>vrtt</span></li>
                                <li><span>test 5</span></li>
                                <li><span>test 6</span></li>
                                <li><span>test 7</span></li>
                                <li><span>CS 145 test uwu</span></li>
                            </ul>
                        </div><!-- card -->

                        <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">
                            <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-30">Test you can try out</h6>

                            <div class="media-list">
                                @for($i = 0; $i < 5; $i++) <div class="media align-items-center pd-y-10">
                                        <div class="media-body mg-x-15 mg-xs-x-20">
                                            <h6 class="mg-b-2 tx-inverse tx-14">Test Title</h6>
                                            <p class="mg-b-0 tx-12">Test Description</p>
                                        </div><!-- media-body -->
                                        <a href="#" class="btn btn-outline-secondary btn-icon rounded-circle mg-r-5">
                                            <div><i class="icon ion-ionic tx-16"></i></div>
                                        </a>
                                </div><!-- media -->
                                @endfor

                            </div><!-- media-list -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 -->
                </div><!-- row -->
            </div><!-- tab-pane -->
            
            <div class="tab-pane fade" id="scores">
                <div class="br-pagebody pd-x-20 pd-sm-x-30">
                    <div class="card bd-0 shadow-base">
                        <table class="table mg-b-0">

                            <thead>
                                <tr>
                                    <th class="tx-10-force wd-5p hidden-xs-down">ID</th>
                                    <th class="tx-10-force tx-mont tx-medium">Test Name</th>
                                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Date Attempted</th>
                                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Author</th>
                                    <th class="tx-10-force wd-5p hidden-xs-down">Score</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td class="hidden-xs-down">1</td>
                                    <td>
                                        <span class="pd-l-5">CS 145 - Radio Gaga</span>
                                    </td>
                                    <td class="hidden-xs-down">11/24/2022 6:00am</td>
                                    <td class="hidden-xs-down">Rey Christian Delos Reyes</td>
                                    <td class="hidden-xs-down text-right">10/10</td>
                                </tr>

                                @for ($i = 0; $i < 5; $i++) <tr>
                                    <td class="hidden-xs-down">{{ $i+2 }}</td>
                                    <td>
                                        <span class="pd-l-5">CS 180 - WoW</span>
                                    </td>
                                    <td class="hidden-xs-down">10/11/2022 7:22am</td>
                                    <td class="hidden-xs-down">woof woof</td>
                                    <td class="hidden-xs-down text-right">9/10</td>
                                    </tr>
                                    @endfor

                            </tbody>
                        </table>
                    </div>
                </div><!-- br-pagebody -->
            </div><!-- tab-pane -->
        </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->

@endsection
