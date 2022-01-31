<!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">

      <title>{{$account_info != NULL ?$account_info->application_name:"Chef Digital Menu"}}</title>

      <link rel="icon" type="image/png" href="{{asset('themes/default/images/all-img/fav.png')}}">
      <meta name="msapplication-TileColor" content="#e33745">
      <meta name="theme-color" content="#e33745">
      <link rel="stylesheet" href="{{asset('themes/TH1P/dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('themes/TH1P/dependencies/fontawesome/css/all.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('themes/TH1P/dependencies/swiper/css/swiper.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('themes/TH1P/dependencies/wow/css/animate.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('themes/TH1P/dependencies/components-elegant-icons/css/elegant-icons.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('themes/TH1P/dependencies/simple-line-icons/css/simple-line-icons.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('themes/TH1P/assets/css/app.css')}}" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

      <style>
          .form-control1 {
              display: block;
              width: 100%;
              padding: 0.375rem 0.75rem;
              font-size: 1rem;
              line-height: 1.4;
              color: #ffffff;
              background-color: #E33745;
              background-clip: padding-box;
              border: 0 solid #ced4da;
              border-radius: 0.5rem;
              transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          }
      </style>


  </head>

  <body id="home-version-6" class="home-version-6" data-style="default"><a href="#main_content" data-type="section-switch" class="return-to-top"><i class="fa fa-chevron-up"></i></a>
  <div class="page-loader">
      <div class="loader">
          <div class="blobs">
              <div class="blob-center"></div>
              <div class="blob"></div>
              <div class="blob"></div>
              <div class="blob"></div>
              <div class="blob"></div>
              <div class="blob"></div>
              <div class="blob"></div>
          </div><svg xmlns="http://www.w3.org/2000/svg" version="1.1">
              <defs>
                  <filter id="goo">
                      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                      <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                      <feBlend in="SourceGraphic" in2="goo" />
                  </filter>
              </defs>
          </svg>
      </div>
  </div>
