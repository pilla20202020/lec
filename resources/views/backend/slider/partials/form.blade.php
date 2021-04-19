<div class="row">
    <div class="col-md-12">
        @include('partials.errors')
    </div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-head">
                <header>{!! $header !!}</header>
                <div class="tools visible-xs">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::text('title',old('title'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('title','Title*') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::text('caption',old('caption'),['class'=>'form-control']) }}
                            {{ Form::label('caption','Caption*') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group">
                            {{ Form::text('link_url', old('link_url'), ['class'=>'form-control']) }}
                            {{ Form::label('link_url','Link URL') }}
                        </div>

                </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            {{ Form::number('order', old('order'), ['class'=>'form-control']) }}
                            {{ Form::label('order','Order') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::text('link_caption', old('link_caption'), ['class'=>'form-control']) }}
                            {{ Form::label('link_caption','Link Caption') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Featured Image</label>
                        @if(isset($slider) && $slider->image)
                            <input type="file" name="image" class="dropify" data-default-file="{{ asset($slider->thumbnail_path) }}"/>
                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                    </div>
                </div>
            </div>
            {{--<div class="card-actionbar">--}}
            {{--<div class="card-actionbar-row">--}}
            {{--<button type="reset" class="btn btn-default ink-reaction">Reset</button>--}}
            {{--                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">--}}
            {{--<input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($photo) && $photo->is_published ? 'Save' : 'Publish' }}">--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-affix affix-4">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('slider.index') }}">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                    {{--<input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">--}}
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($photo) && $photo->is_published ? 'Save' : 'Publish' }}">
                </div>
            </div>
        </div>
    </div>
</div>
