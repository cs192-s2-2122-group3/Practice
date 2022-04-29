@foreach($answers as $answer)
    <div class="col-lg-12 mg-t-20 mg-lg-t-0 mg-b-15">
        <div class="input-group">
            <span class="input-group-addon bg-transparent">
                <label class="ckbox wd-16">
                    <input name="checkbox" type="checkbox"><span></span>
                </label>
                <label class="rdiobox wd-16">
                    <input name="radio" type="radio"><span></span>
                </label>
            </span>
            <input type="text" class="form-control" value="{{ $answer->description }}" placeholder="answer">
        </div>
    </div>

    <div class="col-lg-12 mg-t-20 mg-lg-t-0 mg-b-15">
        <textarea type="text" rows="5" class="form-control" placeholder="answer"></textarea>
    </div>
@endforeach