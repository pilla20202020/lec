@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/about_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
                            <h2>Get In Touch</h2>
                        </div>
                        <div class="small_divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="box_shadow1 radius_all_10">
                        <div class="row no-gutters">
                            <div class="col-md-6 animation animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 1;">
                                @if(Illuminate\Support\Facades\Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Illuminate\Support\Facades\Session::get('success')}}
                                    </div>
                                @endif
                                <div class="padding_eight_all">
                                    <div class="field_form">
                                        <form method="post" name="enq" action="{{route('contact.mail')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Name" id="first-name" class="form-control" name="full_name" type="text">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Email" id="email" class="form-control" name="email_address" type="email">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Phone No." id="phone" class="form-control" name="phone_number" type="tel">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="text">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <textarea required="required" placeholder="Message" id="description" class="form-control" name="cnt_message" rows="3"></textarea>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" title="Submit Your Message!" class="btn btn-default" name="submit" value="Submit">Submit</button>
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
                                <div class="contact_map map_radius_rtrb overflow-hidden h-100">
                                    <iframe src="{{setting('google_map')}}" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.01s" style="animation-delay: 0.01s; opacity: 1;">
                        <div class="heading_s1 text-center">
                            <h2>Contact Information</h2>
                        </div>
                        <!-- <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="overlay_bg_danger_90 icon_box text-center text_white radius_all_10 background_bg animation animated fadeInUp" data-img-src="{{asset('assets/images/address_img.jpg')}}" data-animation="fadeInUp" data-animation-delay="0.02s" style="background-image: url(&quot;assets/images/address_img.jpg&quot;); background-position: center center; background-size: cover; animation-delay: 0.02s; opacity: 1;">
                        <div class="box_icon mb-3">
                            <img src="{{asset('assets/images/map_icon.png')}}" alt="map_icon">
                        </div>
                        <div class="intro_desc">
                            <h5>Address</h5>
                            <p>{{setting('address')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="overlay_bg_light_green_90 icon_box text-center text_white radius_all_10 background_bg animation animated fadeInUp" data-img-src="{{asset('assets/images/call_img.jpg')}}" data-animation="fadeInUp" data-animation-delay="0.03s" style="background-image: url(&quot;assets/images/call_img.jpg&quot;); background-position: center center; background-size: cover; animation-delay: 0.03s; opacity: 1;">
                        <div class="box_icon mb-3">
                            <img src="{{asset('assets/images/phone_icon.png')}}" alt="phone_icon">
                        </div>
                        <div class="intro_desc">
                            <h5>Call Us</h5>
                            <a href="tel:{{setting('phone')}}">{{setting('phone')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="overlay_bg_default_90 icon_box text-center text_white radius_all_10 background_bg animation animated fadeInUp" data-img-src="{{asset('assets/images/email_img.jpg')}}" data-animation="fadeInUp" data-animation-delay="0.04s" style="background-image: url(&quot;assets/images/email_img.jpg&quot;); background-position: center center; background-size: cover; animation-delay: 0.04s; opacity: 1;">
                        <div class="box_icon mb-3">
                            <img src="{{asset('assets/images/email_icon.png')}}" alt="email_icon">
                        </div>
                        <div class="intro_desc">
                            <h5>Email</h5>
                            <a href="mailto:{{setting('email')}}">{{setting('email')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
