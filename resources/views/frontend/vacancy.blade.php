@extends ('frontend.layouts.app')
@section('content')


    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50"
             data-parallax-bg-image="{{asset('assets/images/about_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="page-title">
                        <h1>Vacancy</h1>
                    </div>
                </div>
                <div class="col-sm-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vacancy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BANNER -->
    <section class="small_pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.01s" style="animation-delay: 0.01s; opacity: 1;">
                        <div class="heading_s1 text-center">
                            <h2>Vacancy</h2>
                        </div>
                        <p>Join the dynamic and energetic team of LEC. </p>
                        <div class="small_divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="box_shadow1 radius_all_10">
                        <div class="row no-gutters">
                            <div class="col-md-6 animation animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 1;">
                                <div class="text-center animation animated fadeInUp mt-4" data-animation="fadeInUp" data-animation-delay="0.01s" style="animation-delay: 0.01s; opacity: 1;">
                                        @if(Illuminate\Support\Facades\Session::has('success'))
                                            <div class="alert alert-success">
                                                {{Illuminate\Support\Facades\Session::get('success')}}
                                            </div>
                                        @endif
                                    <div class="heading_s1 text-center">
                                        <h2>Contact Us</h2>
                                    </div>
                                    <p>We will be more than happy to reach out to you for any of your queries </p>
                                </div>
                                <div class="padding_eight_all">
                                    <div class="field_form">
                                        
                                        <form method="post" name="enq" action="{{route('vacancyapply')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Name" id="name" class="form-control" name="name" type="text">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Email" id="email" class="form-control" name="email" type="email">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Phone No." id="phone" class="form-control" name="phone" type="tel">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="photo">Passport size photo</label>
                                                    <input type="file" name="photo">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="photo">Latest Transcript</label>
                                                    <input type="file" name="transcript">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="photo">Resume</label>
                                                    <input type="file" name="resume">
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" title="Submit Your Message!" class="btn btn-default" id="submitButton" name="submit" value="Submit">Submit</button>
                                                </div>
                                                <div class="col-lg-12 text-center">
                                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animation animated fadeInRight" data-animation="fadeInRight" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                                <div class="bg_gray h-100 align-items-center padding_eight_all">
                                    <div class="heading_s1">
                                    <h2>Build Your Career with LEC</h2>
                                    </div>
                                    {!! $vacancy->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
