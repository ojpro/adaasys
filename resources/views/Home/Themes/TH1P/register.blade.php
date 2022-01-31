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
    <section class="signin signup">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="signin-from-wrapper" style="margin-top: -40px;">
                        <div class="signin-from-inner">
                            <h2 class="title">Signup Now!</h2><br>
                            <form role="form" method="POST" action="{{route('register_new_store')}}" enctype="multipart/form-data">
                                @if(session()->has("MSG"))
                                    <div class="alert alert-{{session()->get("TYPE")}}">
                                        <strong> <a>{{session()->get("MSG")}}</a></strong>
                                    </div>
                                @endif
                                @if($errors->any()) @include('admin.admin_layout.form_error') @endif
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text"  required value="{{old('store_name')}}" name="store_name" placeholder="Store Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" required value="{{old('phone')}}" name="phone" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="email" required  name="email" value="{{old('email')}}" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" required name="password" value="{{old('password')}}" placeholder="Password">
                                    </div>
                                </div>
                                    <select name="plan" required class="form-control">
                                        @foreach($subscription as $data)
                                            <option value="{{$data->id}}">{{$data->name}} - {{$data->days}} - Days</option>
                                        @endforeach
                                    </select>




                                <div class="forget-link">
                                    <div class="condition"><input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1" required> <label for="styled-checkbox-1"></label> <span>I agree with the <a href="{{route('privacy')}}">{{$selected_language->data['privacy_policy'] ?? 'Privacy Policy'}}</a></span></div>
                                </div>

                                <button type="submit" class="banner-btn pix-btn btn-four btn-round">Sign Up</button>
                            </form>
                        </div>
                        <ul class="animate-ball">
                            <li class="ball"></li>
                            <li class="ball"></li>
                            <li class="ball"></li>
                            <li class="ball"></li>
                            <li class="ball"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="signin-banner signup-banner">
            <div class="animate-image-inner">
                <div class="image-one"><img src={{asset('themes/TH1P/media/feature/lock.png')}} alt="" class="wow pixFadeLeft"></div>

            </div>
        </div>
    </section>




</div>
