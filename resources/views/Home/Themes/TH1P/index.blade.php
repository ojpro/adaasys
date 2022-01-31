
<div id="main_content">
    <header class="site-header header-eight header_trans-fixed" data-top="992">
        <div class="container">
            <div class="header-inner">
                <div class="toggle-menu"><span class="bar"></span> <span class="bar"></span> <span class="bar"></span>
                </div>
                <div class="site-mobile-logo"><a href="{{route('home')}}" class="logo"><img
                            src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/TH1P/assets/img/logo-three.png')}} alt="site
                            logo" class="main-logo"> <img
                            src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/TH1P/assets/img/logo-three.png')}} alt="site
                            logo" class="sticky-logo"></a></div>
                <nav class="site-nav">
                    <div class="close-menu"><span>Close</span> <i class="ei ei-icon_close"></i></div>
                    <div class="site-logo"><a href="{{route('home')}}" class="logo"><img
                                src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/TH1P/assets/img/logo-three.png')}} alt="site
                                logo" class="main-logo"> <img
                                src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/TH1P/assets/img/logo-three.png')}} alt="site
                                logo" class="sticky-logo"></a>
                    </div>
                    <div class="menu-wrapper" data-top="992">
                        <ul class="site-main-menu">
                            <li><a href="{{route('home')}}">{{$selected_language->data['home'] ?? 'Home'}}</a></li>
                            <li><a href="{{route('partner_stores')}}">{{$selected_language->data['website_pro_footer_menu_partnersstore'] ?? 'Partner Stores'}}</a></li>
                            <li>
                                <a href="{{route('store_pricing')}}">{{$selected_language->data['pricing'] ?? 'Pricing'}}</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a>{{$selected_language->data['website_pages'] ?? 'Pages'}}</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('faq')}}">{{$selected_language->data['website_pro_faq'] ?? 'Faqs'}}</a></li>
                                    <li>
                                        <a href="{{route('about')}}">{{$selected_language->data['about_us'] ?? 'About Us'}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('privacy')}}">{{$selected_language->data['privacy_policy'] ?? 'Privacy Policy'}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('termsandcondition')}}">{{$selected_language->data['termsandcondition'] ?? 'Terms and Condition'}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('refund')}}">{{$selected_language->data['refundandcancellation'] ?? 'Refund & Cancellation'}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('store.login')}}">{{$selected_language->data['login'] ?? 'Login'}}</a>
                            </li>
                            <li><a class="text-primary"
                                   href="{{route('store_register')}}">{{$selected_language->data['register'] ?? 'Register'}}</a>
                            </li>
                            <li>
                                <div class="dropdown margin-left">
                                    <form method="post" action="{{route("change_language")}}">
                                        @csrf
                                        <select class="form-control1" name="selected_language" data-width="fit"
                                                onchange="this.form.submit()">
                                            @foreach($languages as $data)
                                                @if(Session::get('selected_language')!=NULL)
                                                    <option
                                                        {{Session::get('selected_language') == $data->id ?"selected": null}} value="{{$data->id}}">{{$data->language_name}}</option>

                                                @endif
                                                @if(Session::get('selected_language')==NULL)
                                                    <option
                                                        {{$data->is_default == 1 ?"selected": null}} value="{{$data->id}}">{{$data->language_name}}</option>
                                                @endif

                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </header>
    <section id="home" class="banner banner-eight">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banne-content-wrapper-eight">

                        <h1 class="banner-title wow fadeInUp" data-wow-delay="0.3s">
                            <span> {{$selected_language->data['home_first_title'] ?? 'Re-open your restaurants'}}</span>
                        </h1>
                        <p class="description wow fadeInUp"
                           data-wow-delay="0.5s">
                            {!!$selected_language->data['home_first_sub_title'] ?? 'With a contactless <b>CHEF MENU</b>.<br>Make your restaurant a safe place to eat or grab-and-go by deploying a touch-free QR Code menu.'!!}
                        </p>
                        <div class="app-btn-wrapper"><a href="#" class="app-btn-two wow flipInX"
                                                        data-wow-delay="0.5s"><i class="fi flaticon-google-play"></i>
                                <span class="btn-text"><span
                                        class="text-top">Get it on the</span> <span>Google play</span></span></a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-six-promo-image text-right"><img src="themes/TH1P/media/banner/app/mockup.png"
                                                                        class="wow pixZoomIn" alt="chef">
                        <div class="banner-leaf">
                            <div class="leaf-left"><img src="themes/TH1P/media/banner/app/leaf1.png" alt="chef leaf">
                            </div>
                            <div class="leaf-right"><img src="themes/TH1P/media/banner/app/leaf2.png" alt="chef leaf">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-background-element">
            <div class="ball"><img src="themes/TH1P/media/download/ball.png" data-parallax="" alt="chef ball"></div>
            <div class="triangle"><img src="themes/TH1P/media/banner/app/triangle.png" alt="chef ball"></div>
            <div class="dot-shape"><img src="themes/TH1P/media/banner/app/dot.png" alt="chef"></div>
            <div class="circle-bg"></div>
        </div>
    </section>
    <section id="service" class="featured-nine">
        <div class="container">
            <div class="section-title style-five text-center">
                <h3 class="sub-title wow pixFadeUp">{{$selected_language->data['website_pro_whatwedo'] ?? 'What We Do'}}</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">{{$selected_language->data['service'] ?? 'Service'}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="chef-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.3s">
                        <div class="chef-icon-box-icon"><img src="themes/TH1P/media/feature/61.png" alt=""></div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title">{{$selected_language->data['safety_first'] ?? 'Safety First'}}</h3>
                            <p>
                                {{$selected_language->data['safety_first_sub_title'] ?? 'Limiting the use of physical menus and promoting touchless QR Code menus reduces the risk of virus transmission, and keeps your customers and employees safe.'}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="chef-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.5s">
                        <div class="chef-icon-box-icon"><img src="themes/TH1P/media/feature/62.png" alt=""></div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title">{{$selected_language->data['easy_to_build_update'] ?? 'Easy to build & update'}}</h3>
                            <p>
                                {{$selected_language->data['easy_to_build_update_sub_title'] ?? 'Create contactless menu QR Codes under 3
                                minutes. Later, upload & save a new menu to the same QR Code.'}}
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="chef-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.7s">
                        <div class="chef-icon-box-icon"><img src="themes/TH1P/media/feature/63.png" alt=""></div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title">{{$selected_language->data['no_app_download_required'] ?? 'No App Download Required'}}</h3>
                            <p>
                                {{$selected_language->data['no_app_download_required_sub_title'] ?? 'Your diners can scan the QR Code using their
                                phone camera'}}<br>
                                <br><br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="app-tabs">
        <div class="container-wrap bg-color-one">
            <div class="container">
                <div id="pix-tabs" class="tabs-three">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="download-tab-content">
                                <div class="section-title style-five">
                                    <h3 class="sub-title wow fadeInUp">{{$selected_language->data['website_pro_whychooseus'] ?? 'Why Choose Us'}}</h3>
                                    <h2 class="title wow fadeInUp" data-wow-delay="0.3s">{{$selected_language->data['website_pro_gettotheheading'] ?? 'Get to the best outcome.'}}
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.5s">{{$selected_language->data['website_pro_gettothesubheading'] ?? 'Sample Text'}}</p>
                                </div>
                                <ul id="pix-tabs-nav" class="wow fadeInUp" data-wow-delay="0.7s">
                                    <li><a href="#feature_tab1"><i class="ei ei-icon_globe"></i> {{$selected_language->data['website_pro_why_tag1'] ?? 'Digitalize your store'}}</a></li>
                                    <li><a href="#feature_tab2"><i class="ei ei-icon_shield"></i> {{$selected_language->data['website_pro_why_tag2'] ?? 'Safer to use'}}</a></li>
                                    <li><a href="#feature_tab3"><i class="ei ei-icon_like"></i> {{$selected_language->data['website_pro_why_tag3'] ?? 'Easy to manage'}}</a></li>
                                    <li><a href="#feature_tab4"><i class="ei ei-icon_check"></i> {{$selected_language->data['website_pro_why_tag4'] ?? 'Covid Compliance'}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="tabs-content-wrapper">
                                <div id="pix-tabs-content" class="job-board-tabs-content wow fadeIn">
                                    <div id="feature_tab1" class="content">
                                        <div class="tab-image"><img src="themes/TH1P/media/tabs/8.jpg"
                                                                    alt="sasspik tab"></div>
                                    </div>
                                    <div id="feature_tab2" class="content">
                                        <div class="tab-image"><img src="themes/TH1P/media/tabs/9.jpg"
                                                                    alt="sasspik tab"></div>
                                    </div>
                                    <div id="feature_tab3" class="content">
                                        <div class="tab-image"><img src="themes/TH1P/media/tabs/10.jpg"
                                                                    alt="sasspik tab"></div>
                                    </div>
                                    <div id="feature_tab4" class="content">
                                        <div class="tab-image"><img src="themes/TH1P/media/tabs/11.jpg"
                                                                    alt="sasspik tab"></div>
                                    </div>
                                </div>
                                <div class="tab-bg-shape-wrapper">
                                    <div class="dot"><img src="themes/TH1P/media/tabs/dot.png" class="dot-shape"
                                                          alt="chef"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="545px" height="641px" style="opacity: 0.1">
                                        <defs>
                                            <linearGradient id="PSgrad_0" x1="86.603%" x2="0%" y1="0%" y2="50%">
                                                <stop offset="0%" stop-color="rgb(230,75,69)" stop-opacity="0.96"/>
                                                <stop offset="100%" stop-color="rgb(126,63,244)" stop-opacity="0.96"/>
                                                <stop offset="100%" stop-color="rgb(126,63,244)" stop-opacity="0.96"/>
                                            </linearGradient>
                                        </defs>
                                        <path fill-rule="evenodd" opacity="0.102" fill="rgb(126, 63, 244)"
                                              d="M1.000,160.999 C23.035,-96.001 800.875,-81.679 457.464,487.628 C425.619,540.421 352.186,601.676 289.000,627.999 C217.967,657.591 134.004,632.446 143.000,563.999 C171.000,350.964 -4.898,229.782 1.000,160.999 Z"/>
                                        <path fill="url(#PSgrad_0)"
                                              d="M1.000,160.999 C23.035,-96.001 800.875,-81.679 457.464,487.628 C425.619,540.421 352.186,601.676 289.000,627.999 C217.967,657.591 134.004,632.446 143.000,563.999 C171.000,350.964 -4.898,229.782 1.000,160.999 Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="app_image_content">
        <div class="container">
            <div class="app-image-content-wrapper-one">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="app-download-image"><img src="themes/TH1P/media/feature/app1.png"
                                                             class="wow fadeInDown"
                                                             alt="chef"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="image-content-three app-content-wrap pl-85">
                            <div class="section-title">
                                <h2 class="title wow fadeInUp">{{$selected_language->data['see_a_demo_menu'] ?? 'See a Demo online menu'}}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.3s">
                                    <br>
                                </p>
                                <ul class="list-items list-icon-arrow wow fadeInUp" data-wow-delay="0.4s">
                                    <li> {{$selected_language->data['see_a_demo_menu_point1'] ?? 'Use the phone camera or QR Application to scan the code.'}}</li>
                                    <li>{{$selected_language->data['see_a_demo_menu_point2'] ?? 'Scroll around the menu and make your order.'}}</li>
                                    <li>{{$selected_language->data['see_a_demo_menu_point3'] ?? 'Your order is instantly received, and it’s coming!'}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section-title text-center wow pixFade">
                    <h3 class="sub-title">{{$selected_language->data['website_pro_working_process'] ?? 'Working Process'}}</h3>
                    <h2 class="title">{{$selected_language->data['how_it_works_1'] ?? 'How It Works'}}</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="chef-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.3s">
                            <div class="chef-icon-box-icon text-center"><img src="themes/TH1P/media/feature/1.png"
                                                                             alt=""></div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title text-center"><a>{{$selected_language->data['register'] ?? 'Register'}}</a></h3>
                                <p class="text-center">{{$selected_language->data['register_footer_subtitle'] ?? 'Create Account to get started.'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="chef-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.5s">
                            <div class="chef-icon-box-icon text-center"><img src="themes/TH1P/media/feature/2.png"
                                                                             alt=""></div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title text-center"><a>{{$selected_language->data['create_menu'] ?? 'Create Menu'}}</a></h3>
                                <p class="text-center">{{$selected_language->data['create_menu_footer_subtitle'] ?? 'Create your menu visible for your customers.'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="chef-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.7s">
                            <div class="chef-icon-box-icon text-center"><img src="themes/TH1P/media/feature/3.png"
                                                                             alt=""></div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title text-center"><a>{{$selected_language->data['print_qr_code'] ?? 'Print QR Code'}}</a></h3>
                                <p class="text-center">{{$selected_language->data['print_qr_code_footer_subtitle'] ?? 'Put the printed tags on your tables.'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="chef-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.7s">
                            <div class="chef-icon-box-icon text-center"><img src="themes/TH1P/media/feature/4.png"
                                                                             alt=""></div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title text-center"><a href="#">{{$selected_language->data['receive_orders'] ?? 'Receive Orders'}}</a></h3>
                                <p class="text-center">{{$selected_language->data['receive_orders_footer_subtitle'] ?? 'When they order something, you get notified
                            instantly!'}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-two" style="margin-top: -70px;">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">{{$selected_language->data['website_pro_testimonial'] ?? 'Testimonial'}}</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">{{$selected_language->data['website_testimonial_head1'] ?? 'What our customers say'}}</h2>
            </div>
            <div id="testimonial-wrapper" class="wow pixFadeUp" data-wow-delay="0.4s">
                <div class="swiper-container" id="testimonial-two" data-speed="700" data-autoplay="5000"
                     data-perpage="2" data-space="50" data-breakpoints='{"991": {"slidesPerView": 1}}'>
                    <div class="swiper-wrapper">

                        @foreach($testimonial as $testimonials)
                        <div class="swiper-slide">
                            <div class="testimonial-two">
                                <div class="testi-content-inner">
                                    <div class="testimonial-bio">
                                        <div class="avatar"><img src="themes/TH1P/media/testimonial/1.jpg"
                                                                 alt="testimonial"></div>
                                        <div class="bio-info">
                                            <h3 class="name">{{$testimonials->name}}</h3><span class="job">{{$testimonials->designation}}</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>{{$testimonials->comment}}</p>
                                    </div>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="quote"><img src="themes/TH1P/media/testimonial/quote.png" alt="quote">
                                    </div>
                                </div>
                                <div class="shape-shadow"></div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="shape-shadow"></div>
                <div class="slider-nav wow pixFadeUp" data-wow-delay="0.3s">
                    <div id="slide-prev" class="swiper-button-prev"><i class="ei ei-arrow_left"></i></div>
                    <div id="slide-next" class="swiper-button-next"><i class="ei ei-arrow_right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <section class="download-two">
        <div class="container-wrap bg-color-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="download-feature-image-two"><img src="themes/TH1P/media/download/3.png" alt=""
                                                                     class="image-one wow pixFadeRight"> <img
                                src="themes/TH1P/media/download/4.png" alt="" class="image-two wow pixFadeLeft"></div>
                    </div>
                    <div class="col-lg-5 pix-order-one">
                        <div class="download-wrapper-two">
                            <h2 class="title wow pixFadeUp">{{$selected_language->data['website_pro_trail_heading'] ?? 'Join free for 7days'}}</h2>
                            {{$selected_language->data['website_pro_trail_description'] ?? 'Description text for Trail.'}}</p>
                            <div class="app-btn-wrapper"><a href="{{route('store_register')}}" class="app-btn-two wow flipInX"
                                                            data-wow-delay="0.5s"><i class="fa fa-user-plus"></i> <span
                                        class="btn-text"><span
                                            class="text-top">{{$selected_language->data['register'] ?? 'Register'}} Now</span> <span>For Free</span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-animate-element">
                <div class="leaf-top"><img src="themes/TH1P/media/download/leaf1.png" alt="chef leaf"></div>
                <div class="leaf-bottom"><img src="themes/TH1P/media/download/leaf2.png" alt="chef leaf"></div>
                <div class="ball"><img src="themes/TH1P/media/download/ball.png" alt="chef"></div>
                <div class="triangle"><img src="themes/TH1P/media/download/triangle.png" alt="chef"></div>
            </div>
        </div>
    </section>
    <section class="teams-four">
        <div class="container">
            <div class="section-title style-five">
                <h3 class="sub-title wow pixFadeUp">{{$selected_language->data['website_pro_our_clients'] ?? 'Our Clients'}}</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">{{$selected_language->data['website_pro_our_partners'] ?? 'Our Partners'}}</h2>
            </div>
            <div class="row">

{{--                start--}}

                @foreach($stores as $store)
                <div class="col-lg-6">
                    <div class="chef-icon-box-wrapper style-three wow pixFadeUp" data-wow-delay="0.5s">
                        <a href="{{route('view_store',['view_id'=>$store->view_id])}}">
                            <div class="chef-icon-box-icon"><img src="{{asset(($store->logo_url !=NULL) && ($store->logo_url != "NaN") ? $store->logo_url :'assets/images/store.jpg')}}" alt=""></div>
                        </a>
                        <div class="widget pixsass-icon-box-content">
                            <a href="{{route('view_store',['view_id'=>$store->view_id])}}"><h5>{{$store->store_name}}</h5></a>
                            <ul class="widget-contact-info">
                                <li><i class="ei ei-icon_pin_alt"></i><span style="font-size: 14px;">{{$store->address}}</span>
                                </li>
                                <li><i class="ei ei-icon_phone"></i><span
                                        style="font-size: 14px;">{{$store->phone}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach

{{--                end--}}



            </div>
            <div class="btn-container text-center mt-40"><a href="{{route('partner_stores')}}" class="btn-underline">{{$selected_language->data['website_pro_view_more'] ?? 'View More'}} <i
                        class="ei ei-arrow_right"></i></a></div>
        </div>
    </section>

    <footer id="footer" class="footer-app">
        <div class="container-wrap bg-footer-color">
            <div class="container">
                <div class="footer-inner">
                    <div class="row wow fadeInUp">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget footer-widget widget-about"><a href="#" class="footer-logo"><img
                                        src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/default_home/images/logo/logo.png')}} alt="chef"></a>
                                <p>{{$selected_language->data['website_pro_footer_subheading'] ?? 'Tosser amongst jolly good do one no biggie hunky.'}}</p>
{{--                                <h4 class="footer-title">Social</h4>--}}
{{--                                <ul class="social-share-link">--}}
{{--                                    <li><a href="#" class="share_facebook"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                    <li><a href="#" class="share_twitter"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                    <li><a href="#" class="share_pinterest"><i class="fab fa-pinterest-p"></i></a></li>--}}
{{--                                    <li><a href="#" class="share_linkedin"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget footer-widget widget-contact">
                                <h3 class="widget-title">{{$account_info !=NULL ? $account_info->application_name:'Chef Digital Menu'}}</h3>
                                <ul class="widget-contact-info">
                                    <li><i class="ei ei-icon_pin_alt"></i>{{$account_info !=NULL ? $account_info->Address:'AAA BBBB CCCC'}}
                                    </li>
                                    <li><i class="ei ei-icon_phone"></i>{{$account_info !=NULL ? $account_info->contact_no:'81297*****'}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widget footer-widget">
                                <h3 class="widget-title">{{$selected_language->data['website_pro_footer_quicklinks'] ?? 'Quick Links'}}</h3>
                                <ul class="footer-menu">
                                    <li><a href="{{route('home')}}">{{$selected_language->data['home'] ?? 'Home'}}</a></li>
                                    <li><a href="#service">{{$selected_language->data['service'] ?? 'Service'}}</a></li>
                                    <li><a href="{{route('store_pricing')}}">{{$selected_language->data['pricing'] ?? 'Pricing'}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widget footer-widget">
                                <h3 class="widget-title">{{$account_info !=NULL ? $account_info->application_name:'CHEF MENU'}}</h3>
                                <ul class="footer-menu">
                                    <li><a href="{{route('about')}}">{{$selected_language->data['about_us'] ?? 'About Us'}}</a></li>
                                    <li><a href="{{route('termsandcondition')}}">{{$selected_language->data['termsandcondition'] ?? 'Terms and Condition'}}</a></li>
                                    <li><a href="{{route('privacy')}}">{{$selected_language->data['privacy_policy'] ?? 'Privacy Policy'}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-info">
                    <div class="copyright text-center">
                        <p> {!! $selected_language->data['crafted_with_love'] ?? 'Crafted with <i class="fa fa-heart text-danger"></i> by' !!}
                            {{$account_info !=NULL ? $account_info->application_name:'CHEF MENU'}}.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
