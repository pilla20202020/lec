<header id="header" class="header-inverse">
    <div class="headerbar">
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand">
                    <div class="brand-holder">
                        <a href="{{url('/')}}" target="_blank">
                            <img src="{{asset('assets/images/ircbo/Picture1.png')}}" alt="{{ config('app.name') }}">
                        </a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="md md-menu"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="headerbar-right">
            <ul class="header-nav header-nav-options">
            </ul>
            <ul class="header-nav header-nav-profile">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu animation-dock">
                        {{--<li>--}}
                            {{--<a href="{{ route('user.show', auth()->user()->username) }}">--}}
                                {{--<i class="md md-account-circle"></i>--}}
                                {{--My profile--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ route('setting.index') }}">
                                <i class="md md-settings"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/logout')}}">
                                <i class="md md-settings-power text-danger"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>



{{--<header id="header" style="background: #00A652;">--}}
    {{--<div class="headerbar text-default-bright">--}}
        {{--<div class="headerbar-left">--}}
            {{--<ul class="header-nav header-nav-options">--}}
                {{--<li class="header-nav-brand">--}}
                    {{--<div class="brand-holder">--}}
                        {{--<a href="{{url('/')}}">--}}
                             {{--<img src="{{asset('assets/images/1durbarmall/logo2.jpg')}}" alt="1Durbar Mall">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">--}}
                        {{--<i class="md md-menu"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="headerbar-right">--}}
            {{--<ul class="header-nav header-nav-options">--}}
            {{--</ul>--}}
            {{--<ul class="header-nav header-nav-profile">--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">--}}
                        {{--{{ auth()->user()->name }}--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu animation-dock">--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="md md-account-circle"></i>--}}
{{--                                My profile--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        {{--<li>--}}
                            {{--<a href="{{route('setting.index')}}">--}}
                                {{--<i class="md md-settings"></i>--}}
                                {{--Settings--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{url('/logout')}}">--}}
                                {{--<i class="md md-settings-power text-danger"></i>--}}
                                {{--Logout--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</header>--}}
