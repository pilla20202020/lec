<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Tags -->
    {{--    <meta name="description" content="{{ setting('description') }}">--}}
    <meta name="author" content="{{ config('app.name') }}">

    <!-- Title-->
    <title>{{ config('app.name') }} - @yield('title', 'Page')</title>

    <!-- Styles -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="{{ asset('backend/css/materialadmin-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/materialadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/libs/toastr/toastr.min.css') }}">
    <!-- Datatable Format -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet"
          href="{{asset('backend/css/bootstrap-datetimepicker.min.css')}}"/>

    <link rel="stylesheet" href="{{ asset('backend/css/app.css') }}">
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('datatables/datatables.min.css') }}">--}}

<!-- Page Level Styles -->
    @stack('styles')
</head>
<body class="menubar-hoverable header-fixed menubar-pin">
@if (auth()->guest())
    @yield('guest')
@else
    <!-- BEGIN HEADER -->
    @include('backend.layouts.partials.header')
    <!-- END HEADER -->
    <!-- BEGIN BASE-->
    <div id="base">
        <div id="content">
            @yield('content')
        </div>

        @include('backend.layouts.partials.menubar')
    </div>
    <!-- END BASE -->
@endif

<!-- Global Script For Setting Session Messages and Active URL -->
@include('backend.layouts.partials.global-script')

<!-- Scripts -->
<script src="{{ asset('backend/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/spin.js/spin.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/autosize/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/bootbox/bootbox.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ asset('backend/js/core/source/App.min.js') }}"></script>
<script src="{{ asset('backend/js/core/source/AppNavigation.min.js') }}"></script>
<script src="{{ asset('backend/js/core/source/AppCard.min.js') }}"></script>
<script src="{{ asset('backend/js/core/source/AppForm.min.js') }}"></script>
<script src="{{ asset('backend/js/core/source/AppVendor.min.js') }}"></script>
<script src="{{ asset('backend/js/core/source/AppToast.min.js') }}"></script>
<script src="{{ asset('backend/js/core/source/AppBootBox.min.js') }}"></script>
<!-- Datatable Format -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
<script src="{{asset('backend/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('backend/js/altair_admin_common.js')}}"></script>
{{--<script src="{{ asset('datatables/datatables.min.js') }}"></script>--}}

@push('scripts')
    <script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
    {{--<script src="{{ asset('backend/js/libs/ckeditor/ckeditor.js') }}"></script>--}}
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>--}}

    <script>
        $(function () {
            $('.my-ckeditor').each(function (e) {
                CKEDITOR.replace(this.id, {
                    filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });
            });
        });
    </script>
@endpush
<script type="text/javascript">
    $(document).ready(function () {
        $('.dropify').dropify();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on("click", ".item-delete", function () {
            var $button = $(this), $row = $(this).closest("tr");
            bootbox.confirm("Are you sure you want to delete this item?", function (response) {
                if (response)
                    $.ajax({
                        "type": "POST",
                        "url": $button.data("url"),
                        "data": {_method: "DELETE"},
                        "success": function () {
                            $row.addClass("danger").fadeOut();
                        },
                        "error": function () {
                            bootbox.alert("Delete failed!");
                        }
                    });
            });
        });

        $(document).on("click", ".slider-delete", function () {
            var $button = $(this), $row = $(this).closest("tr");
            bootbox.confirm("Are you sure you want to delete this item?", function (response) {
                if (response)
                    $.ajax({
                        "type": "POST",
                        "url": $button.data("url"),
                        "data": {_method: "DELETE"},
                        "success": function () {
                            // alert('here');
                            // location.reload();
                        },
                        "error": function () {
                            bootbox.alert("Delete failed!");
                        }
                    });
            });
        });
    });
</script>

<script type="text/javascript">
    $(".datetime").datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        todayHighlight: 'TRUE',
        autoclose: true,
        startDate: new Date()
    });
</script>

@stack('scripts')

<!-- Page Level Scripts -->
</body>
</html>

