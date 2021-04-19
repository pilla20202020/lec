@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION EVENT -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <!--            <div class="col-xl-6 col-lg-8">-->
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <img src="{{asset('assets/images/event.gif')}} " class="img-responsive" alt="">
                        <h2>Upcoming events (Free Webinars & Trainings)</h2>
                    </div>
                </div>
                <!--            </div>-->
            </div>
            <div class="row justify-content-center">
                @foreach($events as $event)
                    <div class="col-md-4">
                        <div class="content_box event_box box_shadow1 animation" data-animation="fadeInUp"
                             data-animation-delay="0.02s">
                            <div class="content_img">
                                <a>
                                    <img src="{{asset($event->thumbnail_path)}}" class="img-responsive" alt="{{$event->title}}" width="350" height="230"/>
                                </a>
                                <div class="event_date">
                                    <h5><span>{{$event->event_date->format('d')}}</span> {{$event->event_date->format('M')}}</h5>
                                    <span class="event_time bg_default">{{$event->event_date->format('H:m A')}}</span>
                                </div>
                            </div>
                            <div class="content_desc bg-white">
                                <h4 class="content_title"><a href="{{route('event.detail',$event->slug)}}">{{$event->title}}</a></h4>
                                <p>{{$event->meta_description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- START SECTION EVENT -->


@endsection
