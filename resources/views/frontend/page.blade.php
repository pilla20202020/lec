@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/about_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>{{$page->title}}</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
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
                    <div class="single_post">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{asset($page->image_path)}}" alt="{{$page->title}}">
                            </a>
                        </div>
                        <div class="single_post_content">
                            <div class="blog_text">
                                <p>{!! $page->content !!}</p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
                    <div class="sidebar">
                        @if($courses)
                            <div class="widget widget_categories">
                                <h5 class="widget_title">Courses</h5>
                                <ul>
                                    @foreach ($courses as $course)
                                        <li><a href="{{route('course.detail',$course->slug)}}"><span class="categories_name">{{$course->title}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if($events)
                            <div class="widget widget_recent_post">
                                <h5 class="widget_title">Recent Events</h5>
                                <ul class="recent_post border_bottom_dash list_none">
                                    @foreach($events as $event)
                                        <li>
                                            <div class="post_footer">
                                                <div class="post_img">
                                                    <a href="{{route('event.detail',$event->slug)}}"><img src="{{asset($event->image_path)}}" alt="{{$event->title}}"></a>
                                                </div>
                                                <div class="post_content">
                                                    <h6><a href="{{route('event.detail',$event->slug)}}">{{$event->title}}</a></h6>
                                                    <span class="post_date">{{$event->event_date->format('Y-m-d')}}</span>
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



{{--    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50"--}}
{{--             data-parallax-bg-image="{{asset('assets/images/reliance/Background.jpg')}}">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <div class="page-title">--}}
{{--                        <h1>{{$page->title}}</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6">--}}
{{--                    <nav aria-label="breadcrumb">--}}
{{--                        <ol class="breadcrumb justify-content-sm-end">--}}
{{--                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>--}}
{{--                            <li class="breadcrumb-item"><a href="{{route('service.list')}}">Services</a></li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$page->title}}</a>--}}
{{--                            </li>--}}
{{--                        </ol>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

   <!-- START SECTION TEACHER -->
{{--    <section>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-9 col-md-6">--}}
{{--                    <div class="single_event">--}}
{{--                        <div class="content_img">--}}
{{--                            <img src="{{asset($page->image_path)}}" alt="{{$page->title}}">--}}
{{--                        </div>--}}
{{--                        <div class="event_title">--}}
{{--                            <div class="row align-items-end">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="entry_content">--}}
{{--                            {!! $page->content !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="team_single radius_all_10 box_shadow1 radius_color">--}}
{{--                        <div class="team_single_info">--}}
{{--                            <div class="widget widget_categories">--}}
{{--                                <h4 class="widget_title widget_sidebar">Quick Links</h4>--}}
{{--                                @if($pages->isNotEmpty())--}}
{{--                                    <ul style="list-style: none;">--}}
{{--                                        @foreach($pages as $pageDetail)--}}
{{--                                            <li>--}}
{{--                                                <a href="{{route('page.detail',$pageDetail->slug)}}">--}}
{{--                                                    <i class="fa fa-angle-double-right"--}}
{{--                                                       style="font-size: 20px;margin: 6px;"></i>--}}
{{--                                                    <span class="categories_name">{{$pageDetail->title}}</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- END SECTION TEACHER -->
@endsection
