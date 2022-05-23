@php $handlers = '' @endphp
@php $students_ = '' @endphp
@foreach($course->users as $user)
    @if($user->role == 'faculty' || $user->role == 'admin')
        @php $handlers = $user->first_name.' '.$user->last_name.','.$handlers @endphp
    @else
        @php $students_ = $user->first_name.' '.$user->last_name.','.$students_ @endphp
    @endif
@endforeach

<!-- HANDLERS -->
<h6 class="tx-gray-800 mg-b-5">Handlers </h6>
<div class="form-group">
    <input type="text" class="bootstrap-tagsinput" placeholder="Current Handlers"
        value="{{ $handlers }}" data-role="tagsinput" required>
</div><!-- form-group -->

<!-- STUDENTS -->
<h6 class="tx-gray-800 mg-b-5">Students </h6>
<div class="form-group">
    <input type="text" class="bootstrap-tagsinput" placeholder="Students Added"
        value="{{ $students_ }}" data-role="tagsinput">
</div><!-- form-group -->