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