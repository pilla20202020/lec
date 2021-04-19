<!-- END SECTION CALL TO ACTION -->
{{-- <section class="bg_default small_pt small_pb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="text_white cta_section">
                    <div class="medium_divider d-block d-md-none"></div>
                    <div class="heading_s1 heading_light">
                        <h2>Get The Coaching Training Today!</h2>
                    </div>
                    <p>If you are going to use a passage of embarrassing hidden in the middle of text</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-md-right">
                    <a href="#" class="btn btn-outline-white rounded-0">Get Started</a>
                </div>
                <div class="medium_divider d-block d-md-none"></div>
            </div>
        </div>
    </div>
</section> --}}
<!-- END SECTION CALL TO ACTION -->
<!-- START FOOTER -->
<footer class="bg_blue_dark footer_dark">
    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
                    <div class="footer_logo">
                        <a href="{{route('homepage')}}"><img alt="logo" src="{{asset('assets/images/leclogo21.png')}}"></a>
                    </div>
                    <!-- <p>Phasellus blandit massa enim. elit id varius nunc. Lorem ipsum dolor sit amet, consectetur industry.</p> -->
                    <ul class="contact_info contact_info_light list_none">
                        <li>
                            <i class="fa fa-map-marker-alt "></i>
                            <address>{{setting('address')}}</address>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:{{setting('email')}}">{{setting('email')}}</a>
                        </li>
                        <li>
                            <i class="fa fa-mobile-alt"></i>
                                <a href="tel:{{setting('phone')}}">{{setting('phone')}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 mb-4 mb-lg-0">
                    <h6 class="widget_title">Useful Links</h6>
                    <ul class="list_none widget_links links_style2">
                        <li><a href="#">Join Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Support center</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 mb-4 mb-lg-0">
                    <h6 class="widget_title">Useful Links</h6>
                    <ul class="list_none widget_links links_style2">
                        <li><a href="#">Join Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Support center</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h6 class="widget_title">Recent Posts</h6>
                    {{-- <ul class="recent_post border_bottom_dash list_none">
                        <li>
                            <div class="post_footer">
                                <div class="post_img">
                                    <a href="#"><img src="{{asset('assets/images/letest_post1.jpg')}}" alt="letest_post1"></a>
                                </div>
                                <div class="post_content">
                                    <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                    <span class="post_date">April 14, 2018</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post_footer">
                                <div class="post_img">
                                    <a href="#"><img src="{{asset('assets/images/letest_post2.jpg')}}" alt="letest_post1"></a>
                                </div>
                                <div class="post_content">
                                    <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                    <span class="post_date">April 14, 2018</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post_footer">
                                <div class="post_img">
                                    <a href="#"><img src="{{asset('assets/images/letest_post3.jpg')}}" alt="letest_post1"></a>
                                </div>
                                <div class="post_content">
                                    <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                    <span class="post_date">April 14, 2018</span>
                                </div>
                            </div>
                        </li>
                    </ul> --}}
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                    <h6 class="widget_title">Subscribe Newsletter</h6>
                    <p></p>
                    <div class="newsletter_form form_style2 mb-4">
                        <form>
                            <input type="text" class="form-control" required="" placeholder="Email Address">
                            <button type="submit" title="Subscribe" class="btn btn-default btn-sm rounded-0" name="submit" value="Submit">Subscribe</button>
                        </form>
                    </div>
                    <h6 class="widget_title">Follow Us</h6>
                    <ul class="list_none social_icons social_white social_style1">
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
                </div> -->
            </div>
        </div>
    </div>
    <div class="bottom_footer bg_blue_dark2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright m-md-0 text-center text-md-left">© {{date('Y')}} All Rights Reserved by LEC.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list_none footer_link text-center text-md-right">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
