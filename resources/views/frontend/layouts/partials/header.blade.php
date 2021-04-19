<!-- START HEADER -->
<header class="header_wrap dark_skin">
    <div class="top-header bg_blue_dark2 light_skin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><a href="tel:{{setting('phone')}}"><i class="ti-mobile"></i>{{setting('phone')}}</a></li>
                        <li><a href="mailto:{{setting('email')}}"><i class="ti-email"></i>{{setting('email')}}</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center mt-2 mt-md-0">
                        <ul class="list_none social_icons social_white text-center text-md-right">
                            @if(setting('facebook'))
                                <li><a href="{{setting('facebook')}}" target="_blank"><i
                                            class="ion-social-facebook"></i></a></li>
                            @endif
                            @if(setting('twitter'))
                                <li><a href="{{setting('twitter')}}" target="_blank"><i class="ion-social-twitter"></i></a>
                                </li>
                            @endif
                            @if(setting('youtube'))

                                <li><a href="{{setting('youtube')}}" target="_blank"><i
                                            class="ion-social-youtube-outline"></i></a></li>
                            @endif
                            @if(setting('linkedin'))
                                <li><a href="{{setting('linkedin')}}" target="_blank"><i
                                            class="ion-social-linkedin-outline"></i></a></li>
                            @endif
                        </ul>
                        <ul class="list_none header_list border_list ml-1">
                            {{--                                                    <li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li>--}}
                            <li><a href="{{route('admission.form')}}" class="btn btn-default btn-sm rounded-0">Apply Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{route('homepage')}}">
                <img class="logo_light" src="{{asset('assets/images/leclogo21.png')}}" alt="{{ config('app.name') }}"/>
                <img class="logo_dark" src="{{asset('assets/images/leclogo21.png')}}" alt="{{ config('app.name') }}"/>
                <img class="logo_default" src="{{asset('assets/images/leclogo21.png')}}"
                     alt="{{ config('app.name') }}"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="ion-android-menu"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @foreach(menus() as $menu)
                        <?php
                        $hasSub = !$menu->subMenus->isEmpty();
                        ?>
                        <li class="{{($hasSub) ? "dropdown" : ""}}">
                            <a class="{{($hasSub) ? "dropdown-toggle" : ""}} nav-link" href="{{ url($menu->url) }}"
                               data-toggle="{{($hasSub) ? "dropdown" : ""}}">
                                {{$menu->name}}
                            </a>
                            @if($hasSub)
                                <div class="dropdown-menu">
                                    <ul>
                                        @foreach($menu->subMenus as $key => $sub)
                                            <li>
                                                <a class="dropdown-item nav-link nav_item"
                                                   href="{{url($sub->url)}}">{{ $sub->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END HEADER -->
