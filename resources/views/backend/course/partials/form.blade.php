<div class="row">
    <div class="col-md-9">
        @include('partials.errors')
    </div>
    <div class="col-sm-9">
        <div class="card">
            <div class="card-underline">
                <div class="card-head">
                    <header>{!! $header !!}</header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" required
                                       value="{{ old('title', isset($course->title) ? $course->title : '') }}"/>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('title') }}</span>
                                <label for="Name">Title</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea type="text" name="meta_description" class="form-control">{{old('meta_description',isset($course->meta_description)?$course->meta_description : '')}}</textarea>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('meta_description') }}</span>
                                <label for="specialization">Short Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea name="description" id=""
                                          class="ckeditor">{{old('description',isset($course->description)?$course->description : '')}}</textarea>
                                <span id="textarea1-error"
                                      class="text-danger">{{ $errors->first('description') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Curriculum</strong>
                                <textarea name="curriculum" id=""
                                          class="ckeditor">{{old('curriculum',isset($course->curriculum)?$course->curriculum : '')}}</textarea>
                                <span id="textarea1-error"
                                      class="text-danger">{{ $errors->first('curriculum') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Notes/Message/Review</strong>
                                <textarea name="notes" id=""
                                          class="ckeditor">{{old('notes',isset($course->notes)?$course->notes : '')}}</textarea>
                                <span id="textarea1-error"
                                      class="text-danger">{{ $errors->first('notes') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" data-spy="affix" data-offset-top="50">
            <div class="panel-group" id="accordion1">
                <div class="card panel expanded">
                    <div class="card-head" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                        <header>Publish</header>
                        <div class="tools">
                            <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div id="accordion1-1" class="collapse in">
                        <div class="card-actionbar">
                            <div class="card-actionbar-row">
                                <a class="btn btn-default btn-ink" href="{{ route('course.index') }}">
                                    <i class="md md-arrow-back"></i>
                                    Back
                                </a>
                                <input type="submit" name="pageSubmit" class="btn btn-info ink-reaction" value="Save">
                            </div>
                        </div>
                        <div class="card-head">
                            <div class="side-label">
                                <div class="label-head">
                                    <span>Status</span>
                                </div>
                                <div class="label-body">
                                    <input type="checkbox" id="switch_demo_1" name="is_published"
                                           {{ old('is_published', isset($course->is_published) ? $course->is_published : '')=='1' ? 'checked':'' }} data-switchery/>
                                </div>
                            </div>
                            <div class="side-label">
                                <div class="label-head">
                                    <span>Featured</span>
                                </div>
                                <div class="label-body">
                                    <input type="checkbox" id="switch_demo_1" name="is_featured"
                                           {{ old('status', isset($course->is_featured) ? $course->is_featured : '')=='1' ? 'checked':'' }} data-switchery/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end .panel --><!--end .panel --><!--end .panel --><!--end .panel -->
                {{--            </div><!--end .panel-group -->--}}
                {{--        <div class="panel-group" id="accordion1">--}}
                <div class="card panel">
                    <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1"
                         data-target="#accordion1-2">
                        <header>Image</header>
                        <div class="tools">
                            <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div id="accordion1-2" class="collapse">
                        <div class="card-body">
                            @if(isset($course->image))
                                @if(!empty($course->image))
                                    <input type="file" name="image" class="dropify"
                                           data-default-file="{{ asset($course->thumbnail_path) }}"/>
                                @else
                                    <input type="file" name="image" class="dropify"/>
                                @endif
                            @else
                                <input type="file" name="image" class="dropify"/>
                            @endif
                        </div>
                    </div>
                </div>
                <!--end .panel --><!--end .panel --><!--end .panel --><!--end .panel -->
            </div><!--end .panel-group -->
        </div>
    </div>
</div>
@section('scripts')
    <script src="{{ asset('resources/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('resources/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
@endsection
