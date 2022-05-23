@php $count = 0 @endphp
@foreach($items as $item)
    <form action="/test/{{ $test->id }}/items/{{ $item->id }}/save" method="post" data-parsley-validate>
        @csrf
        @method('put')
        
        <!-- DEFAULT -->
        <div class="form-layout form-layout-4 mg-b-20 bg-white">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Question {{ ++$count }}</h6>
            <div class="row row-xs">

                <div class="col-sm-3">
                    <div class="form-group">
                        <input name="item_title" id="{{ 'title'.$item->id }}" type="text" class="form-control" placeholder="title" value="{{ $item->title }}" required>
                    </div><!-- form-group -->
                </div><!-- col-3 -->

                <div class="col-sm-6">
                    <div class="form-group">
                        <input name="item_description" id="{{ 'description'.$item->id }}" type="text" class="form-control" placeholder="description" value="{{ $item->description }}" required>
                    </div><!-- form-group -->
                </div><!-- col-6 -->

                <div class="col-sm-2">
                    <div class="form-group">
                        <select name="select" id="{{ 'select'.$item->id }}" class="form-control select2" data-placeholder="Question Type" value="{{ $item->type }}" onload="item_type({{ $item->id }})" onchange="item_type({{ $item->id }})" required>
                            <option label="Question Type"></option>
                            <option value=0 {{ ($item->type == 0) ? 'selected' : '' }}> Multiple Choice </option>
                            <option value=1 {{ ($item->type == 1) ? 'selected' : '' }}> Multiple Answers </option>
                            <option value=2 {{ ($item->type == 2) ? 'selected' : '' }}> Identification </option>
                        </select>
                    </div><!-- form-group -->
                </div><!-- col-2 -->

                <div class="col-sm-1">
                    <div class="form-group">
                        <button type="submit" id="save" class="btn btn-success active btn-block mg-b-10" value="{{ $item->id }}">Save</button>
                    </div><!-- form-group -->
                </div><!-- col-1 -->
                
                <div class="w-100" id="answer_container{{ $item->id }}">
                    @include('test-items-answers', ['items'=>$items])
                </div>
            </div><!-- row -->
        </div><!-- form-layout -->
    </form>
@endforeach