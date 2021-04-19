@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION ABOUT -->
    <section id="about_section" class="no-padding small_pt small_pb overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center intro_desc">
                        <h1>Demos <span>&</span> Videos</h1>
                    </div>
                </div>
            </div>
            <div class="row no-gutters align-items-center">
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <div class="vertical-img">
                        <div class="img-item">
                            <a href="#" data-id="boom1" class="vidClick">
                                <img src="{{asset('assets/images/boom2.png')}}" alt="">
                                <button class="btn btn-default btn-sm">Select</button>
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="boom4" class="vidClick">
                                <img src="{{asset('assets/images/boom4.png')}}" alt="">
                                <button class="btn btn-default btn-sm">Select</button>
                            </a>
                        </div>
{{--                        <div class="img-item">--}}
{{--                            <a href="#" data-id="boom5" class="vidClick">--}}
{{--                                <img src="{{asset('assets/images/boom5.png')}}" alt="">--}}
{{--                                <button class="btn btn-default btn-sm">Select</button>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12">
                    <div class="video-container">
                        <div class="vidClass" id="boom1">
                            <video controls width="660" height="390" id="vid_boom1">

                                <source src="{{asset('assets/images/ISMS.mp4')}}"
                                        type="video/webm">

                                <source src="{{asset('assets/images/ISMS.mp4')}}"
                                        type="video/mp4">

                                Sorry, your browser doesn't support embedded videos.
                            </video>
                        </div>
                        <!--                        <iframe class="video_popup video_play" width="660" height="390"-->
                        <!--                                src="//www.youtube.com/embed/7Dqgr0wNyPo" frameborder="0"-->
                        <!--                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"-->
                        <!--                                allowfullscreen id="boom2">-->
                        <!--                        </iframe>-->
                        <!--                        <iframe class="video_popup video_play" width="660" height="390"-->
                        <!--                                src="//www.youtube.com/embed/y2ak_oBeC-I" frameborder="0"-->
                        <!--                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"-->
                        <!--                                allowfullscreen id="boom3">-->
                        <!--                        </iframe>-->
                        <div class="vidClass" id="boom4">
                            <video controls width="660" height="390" id="vid_boom4">

                                <source src="{{asset('assets/images/soom.mp4')}}"
                                        type="video/webm">

                                <source src="{{asset('assets/images/soom.mp4')}}"
                                        type="video/mp4">

                                Sorry, your browser doesn't support embedded videos.
                            </video>
                        </div>
                        <div class="vidClass" id="boom3">
{{--                            <video controls width="660" height="390">--}}

                            <iframe src="https://demo.accessworld.net/project/ircbo-boom-scot/index.html" style="height:390px;width:660px;"></iframe>

{{--                                <source src="https://demo.accessworld.net/project/ircbo-boom-scot/index.html"--}}
{{--                                        type="video/mp4">--}}

{{--                                Sorry, your browser doesn't support embedded videos.--}}
{{--                            </video>--}}
                        </div>
                        <!--                        <iframe class="video_popup video_play" width="660" height="390"-->
                        <!--                                src="//www.youtube.com/embed/10yrPDf92hY" frameborder="0"-->
                        <!--                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"-->
                        <!--                                allowfullscreen id="boom4">-->
                        <!--                        </iframe>-->
                        <!--                        <iframe class="video_popup video_play" width="660" height="390"-->
                        <!--                                src="//www.youtube.com/embed/xlCmQcRPtRg" frameborder="0"-->
                        <!--                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"-->
                        <!--                                allowfullscreen id="boom5">-->
                        <!--                        </iframe>-->
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <div class="vertical-img">
                        <div class="img-item">
                            <a href="#" data-id="boom3" class="vidClick">
                                <img src="{{asset('assets/images/boom3.png')}}" alt="">
                                <button class="btn btn-default btn-sm">Select</button>
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="https://demo.ircboboom.solutions:8031/ISMSDEMO/index.xhtml" target="_blank">
                                <img src="{{asset('assets/images/boom1.png')}}" alt="">
                                <img src="{{asset('assets/images/ircbo/images23.gif')}}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
