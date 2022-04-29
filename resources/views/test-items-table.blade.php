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
                
                @foreach($item->answers()->orderBy('id','ASC')->get() as $answer)
                    <div class="col-lg-12 mg-t-20 mg-lg-t-0 mg-b-15">
                        <div class="input-group">
                            <span class="input-group-addon bg-transparent">

                                <label class="rdiobox wd-16 {{ 'radio'.$item->id }}" {{ $item->type == 0 ? "":"hidden" }}>
                                    <input name="radio" class="{{ 'radio'.$item->id }}" type="radio" value="{{ $answer->id }}" {{ $item->type == 0 ? "":"hidden" }} {{ $item->type == 0 ? "required":"" }} {{ ($answer->type == 1) ? 'checked' : '' }}><span></span>
                                </label>

                                <label class="ckbox wd-16 {{ 'ckbox'.$item->id }}" {{ $item->type == 1 ? "":"hidden" }}>
                                    <input name="checkbox[]" class="{{ 'ckbox'.$item->id }}" type="checkbox" value="{{ $answer->id }}" {{ $item->type == 1 ? "":"hidden" }} {{ ($answer->type == 1) ? 'checked' : '' }}><span></span>
                                </label>

                            </span>
                            
                            <input name="description[]" type="text" class="form-control" value="{{ $answer->description }}" placeholder="answer" required>
                        </div>
                    </div>
                @endforeach

                

                <div class="mg-b-5 float-right" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary" id="remove_answer" value="{{ $item->id }}"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-secondary active" id="add_answer" value="{{ $item->id }}"><i class="fa fa-plus"></i></button>
                </div>
            </div><!-- row -->
        </div><!-- form-layout -->
    </form>
@endforeach