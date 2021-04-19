@extends ('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50"
             data-parallax-bg-image="{{asset('assets/images/about_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>{{$event->title}}</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$event->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION COURSE DETAIL -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single_event">
                        <div class="content_img">
                            <a href="#">
                                <img src="{{asset($event->image_path)}}" alt="{{$event->title}}">
                            </a>
                            @if($event->event_date)
                                <div class="event_date radius_all_5">
                                    <h5>
                                        <span>{{$event->event_date->format('d')}}</span> {{$event->event_date->format('M')}}
                                    </h5>
                                    <span
                                        class="event_time radius_lbrb_5 bg_default">{{$event->event_date->format('h:m A')}}</span>
                                </div>
                            @endif
                        </div>
                        <div class="event_title">
                            <div class="row align-items-end">
                                <div class="col-md-8">
                                    <h2>{{$event->title}}</h2>
                                    {{--                                    <ul class="list_none content_meta mt-2">--}}
                                    {{--                                        <li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>--}}
                                    {{--                                        <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>--}}
                                    {{--                                    </ul>--}}
                                </div>
                                <div class="col-md-4">
                                    <div class="text-md-right">
                                        {{--                                        <ul class="list_none social_icons">--}}
                                        {{--                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>--}}
                                        {{--                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>--}}
                                        {{--                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>--}}
                                        {{--                                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>--}}
                                        {{--                                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>--}}
                                        {{--                                        </ul>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry_content">
                            {!! $event->content !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
                    <div class="sidebar">
                        {{--                        <div class="widget widget_categories">--}}
                        {{--                            <h5 class="widget_title">Course Categories</h5>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#"><span class="categories_name">Development</span><span--}}
                        {{--                                            class="categories_num">(9)</span></a></li>--}}
                        {{--                                <li><a href="#"><span class="categories_name">Business</span><span--}}
                        {{--                                            class="categories_num">(6)</span></a></li>--}}
                        {{--                                <li><a href="#"><span class="categories_name">Academics</span><span--}}
                        {{--                                            class="categories_num">(4)</span></a></li>--}}
                        {{--                                <li><a href="#"><span class="categories_name">Health Fitness</span><span--}}
                        {{--                                            class="categories_num">(7)</span></a></li>--}}
                        {{--                                <li><a href="#"><span class="categories_name">Photography</span><span--}}
                        {{--                                            class="categories_num">(12)</span></a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        @if($events->isNotEmpty())
                            <div class="widget widget_recent_post">
                                <h5 class="widget_title">Recent Post</h5>
                                <ul class="recent_post border_bottom_dash list_none">
                                    @foreach($events as $event)
                                        <li>
                                            <div class="post_footer">
                                                <div class="post_img">
                                                    <a href="#"><img src="{{asset($event->thumbnail_path)}}"
                                                                     alt="{{$event->title}}"></a>
                                                </div>
                                                <div class="post_content">
                                                    <h6><a href="#">{{$event->meta_description}}</a></h6>
                                                    @if($event->event_date)
                                                        <span class="post_date">{{$event->event_date->format('M d, Y')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COURSE DETAIL -->
@endsection
