<table class="table mg-b-0">

    <thead>
        <tr>
            <th class="wd-5p">
                <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                </label>
            </th>
            <th class="wd-5p hidden-xs-down">ID</th>
            <th class="tx-10-force tx-mont tx-medium">Course Name</th>
            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Date Created</th>
            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Handler</th>
            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Students</th>
            <th class="wd-5p"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($courses as $course)
        <tr>
            <!-- CHECK BOX -->
            <td class="valign-middle">
                <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
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

            <!-- DROPDOWN MENU OPTIONS -->
            <td class="dropdown">
                <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i
                        class="icon ion-more"></i></a>
                <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                        <a href="" class="nav-link">Info</a>
                        <a href="" class="nav-link">Rename</a>
                        <a href="/course/{{ $course->id }}/edit" class="nav-link">Edit</a>
                        <form action="/course/{{ $course->id }}" method='POST'> @csrf @method('delete')
                            <button type="submit" class="nav-link btn-link btn-block text-left">
                                Delete
                            </button>
                        </form>
                    </nav>
                </div><!-- dropdown-menu -->
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{{ $courses->links('layouts.pagination') }}