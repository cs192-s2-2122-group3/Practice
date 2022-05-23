<!-- USERS LIST -->
<div class="br-pagebody pd-x-20 pd-sm-x-30 mg-b-30" id="user_list">
    @include('course-edit-table-list',['course'=>$course])
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
            <li><a class="btn btn-outline-info {{  $page == 1 ? 'active':'' }} btn-tab"
                    href="/course/{{ $course->id }}/edit?faculty_page=1">Faculty</a></li>
            <li><a class="btn btn-outline-info {{  $page == 0 ? 'active':'' }} btn-tab"
                    href="/course/{{ $course->id }}/edit?student_page=1">Student</a></li>
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

                                <a href="/course/{{ $course->id }}/edit/remove/{{ $user->id }}" id="sub{{ $user->id }}" class="btn btn-danger btn-icon btn-sub" {{ $course->users->contains($user->id) ? "":"hidden" }}>
                                    <div><i class="fa fa-minus"></i></div>
                                </a>

                                <a href="/course/{{ $course->id }}/edit/add/{{ $user->id }}" id="add{{ $user->id }}" class="btn btn-info btn-icon btn-add" {{ $course->users->contains($user->id) ? "hidden":"" }}>
                                    <div><i class="fa fa-plus"></i></div>
                                </a>

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
                                
                                <a href="/course/{{ $course->id }}/edit/remove/{{ $user->id }}" id="sub{{ $user->id }}" class="btn btn-danger btn-icon btn-sub" {{ $course->users->contains($user->id) ? "":"hidden" }}>
                                    <div><i class="fa fa-minus"></i></div>
                                </a>

                                <a href="/course/{{ $course->id }}/edit/add/{{ $user->id }}" id="add{{ $user->id }}" class="btn btn-info btn-icon btn-add" {{ $course->users->contains($user->id) ? "hidden":"" }}>
                                    <div><i class="fa fa-plus"></i></div>
                                </a>
                                
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