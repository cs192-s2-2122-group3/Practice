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