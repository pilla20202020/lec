<script>
    //Session messages
    var successMsg = "{{ session('success') }}";
    var infoMsg = "{{ session('info') }}";
    var warningMsg = "{{ session('warning') }}";
    var dangerMsg = "{{ session('danger') }}";
    var errorMsg;
            @if(count($errors))
        <?php $allErrors = '<ul>'; ?>

            @foreach($errors->all() as $errors)
        <?php $allErrors .= '<li>'.$errors.'</li>'; ?>
            @endforeach
        <?php $allErrors .= '</ul>'; ?>

    var errorMsg = "{!! $allErrors !!}";
    @endif

    //Active links
    var requestUrl = "{{ request()->url() }}";
</script>


{{--<script>--}}
{{--//Session messages--}}
{{--var successMsg = "{{ session('success') }}";--}}
{{--var infoMsg = "{{ session('info') }}";--}}
{{--var warningMsg = "{{ session('warning') }}";--}}
{{--var dangerMsg = "{{ session('danger') }}";--}}
{{--var errorMsg = "{{ isset($errors) && ! empty($errors->all()) ? 'Form validation error!' : false }}";--}}

{{--//Active links--}}
{{--var requestUrl = "{{ request()->url() }}";--}}
{{--</script>--}}