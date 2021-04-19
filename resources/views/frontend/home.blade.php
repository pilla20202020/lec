@extends ('frontend.layouts.app')
@section('content')
    @if($notices->isNotEmpty())
        <div class="news_ticker bg-warning">
            <div class="container">
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    @foreach($notices as $notice)
                        <a href="{{route('event.detail',$notice->slug)}}">{{$notice->title}}</a> @if($notice->count > 2) || @endif
                    @endforeach
                </marquee>
            </div>
        </div>
    @endif
    @if($sliders->isNotEmpty())
        <!-- START SECTION BANNER -->
        <section class="banner_section p-0 full_screen">
            <div id="carouselExampleControls" class="banner_content_wrap carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($sliders as $slide)
                        <div class="carousel-item @if($loop->index == 0) active @endif background_bg overlay_bg_10"
                             data-img-src="{{asset($slide->image_path)}}">
                            <div class="banner_slide_content">
                                <div class="container"><!-- STRART CONTAINER -->
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 col-sm-12 text-center">
                                            <div class="banner_content animation text_white" data-animation="fadeIn"
                                                 data-animation-delay="0.8s">
                                                @if($slide->caption)
                                                    <h2 class="font-weight-bold animation text-uppercase"
                                                        data-animation="zoomIn"
                                                        data-animation-delay="1s">{{$slide->caption}}</h2>
                                                @endif
                                                @if($slide->link_caption)
                                                    {{--                                        <p class="animation" data-animation="zoomIn" data-animation-delay="1.5s">Lorem is simply text of the printing and typesetting industry.</p>--}}
                                                    <a class="btn btn-default animation rounded-0"
                                                       href="{{$slide->link_url}}" data-animation="zoomIn"
                                                       data-animation-delay="1.8s">{{$slide->link_caption}}</a>
                                                @endif
                                                {{--                                        <a class="btn btn-outline-white animation rounded-0" href="#" data-animation="zoomIn" data-animation-delay="1.8s">Learn More</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END CONTAINER-->
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="carousel-nav">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="ion-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="ion-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- END SECTION BANNER -->
    @endif
    {{-- <section class="p-0 overlap_box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cat_overlap_box course_categories carousel_slider owl-carousel owl-theme nav_style1"
                         data-margin="15" data-nav="true" data-dots="false" data-loop="true" data-autoplay="true"
                         data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "576":{"items": "3"}, "1000":{"items": "4"}, "1199":{"items": "5"}}'>
                        <div class="item">
                            <div class="single_categories">
                                <a href="#" class="bg_danger">
                                    <i class="fa fa-globe"></i>
                                    Scholarship
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_categories">
                                <a href="#" class="bg_light_green">
                                    <i class="fa fa-chart-line"></i>
                                    2500+ Courses
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_categories">
                                <a href="#" class="bg_default">
                                    <i class="fa fa-book"></i>
                                    Admission
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_categories">
                                <a href="#" class="bg_pink">
                                    <i class="fa fa-camera"></i>
                                    Global exposure
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_categories">
                                <a href="#" class="bg_blue">
                                    <i class="fa fa-heartbeat"></i>
                                    academics
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_categories">
                                <a href="#" class="bg_orange">
                                    <i class="fa fa-code"></i>
                                    Campus life
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @if($features->isNotEmpty())
        <!-- START SECTION FEATURE -->
        <section class="small_pb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                            <div class="heading_s1 text-center">
                                <h2>Why Choose Us</h2>
                            </div>
                            <p>We are a team of professionals constantly working to make LEC one of the best technical institutions for engineering in Nepal with the primary focus on delivering high quality and practical centric education.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($features as $feature)
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box icon_box_style1 animation" data-animation="fadeInUp"
                                 data-animation-delay="0.02s">
                                <div class="box_icon mb-3">
                                    <i class="fa fa-{{$feature->icon}} text_default"></i>
                                </div>
                                <div class="intro_desc">
                                    <h5>{{$feature->title}}</h5>
                                    <p>{{$feature->meta_description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--                <div class="col-lg-4 col-md-6">--}}
                    {{--                    <div class="icon_box icon_box_style1 animation" data-animation="fadeInUp"--}}
                    {{--                         data-animation-delay="0.03s">--}}
                    {{--                        <div class="box_icon mb-3">--}}
                    {{--                            <i class="fa fa-globe text_default"></i>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="intro_desc">--}}
                    {{--                            <h5>Learn Courses Online</h5>--}}
                    {{--                            <p>If you are going to use a passage of anything embarrassing hidden in the middle of--}}
                    {{--                                text</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="col-lg-4 col-md-6">--}}
                    {{--                    <div class="icon_box icon_box_style1 animation" data-animation="fadeInUp"--}}
                    {{--                         data-animation-delay="0.04s">--}}
                    {{--                        <div class="box_icon mb-3">--}}
                    {{--                            <i class="fa fa-user-tie text_default"></i>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="intro_desc">--}}
                    {{--                            <h5>Expert Instructors</h5>--}}
                    {{--                            <p>If you are going to use passage of anything embarrassing hidden in the middle of text</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="col-lg-4 col-md-6">--}}
                    {{--                    <div class="icon_box icon_box_style1 animation" data-animation="fadeInUp"--}}
                    {{--                         data-animation-delay="0.05s">--}}
                    {{--                        <div class="box_icon mb-3">--}}
                    {{--                            <i class="fa fa-child text_default"></i>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="intro_desc">--}}
                    {{--                            <h5>Kids Education</h5>--}}
                    {{--                            <p>If you are going to use passage of anything embarrassing hidden in the middle of text</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="col-lg-4 col-md-6">--}}
                    {{--                    <div class="icon_box icon_box_style1 animation" data-animation="fadeInUp"--}}
                    {{--                         data-animation-delay="0.06s">--}}
                    {{--                        <div class="box_icon mb-3">--}}
                    {{--                            <i class="fa fa-headphones-alt text_default"></i>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="intro_desc">--}}
                    {{--                            <h5>music Programs</h5>--}}
                    {{--                            <p>If you are going to use passage of anything embarrassing hidden in the middle of text</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="col-lg-4 col-md-6">--}}
                    {{--                    <div class="icon_box icon_box_style1 animation" data-animation="fadeInUp"--}}
                    {{--                         data-animation-delay="0.07s">--}}
                    {{--                        <div class="box_icon mb-3">--}}
                    {{--                            <i class="fa fa-graduation-cap text_default"></i>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="intro_desc">--}}
                    {{--                            <h5>Scholarship</h5>--}}
                    {{--                            <p>If you are going to use passage of anything embarrassing hidden in the middle of text</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </section>
    @endif

    <!-- END SECTION FEATURE -->
    @if(!empty($welcomeMsg))
        <!-- START SECTION ABOUT -->
        <section class="overflow-hidden small_pt small_pb">
            <div class="container-fluid p-0">
                <div class="row no-gutters ">
                    <div class="col-lg-6">
                        <div class="bg_gray h-100 d-flex align-items-center padding_eight_all">
                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                                <div class="heading_s1">
                                    <h2>{{$welcomeMsg->name}}</h2>
                                </div>
                                {!! $welcomeMsg->content !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 animation" data-animation="fadeInRight" data-animation-delay="0.03s">
                        <div class="overlay_bg_30 about_img z_index_minus1 h-100 background_bg md-height-300"
                             data-img-src="{{asset($welcomeMsg->image_path)}}"></div>
                        <a href="http://tour.virtualedufairnepal.com/lalitpurengcollege/" class="video_popup video_play">
                            <span class="ripple"><i class="ion-play ml-1"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION ABOUT -->
    @endif
    @if($courses->isNotEmpty())
        <!-- START SECTION COURSES -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                            <div class="heading_s1 text-center">
                                <h2>Popular Courses</h2>
                            </div>
                            <p>LEC offers three education degrees : Bachelors in Civil Engineering, Bachelors in Computer Engineering and Bachelors in Computer Application.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($courses as $course)
                        <div class="col-lg-4 col-sm-6">
                            <div class="content_box box_shadow1 animation" data-animation="fadeInUp"
                                 data-animation-delay="0.02s">
                                @if($course->image)
                                    <div class="content_img">
                                        <a href="{{route('course.detail',$course->slug)}}"><img
                                                src="{{asset($course->thumbnail_path)}}" alt="{{$course->title}}"/></a>
                                    </div>
                                @endif
                                <div class="content_desc">
                                    <h4 class="content_title"><a href="{{route('course.detail',$course->slug)}}">{{$course->title}}</a></h4>
                                    <p>{{$course->meta_description}}</p>
                                    {{--                                <div class="courses_info">--}}
                                    {{--                                    <div class="rating_stars">--}}
                                    {{--                                        <i class="ion-android-star"></i>--}}
                                    {{--                                        <i class="ion-android-star"></i>--}}
                                    {{--                                        <i class="ion-android-star"></i>--}}
                                    {{--                                        <i class="ion-android-star"></i>--}}
                                    {{--                                        <i class="ion-android-star-half"></i>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <ul class="list_none content_meta">--}}
                                    {{--                                        <li><a href="#" ><i class="ti-user"></i>31</a></li>--}}
                                    {{--                                        <li><a href="#"><i class="ti-heart"></i>10</a></li>--}}
                                    {{--                                    </ul>--}}
                                    {{--                                </div>--}}
                                    <a href="{{route('course.detail',$course->slug)}}" class="text-capitalize">Read
                                        More</a>
                                </div>
                                {{--                            <div class="content_footer">--}}
                                {{--                                <div class="teacher">--}}
                                {{--                                    <a href="#"><img src="assets/images/user1.jpg" alt="user1"><span>Alia Noor</span></a>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="price">--}}
                                {{--                                    <span class="alert alert-success">Free</span>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--                <div class="row">--}}
                {{--                    <div class="col-12">--}}
                {{--                        <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.07s">--}}
                {{--                            <div class="medium_divider"></div>--}}
                {{--                            <a href="#" class="btn btn-default rounded-0">View All Courses <i class="ion-ios-arrow-thin-right ml-1"></i></a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </section>
        <!-- END SECTION COURSES -->
    @endif
    <!-- START SECTION VIDEO -->
    {{--    <section class="parallax_bg overlay_bg_blue_70" data-parallax-bg-image="{{asset('assets/images/banner5.jpg')}}">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-md-6">--}}
    {{--                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">--}}
    {{--                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup">--}}
    {{--                            <span class="ripple"><i class="ion-play ml-1"></i></span>--}}
    {{--                        </a>--}}
    {{--                        <div class="mt-md-5 mt-4 text_white animation" data-animation="fadeInUp" data-animation-delay="0.02s">--}}
    {{--                            <h2>Video Tutorial For Our Campus</h2>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- END SECTION VIDEO -->

    <!-- START SECTION COURSES -->
    {{--    <section>--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-xl-6 col-lg-8">--}}
    {{--                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">--}}
    {{--                        <div class="heading_s1 text-center">--}}
    {{--                            <h2>Popular Courses</h2>--}}
    {{--                        </div>--}}
    {{--                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 col-sm-6">--}}
    {{--                    <div class="content_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">--}}
    {{--                        <div class="content_img">--}}
    {{--                            <a href="#"><img src="{{asset('assets/images/course_img1.jpg')}}" alt="course_img1"/></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_desc">--}}
    {{--                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>--}}
    {{--                            <div class="courses_info">--}}
    {{--                                <div class="rating_stars">--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star-half"></i>--}}
    {{--                                </div>--}}
    {{--                                <ul class="list_none content_meta">--}}
    {{--                                    <li><a href="#" ><i class="ti-user"></i>31</a></li>--}}
    {{--                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_footer">--}}
    {{--                            <div class="teacher">--}}
    {{--                                <a href="#"><img src="{{asset('assets/images/user1.jpg')}}" alt="user1"><span>Alia Noor</span></a>--}}
    {{--                            </div>--}}
    {{--                            <div class="price">--}}
    {{--                                <span class="alert alert-success">Free</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-sm-6">--}}
    {{--                    <div class="content_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">--}}
    {{--                        <div class="content_img">--}}
    {{--                            <a href="#"><img src="{{asset('assets/images/course_img2.jpg')}}" alt="course_img2"/></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_desc">--}}
    {{--                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>--}}
    {{--                            <div class="courses_info">--}}
    {{--                                <div class="rating_stars">--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star-half"></i>--}}
    {{--                                </div>--}}
    {{--                                <ul class="list_none content_meta">--}}
    {{--                                    <li><a href="#" ><i class="ti-user"></i>31</a></li>--}}
    {{--                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_footer">--}}
    {{--                            <div class="teacher">--}}
    {{--                                <a href="#"><img src="{{asset('assets/images/user2.jpg')}}" alt="user2"><span>Dany Core</span></a>--}}
    {{--                            </div>--}}
    {{--                            <div class="price">--}}
    {{--                                <span class="alert alert-info">$49</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-sm-6">--}}
    {{--                    <div class="content_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">--}}
    {{--                        <div class="content_img">--}}
    {{--                            <a href="#"><img src="{{asset('assets/images/course_img3.jpg')}}" alt="course_img3"/></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_desc">--}}
    {{--                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>--}}
    {{--                            <div class="courses_info">--}}
    {{--                                <div class="rating_stars">--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star-half"></i>--}}
    {{--                                </div>--}}
    {{--                                <ul class="list_none content_meta">--}}
    {{--                                    <li><a href="#" ><i class="ti-user"></i>31</a></li>--}}
    {{--                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_footer">--}}
    {{--                            <div class="teacher">--}}
    {{--                                <a href="#"><img src="{{asset('assets/images/user3.jpg')}}" alt="user3"><span>Smith Parker</span></a>--}}
    {{--                            </div>--}}
    {{--                            <div class="price">--}}
    {{--                                <span class="alert alert-success">Free</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-sm-6">--}}
    {{--                    <div class="content_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.05s">--}}
    {{--                        <div class="content_img">--}}
    {{--                            <a href="#"><img src="{{asset('assets/images/course_img4.jpg')}}" alt="course_img4"/></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_desc">--}}
    {{--                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>--}}
    {{--                            <div class="courses_info">--}}
    {{--                                <div class="rating_stars">--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star-half"></i>--}}
    {{--                                </div>--}}
    {{--                                <ul class="list_none content_meta">--}}
    {{--                                    <li><a href="#" ><i class="ti-user"></i>31</a></li>--}}
    {{--                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_footer">--}}
    {{--                            <div class="teacher">--}}
    {{--                                <a href="#"><img src="{{asset('assets/images/user4.jpg')}}" alt="user4"><span>Sara Robert</span></a>--}}
    {{--                            </div>--}}
    {{--                            <div class="price">--}}
    {{--                                <span class="alert alert-info">$54</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-sm-6">--}}
    {{--                    <div class="content_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.06s">--}}
    {{--                        <div class="content_img">--}}
    {{--                            <a href="#"><img src="{{asset('assets/images/course_img5.jpg')}}" alt="course_img5"/></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_desc">--}}
    {{--                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>--}}
    {{--                            <div class="courses_info">--}}
    {{--                                <div class="rating_stars">--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star-half"></i>--}}
    {{--                                </div>--}}
    {{--                                <ul class="list_none content_meta">--}}
    {{--                                    <li><a href="#" ><i class="ti-user"></i>31</a></li>--}}
    {{--                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_footer">--}}
    {{--                            <div class="teacher">--}}
    {{--                                <a href="#"><img src="{{asset('assets/images/user5.jpg')}}" alt="user5"><span>Wendy Nahse</span></a>--}}
    {{--                            </div>--}}
    {{--                            <div class="price">--}}
    {{--                                <span class="alert alert-info">$36</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-sm-6">--}}
    {{--                    <div class="content_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.07s">--}}
    {{--                        <div class="content_img">--}}
    {{--                            <a href="#"><img src="{{asset('assets/images/course_img6.jpg')}}" alt="course_img6"/></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_desc">--}}
    {{--                            <h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>--}}
    {{--                            <div class="courses_info">--}}
    {{--                                <div class="rating_stars">--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star"></i>--}}
    {{--                                    <i class="ion-android-star-half"></i>--}}
    {{--                                </div>--}}
    {{--                                <ul class="list_none content_meta">--}}
    {{--                                    <li><a href="#" ><i class="ti-user"></i>31</a></li>--}}
    {{--                                    <li><a href="#"><i class="ti-heart"></i>10</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="content_footer">--}}
    {{--                            <div class="teacher">--}}
    {{--                                <a href="#"><img src="{{asset('assets/images/user6.jpg')}}" alt="user6"><span>John Wood</span></a>--}}
    {{--                            </div>--}}
    {{--                            <div class="price">--}}
    {{--                                <span class="alert alert-info">$22</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12">--}}
    {{--                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.07s">--}}
    {{--                        <div class="medium_divider"></div>--}}
    {{--                        <a href="#" class="btn btn-default rounded-0">View All Courses <i class="ion-ios-arrow-thin-right ml-1"></i></a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- END SECTION COURSES -->

    <!-- START SECTION COUNTER -->
    <section class="parallax_bg overlay_bg_blue_70" data-parallax-bg-image="{{asset('assets/images/video_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 ">
                    <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp"
                         data-animation-delay="0.02s">
                        <div class="counter_icon">
                            <img src="{{asset('assets/images/counter_icon1.png')}}" alt="{{setting('counter_title_1')}}"/>
                        </div>
                        <div class="counter_content">
                            <h3 class="counter_text"><span class="counter">{{setting('counter_count_1')}}</span></h3>
                            <p>{{setting('counter_title_1')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 ">
                    <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp"
                         data-animation-delay="0.03s">
                        <div class="counter_icon">
                            <img src="{{asset('assets/images/counter_icon2.png')}}" alt="{{setting('counter_title_2')}}"/>
                        </div>
                        <div class="counter_content">
                            <h3 class="counter_text"><span class="counter">{{setting('counter_count_2')}}</span></h3>
                            <p>{{setting('counter_title_2')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 ">
                    <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp"
                         data-animation-delay="0.04s">
                        <div class="counter_icon">
                            <img src="{{asset('assets/images/counter_icon3.png')}}" alt="{{setting('counter_title_3')}}"/>
                        </div>
                        <div class="counter_content">
                            <h3 class="counter_text"><span class="counter">{{setting('counter_count_3')}}</span></h3>
                            <p>{{setting('counter_title_3')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 ">
                    <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp"
                         data-animation-delay="0.05s">
                        <div class="counter_icon">
                            <img src="{{asset('assets/images/counter_icon4.png')}}" alt="{{setting('counter_title_4')}}"/>
                        </div>
                        <div class="counter_content">
                            <h3 class="counter_text"><span class="counter">{{setting('counter_count_4')}}</span></h3>
                            <p>{{setting('counter_title_4')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COUNTER -->
    @if(!empty($bigEvent))
        <!-- START SECTION EVENT -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                            <div class="heading_s1 text-center">
                                <h2>Upcoming events</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row event_list justify-content-center">
                    <div class="col-lg-6">
                        <div class="content_box event_box box_shadow1 animation mb-4 mb-lg-0" data-animation="fadeInUp"
                             data-animation-delay="0.02s">
                            <div class="content_img">
                                <a href="{{route('event.detail',$bigEvent->slug)}}"><img
                                        src="{{asset($bigEvent->image_path)}}" alt="{{$bigEvent->title}}"/></a>
                            </div>
                            <div class="event_date">
                                <h5>
                                    <span>{{$bigEvent->event_date->format('d')}}</span> {{$bigEvent->event_date->format('M')}}
                                </h5>
                                <span class="event_time bg_default">{{$bigEvent->event_date->format('h:m A')}}</span>
                            </div>
                            <div class="content_desc bg-white">
                                <h4 class="content_title"><a
                                        href="{{route('event.detail',$bigEvent->slug)}}">{{$bigEvent->title}}</a></h4>
                                <ul class="list_none content_meta">
                                    {{--                                <li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>--}}
                                    {{--                                <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>--}}
                                </ul>
                                <p>{{$bigEvent->meta_description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12">
                                @foreach($events as $event)
                                    <div class="content_box event_box box_shadow1 animation" data-animation="fadeInUp"
                                         data-animation-delay="0.03s">
                                        <div class="event_date">
                                            <h5>
                                                <span>{{$event->event_date->format('d')}}</span> {{$event->event_date->format('M')}}
                                            </h5>
                                            <span
                                                class="event_time bg_default">{{$event->event_date->format('h:m A')}}</span>
                                        </div>
                                        <div class="content_desc bg-white">
                                            <h4 class="content_title"><a
                                                    href="{{route('event.detail',$event->slug)}}">{{$event->title}}</a>
                                            </h4>
                                            <ul class="list_none content_meta">
                                                {{--                                        <li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>--}}
                                                {{--                                        <li><i class="ti-location-pin"></i><span--}}
                                                {{--                                                class="text_default">New York City</span></li>--}}
                                            </ul>
                                            <p>{{$event->meta_description}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- START SECTION EVENT -->
    @endif
    <!-- START SECTION INQUIRY -->
    <section class="pb-0 background_bg bg_blue_dark" data-img-src="{{asset('assets/images/pattern_bg.png')}}">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-7">
                    <div class="register_form text_white padding_eight_all animation" data-animation="fadeInLeft"
                         data-animation-delay="0.02s">
                        <div class="heading_s1 heading_light">
                            <h2>Contact <span class="text_default">Us</span></h2>
                        </div>
                        <p>We will be more than happy to reach out to you for any of your queries.</p>
                        <form method="post" name="enq" class="pt-md-2 form_transparent" action="{{route('contact.mail')}}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input required="required" placeholder="Enter Name *" class="form-control"
                                           name="full_name" type="text">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input required="required" placeholder="Enter Email *" class="form-control"
                                           name="email_address" type="email">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input placeholder="Enter Phone No *" class="form-control"
                                           name="phone_number" type="tel">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input placeholder="Enter Subject" class="form-control"
                                           name="subject" type="text">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea required="required" placeholder="Message *" class="form-control"
                                              name="cnt_message" rows="4"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" title="Submit Your Message!" class="btn btn-default rounded-0"
                                            name="submit" value="Submit"><i class="fa fa-paper-plane"></i> Send
                                    </button>
                                </div>
                                <div class="col-sm-12">
                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="large_divider"></div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="text-center animation" data-animation="fadeInRight" data-animation-delay="0.03s">
                        <img src="{{asset('assets/images/girl_img.png')}}" alt="girl_img"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION INQUIRY -->
    @if($teachers->isNotEmpty())
        <!-- START SECTION TEACHER -->
        <section class="bg_gray">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s1 text-center animation" data-animation="fadeInUp"
                             data-animation-delay="0.01s">
                            <h2>Our Teachers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($teachers as $teacher)
                        <div class="col-lg-3 col-sm-6">
                            <div class="team_box team_style2 box_shadow1 animation" data-animation="fadeInUp"
                                 data-animation-delay="0.02s">
                                @if($teacher->image)
                                    <div class="team_img">
                                        <img src="{{asset($teacher->image_path)}}" alt="team1">
                                    </div>
                                @endif
                                <div class="team_title text-center">
                                    <h5><a href="#">{{$teacher->title}}</a></h5>
                                    <span>{{$teacher->designation}}</span>
                                    <ul class="list_none social_icons">
                                        @if(!empty($teacher->facebook))
                                            <li><a href="{{$teacher->facebook}}" target="_blank" class="sc_facebook"><i
                                                        class="ion-social-facebook"></i></a></li>
                                        @endif
                                        @if(!empty($teacher->twitter))
                                            <li><a href="{{$teacher->twitter}}" target="_blank" class="sc_twitter"><i
                                                        class="ion-social-twitter"></i></a></li>
                                        @endif
                                        @if(!empty($teacher->linkedin))
                                            <li><a href="{{$teacher->linkedin}}" target="_blank" class="sc_gplus"><i
                                                        class="ion-social-linkedin"></i></a></li>
                                        @endif
                                        @if(!empty($teacher->instagram))
                                            <li><a href="{{$teacher->instagram}}" target="_blank"
                                                   class="sc_instagram"><i class="ion-social-instagram-outline"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END SECTION TEACHER -->
    @endif
    @if($reviews->isNotEmpty())
        <!-- START SECTION TESTIMONIAL -->
        <section class="background_bg bg_fixed" data-img-src="{{asset('assets/images/pattern_bg3.png')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                            <div class="heading_s1 text-center">
                                <h2>Student Say!</h2>
                            </div>
                            <!-- <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything
                                embarrassing hidden in the middle of text</p> -->
                            <div class="small_divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="testimonial_slider testimonial_style2 carousel_slider owl-carousel owl-theme"
                             data-margin="30" data-loop="true" data-autoplay="true" data-dots="false"
                             data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "576":{"items": "2"}, "1199":{"items": "3"}}'>
                            @foreach($reviews as $review)
                                <div class="testimonial_box">
                                    @if($review->image)
                                        <div class="testimonial_img">
                                            <img src="{{asset($review->image_path)}}" alt="{{$review->title}}">
                                        </div>
                                    @endif
                                    <div class="testi_meta">
                                        <div class="testi_user">
                                            <h6>{{$review->title}}</h6>
                                            <span class="text_default">{{$review->designation}}</span>
                                        </div>
                                        <div class="testi_desc">
                                            {!! $review->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TESTIMONIAL -->
    @endif
    <!-- START SECTION BLOG -->
    {{--    <section class="bg_gray">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">--}}
    {{--                        <h2>Our Blog</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="blog_post box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">--}}
    {{--                        <div class="blog_img">--}}
    {{--                            <a href="#">--}}
    {{--                                <img src="{{asset('assets/images/blog_small_img1.jpg')}}" alt="blog_small_img1">--}}
    {{--                                <div class="link_blog">--}}
    {{--                                    <span class="ripple"><i class="fa fa-link"></i></span>--}}
    {{--                                </div>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog_content bg-white">--}}
    {{--                            <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>--}}
    {{--                            <a href="#" class="text-capitalize">Read More</a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog_footer bg-white">--}}
    {{--                            <ul class="list_none blog_meta">--}}
    {{--                                <li><a href="#"><i class="ion-calendar"></i>15 May, 2019</a></li>--}}
    {{--                                <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="blog_post box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">--}}
    {{--                        <div class="blog_img">--}}
    {{--                            <a href="#">--}}
    {{--                                <img src="{{asset('assets/images/blog_small_img2.jpg')}}" alt="blog_small_img2">--}}
    {{--                                <div class="link_blog">--}}
    {{--                                    <span class="ripple"><i class="fa fa-link"></i></span>--}}
    {{--                                </div>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog_content bg-white">--}}
    {{--                            <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>--}}
    {{--                            <a href="#" class="text-capitalize">Read More</a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog_footer bg-white">--}}
    {{--                            <ul class="list_none blog_meta">--}}
    {{--                                <li><a href="#"><i class="ion-calendar"></i>23 May, 2019</a></li>--}}
    {{--                                <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="blog_post box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">--}}
    {{--                        <div class="blog_img">--}}
    {{--                            <a href="#">--}}
    {{--                                <img src="{{asset('assets/images/blog_small_img3.jpg')}}" alt="blog_small_img3">--}}
    {{--                                <div class="link_blog">--}}
    {{--                                    <span class="ripple"><i class="fa fa-link"></i></span>--}}
    {{--                                </div>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog_content bg-white">--}}
    {{--                            <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>--}}
    {{--                            <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>--}}
    {{--                            <a href="#" class="text-capitalize">Read More</a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog_footer bg-white">--}}
    {{--                            <ul class="list_none blog_meta">--}}
    {{--                                <li><a href="#"><i class="ion-calendar"></i>16 May, 2019</a></li>--}}
    {{--                                <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12">--}}
    {{--                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">--}}
    {{--                        <div class="medium_divider"></div>--}}
    {{--                        <a href="#" class="btn btn-default rounded-0">View All Blog <i class="ion-ios-arrow-thin-right ml-1"></i></a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
@endsection
