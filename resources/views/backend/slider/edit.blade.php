@extends('backend.layouts.app')

@section('title', 'photo')

@section('content')
    <section>
        <div class="section-body">
{{--            {{ Form::open(['route' =>'slider.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}--}}
            {{ Form::model($slider, ['route' =>['slider.update', $slider->id],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.slider.partials.form', ['header' => 'Edit Slide'])
            {{ Form::close() }}
        </div>
    </section>
@stop

@push('styles')
    <link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
@endpush
