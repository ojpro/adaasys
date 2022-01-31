<div id="main_content">
    <header class="site-header header-eight header_trans-fixed" data-top="992">
        <div class="container">
            <div class="header-inner">
                <div class="toggle-menu"><span class="bar"></span> <span class="bar"></span> <span class="bar"></span></div>
                <div class="site-mobile-logo"><a href="{{route('home')}}" class="logo"><img src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/TH1P/assets/img/logo-three.png')}} alt="site logo" class="main-logo"> <img src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/TH1P/assets/img/logo-three.png')}} alt="site logo" class="sticky-logo"></a></div>
                <nav class="site-nav">
                    <div class="close-menu"><span>Close</span> <i class="ei ei-icon_close"></i></div>
                    <div class="site-logo"><a href="{{route('home')}}" class="logo"><img src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/TH1P/assets/img/logo-three.png')}} alt="site logo" class="main-logo"> <img src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/TH1P/assets/img/logo-three.png')}} alt="site logo" class="sticky-logo"></a></div>
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
                                <div class="dropdown" style="margin-left: 33px;">
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
    <section class="page-banner">
        <div class="container">
            <div class="page-title-wrapper">
                <h1 class="page-title">{{$selected_language->data['pricing'] ?? 'Pricing'}}</h1>
            </div>
        </div><svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
            <path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
        </svg>
        <ul class="animate-ball">
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
        </ul>
    </section>
    <section class="pricing-single-one">
        <div class="container">
            <div class="section-title text-center">

                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">{{$selected_language->data['pricing_head_title'] ?? 'Choose The Best Plan For Your Business'}}</h2>
            </div>

            <div class="row advanced-pricing-table no-gutters wow pixFadeUp" data-wow-delay="0.5s">

                @foreach($subscription as $data)
                <div class="col-lg-4">
                    <div class="pricing-table br-left">
                        <div class="pricing-header pricing-amount">
                            <div class="monthly_price">
                                <h2 class="price">{{$account_info != NULL ?$account_info->currency_symbol:"₹"}}{{preg_replace('~\.0+$~','',$data->price)}}</h2>
                            </div>
                            <h3 class="price-title">{{$data->name}}</h3>
                            <p> {{$data->description}}</p>
                        </div>
                        <div class="action text-center"><a href="{{route('store_register')}}" class="pix-btn btn-outline">{{$selected_language->data['pricing_start_button'] ?? 'Start'}}</a></div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </section>

    <section class="download-two">
        <div class="container-wrap bg-color-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="download-feature-image-two"><img src={{asset('themes/TH1P/media/download/3.png')}} alt="" class="image-one wow pixFadeRight"> <img src={{asset('themes/TH1P/media/download/4.png')}} alt="" class="image-two wow pixFadeLeft"></div>
                    </div>
                    <div class="col-lg-5 pix-order-one">
                        <div class="download-wrapper-two">
                            <h2 class="title wow pixFadeUp">{{$selected_language->data['website_pro_trail_heading'] ?? 'Join free for 7days'}}</h2>
                            <p class="wow pixFadeUp" data-wow-delay="0.3s">
                                {{$selected_language->data['website_pro_trail_description'] ?? 'Description text for Trail.'}}
                            </p>
                            <div class="app-btn-wrapper"><a href="#" class="app-btn-two wow flipInX" data-wow-delay="0.5s"><i class="fa fa-user-plus"></i> <span class="btn-text"><span class="text-top">Register Now</span> <span>For Free</span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-animate-element">
                <div class="leaf-top"><img src={{asset('themes/TH1P/media/download/leaf1.png')}} alt="chef leaf"></div>
                <div class="leaf-bottom"><img src={{asset('themes/TH1P/media/download/leaf2.png')}} alt="chef leaf"></div>
                <div class="ball"><img src={{asset('themes/TH1P/media/download/ball.png')}} alt="chef"></div>
                <div class="triangle"><img src={{asset('themes/TH1P/media/download/triangle.png')}} alt="chef"></div>
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
                                            <div class="avatar"><img src={{asset('themes/TH1P/media/testimonial/1.jpg')}}
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
                                        <div class="quote"><img src={{asset('themes/TH1P/media/testimonial/quote.png')}} alt="quote">
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

    <footer id="footer" class="footer-app">
        <div class="container-wrap bg-footer-color">
            <div class="container">
                <div class="footer-inner">
                    <div class="row wow fadeInUp">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget footer-widget widget-about"><a href="#" class="footer-logo"><img
                                        src={{asset($account_info !=NULL ? $account_info->application_logo:'themes/default_home/images/logo/logo.png')}} alt="chef"></a>
                                <p>{{$selected_language->data['website_pro_footer_subheading'] ?? 'Tosser amongst jolly good do one no biggie hunky.'}}</p>
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
