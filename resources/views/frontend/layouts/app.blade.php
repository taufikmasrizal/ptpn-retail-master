<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  

  <!-- Primary Meta Tags -->
  <meta name="title" content="@yield('title')">
  <meta name="keywords" content="@yield('keywords')">
  <meta name="description" content="@yield('description')">
  <meta name="robot" content="index, follow">
  <link rel="canonical" href="{{url()->current()}}"/>

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('title')">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:image" content="@yield('image')">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta property="twitter:title" content="@yield('title')">
  <meta property="twitter:description" content="@yield('description')">
  <meta property="twitter:image" content="@yield('image')">

  <title>@yield('title')</title>

  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/img/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/img/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{ asset('frontend/img/favicon/site.webmanifest')}}">
  <link rel="mask-icon" href="{{ asset('frontend/img/favicon/safari-pinned-tab.svg" color="#623c21')}}">
  <meta name="msapplication-TileColor" content="#623c21">
  <meta name="msapplication-TileImage" content="{{ asset('frontend/img/favicon/mstile-144x144.png') }}">
  <meta name="theme-color" content="#623c21">

  {{-- style --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}"/>
  <link rel="stylesheet" href="{{ asset('frontend/vendor/OwlCarousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/OwlCarousel/dist/assets/owl.theme.default.min.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/Magnific-Popup/css/magnific-popup.css') }}" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  @yield('css')

</head>
<body>

  <div class="preloader">
    <div class="text-center">
      <img src="{{ asset('frontend/img/object/loading.svg') }}" class="w-loading img-fluid" />
      <img src="{{ asset('frontend/img/logo/nusakita-logo.png') }}" class="w-25" />
    </div>
  </div>

  {{-- navbar desktop --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top desktop py-2">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('frontend/img/logo/nusakita-logo.png') }}" alt="nusakita-logo" width="132px" class="img-fluid">
      </a>
      <ul class="navbar-nav">
        <li class="nav-item dropdown @if(Request::is('product')) active @endif">
          <a href="#" class="nav-link @if(Request::is('product')) active @endif" aria-current="page" id="dropdown-product" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <div class="nav-bottomline"></div>
          <ul class="dropdown-menu dropdown-menu-product" aria-labelledby="dropdown-product">
            <div class="row p-3">
              <div class="col-md-12">
                <span class="title-nav-dropdown">Produk Nusakita</span>
              </div>
              @foreach ($general_products as $general_product)
              <div class="col-md-3">
                <a href="{{ url('product/'. $general_product['slug']) }}" class="btn p-0">
                  <img src="{{ asset('frontend/img/product/'. $general_product['image_product']) }}" class="img-fluid"/>
                  <h6 class="text-center text-brown nav-product-title mb-2">
                    Nusakita {{ $general_product[custom_translate_db('title', $locale)] }}
                  </h6>
                </a>
              </div>
              @endforeach
            </div>
            <div class="row p-3 py-3">
              <div class="col-md-12 border-top pt-4 pb-2">
                <span class="title-nav-dropdown">Produk Kami Lainnya</span>
              </div>
              @foreach($general_categories_products as $general_categories_product)
              <div class="col-md-3">
                <h6 class="title-nav-other-product">{{ $general_categories_product[custom_translate_db('title', $locale)] }}</h6>
                <ul class="other-product">
                  @foreach ($general_categories_product->product as $general_other_product)
                  <li>
                    <a href="{{ url($general_other_product['link']) }}">{{ $general_other_product[custom_translate_db('title', $locale)] }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
              @endforeach
            </div>
          </ul>
        </li>
        <li class="nav-item @if(Request::is('about')) active @endif">
          <a href="{{ url('/about') }}" class="nav-link @if(Request::is('about')) active @endif">
            About
          </a>
          <div class="nav-bottomline"></div>
        </li>
        <li class="nav-item @if(Request::is('contact')) active @endif">
          <a href="{{ url('/contact') }}" class="nav-link @if(Request::is('contact')) active @endif">
            Contact
          </a>
          <div class="nav-bottomline"></div>
        </li>
        <li class="nav-item @if(Request::is('article')) active @endif">
          <a href="{{ url('/article') }}" class="nav-link @if(Request::is('article')) active @endif">
            Article
          </a>
          <div class="nav-bottomline"></div>
        </li>
        <li class="nav-item">
          <a href="http://dewanstudio.biz/SIT/ptpn_commodity" target="_blank" class="nav-link">
            Commodity
          </a>
          <div class="nav-bottomline"></div>
        </li>
      </ul>
      <div class="d-flex align-items-center">
        <div class="dropdown">
          <button class="btn text-green" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('menu.choose_lang') }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ route('lang', 'en') }}">English</a></li>
            <li><a class="dropdown-item" href="{{ route('lang', 'idn') }}">Bahasa Indonesia</a></li>
          </ul>
        </div>
        <a href="#search" class="btn" id="btn-search">
          <img src="{{ asset('frontend/img/icon/search.svg') }}">
        </a>
        <button class="btn" id="btn-search-close" style="display: none">
          <img src="{{ asset('frontend/img/icon/close.svg') }}">
        </button>
      </div>
    </div>
  </nav>
  {{-- navbar desktop --}}

  {{-- navbar mobile --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mobile py-2">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item w-100">
          <a href="#" class="nav-link mb-0" id="category-mobile">
            <img src="{{ asset('frontend/img/icon/category.svg') }}" id="category-before-icon" width="40px" class="img-category-mobile"/>
            <img src="{{ asset('frontend/img/icon/close.svg') }}" id="category-after-icon" width="40px" class="img-category-mobile d-none"/>
          </a>
        </li>
      </ul>
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('frontend/img/logo/nusakita-logo.png') }}" alt="nusakita-logo" width="132px" class="img-fluid">
      </a>
      <div class="d-flex align-items-center">
        <div class="mobile-search">
          <a href="#search" class="btn" id="btn-search-mobile">
            <img src="{{ asset('frontend/img/icon/search.svg') }}">
          </a>
          <button class="btn" id="btn-search-close-mobile" style="display: none">
            <img src="{{ asset('frontend/img/icon/close.svg') }}">
          </button>
        </div>
        <div id="menu" class="hamburger-show">
          <ul class="hamburger-menu">
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  {{-- navbar mobile --}}

  <div class="navbar-list-hover" style="display: none"></div>
  <div class="navbar-list-hover-2 d-none"></div>

  {{-- search --}}
  <div id="search" style="display: none">
    <form>
      <input type="search" value="" placeholder="What you want to find" />
      <button type="submit" class="btn btn-yellow btn-lg">Search</button>
    </form>
  </div>
  {{-- search --}}

  {{-- hamburger menu --}}
  <div id="myNav" class="overlay d-none">
    <div class="overlay-content">
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a>
      <a href="{{ url('/contact') }}">Contact</a>
      <a href="{{ url('/article') }}">Article</a>
      <a href="http://dewanstudio.biz/SIT/ptpn_commodity" target="_blank">Commodity</a>
    </div>
  </div>
  {{-- hamburger menu --}}

  {{-- category mobile --}}
  <div id="categoryNav" class="overlay overlay-category py-5 d-none">
    <div class="overlay-content">
      <div id="navbar-product-1">
        <div class="row">
          <div class="col-12 mb-4">
            <span class="title-nav-dropdown">Produk Nusakita</span>
          </div>
          <div class="col-3">
            <a href="{{ url('product/minyak') }}" class="btn p-0">
              <img src="{{ asset('frontend/img/product/minyak.png') }}" class="img-fluid"/>
              <h6 class="text-center text-brown nav-product-title mb-2">
                Nusakita Refined Cooking Oil
              </h6>
            </a>
          </div>
          <div class="col-3">
            <a href="{{ url('product/gula') }}" class="btn p-0">
              <img src="{{ asset('frontend/img/product/gula.png') }}" class="img-fluid"/>
              <h6 class="text-center text-brown nav-product-title mb-2">
                Nusakita Pure Cane Sugar
              </h6>
            </a>
          </div>
          <div class="col-3">
            <a href="{{ url('product/kopi') }}" class="btn p-0">
              <img src="{{ asset('frontend/img/product/kopi.png') }}" class="img-fluid"/>
              <h6 class="text-center text-brown nav-product-title mb-2">
                Nusakita Java Mocha Blend
              </h6>
            </a>
          </div>
          <div class="col-3">
            <a href="{{ url('product/teh') }}" class="btn p-0">
              <img src="{{ asset('frontend/img/product/teh.png') }}" class="img-fluid"/>
              <h6 class="text-center text-brown nav-product-title mb-2">
                Nusakita Premium Black Tea
              </h6>
            </a>
          </div>
          <div class="col-md-12 mt-5">
            <a href="javascript:void(0)" id="btn-category-mobile-read-more" class="btn-link">Read More <img src="{{ asset('frontend/img/icon/arrow-link.svg') }}" class="mx-3"></a>
          </div>
        </div>
      </div>
      <div id="navbar-product-2" class="d-none">
        <div class="row">
          <div class="col-md-12">
            <div class="d-flex align-items-center mb-4">
              <a href="javascript:void(0)" id="back-1"><img src="{{ asset('frontend/img/icon/arrow-link.svg') }}" class="mx-3 back-rotate"></a>
              <p class="px-2 mb-0 font-weight-bold">Other Product Category</p>
            </div>
            <a href="javascript:void(0)" class="navbar-product-2-link category-other-product px-5">
              Cooking Oil
            </a>
            <a href="javascript:void(0)" class="navbar-product-2-link category-other-product px-5">
              Sugar
            </a>
            <a href="javascript:void(0)" class="navbar-product-2-link category-other-product px-5">
              Coffee
            </a>
            <a href="javascript:void(0)" class="navbar-product-2-link category-other-product px-5">
              Tea
            </a>
          </div>
        </div>
      </div>
      <div id="navbar-product-3" class="d-none">
        <div class="row">
          <div class="col-md-12">
            <div class="d-flex align-items-center mb-4">
              <a href="javascript:void(0)" id="back-2"><img src="{{ asset('frontend/img/icon/arrow-link.svg') }}" class="mx-3 back-rotate"></a>
              <p class="px-2 mb-0 font-weight-bold">Coffee</p>
            </div>
            <a href="javascript:void(0)" class="navbar-product-2-link px-5">
              Cooking Oil
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- category mobile --}}

  {{-- content start --}}
  <div class="padding-all">
    @yield('content')
  </div>
  {{-- content end --}}

  {{-- footer desktop --}}
  <footer class="bg-brown desktop">
    <div class="container">
      <div class="row">
        <div class="col-md-3 bg-white footer-rounded p-5">
          <a href="{{ url('/') }}">
            <img src="{{ asset('frontend/img/logo/nusakita-logo.png') }}" alt="nusakita-logo" class="img-fluid">
          </a>
          <p class="mt-4 mb-0">Supported By</p>
          <div class="d-flex align-items-center">
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/logo/ptpn-logo.png') }}" width="50px" alt="nusakita-logo">
            </a>
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/logo/ptinl-logo.png') }}" width="50px" alt="nusakita-logo">
            </a>
          </div>
          <p class="py-3">&copy; nusakita 2021</p>
        </div>
        <div class="col-md-3 pt-4 px-5">
          <h5 class="text-white title-footer">
            Product Categories
          </h5>
          <ul class="list-footer">
          @foreach($general_products as $general_product)
            <li>
              <a href="{{ route('product', $general_product->slug) }}" class="text-white">{{ $general_product[custom_translate_db('title', $locale)] }}</a>
            </li>
          @endforeach
          </ul>
        </div>
        <div class="col-md-3 pt-4 px-4">
          <h5 class="text-white title-footer">
            Menu
          </h5>
          <ul class="list-footer">
          @foreach($footer_menus as $footer_menu)
            <li>
              <a href="{{ url($footer_menu->link) }}" class="text-white">{{ $footer_menu[custom_translate_db('title', $locale)] }}</a>
            </li>
          @endforeach
          </ul>
        </div>
        <div class="col-md-3 pt-4 footer-address">
          <p class="text-white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="d-flex align-items-center mb-2">
            <img src="{{ asset('frontend/img/icon/email.svg') }}"/>
            <span class="px-2 text-white">admin@mail.com</span>
          </div>
          <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('frontend/img/icon/phone.svg') }}"/>
            <span class="px-2 text-white">0899 9999 9999</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/icon/facebook-footer.svg') }}"/>
            </a>
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/icon/twitter-footer.svg') }}"/>
            </a>
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/icon/youtube-footer.svg') }}"/>
            </a>
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/icon/linked-in-footer.svg') }}"/>
            </a>
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/icon/instagram-footer.svg') }}"/>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  {{-- footer desktop --}}

  {{-- footer mobile --}}
  <footer class="bg-brown mobile">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-12 text-center my-5">
          <img src="{{ asset('frontend/img/logo/nusakita-white.svg') }}" class="w-50"/>
        </div>
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Product Categories
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="list-footer">
                    @foreach($general_products as $general_product)
                    <li>
                      <a href="{{ route('product', $general_product->slug) }}" class="text-white">{{ $general_product[custom_translate_db('title', $locale)] }}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Menu
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="list-footer">
                  @foreach($footer_menus as $footer_menu)
                    <li>
                      <a href="{{ url($footer_menu->link) }}" class="text-white">{{ $footer_menu[custom_translate_db('title', $locale)] }}</a>
                    </li>
                  @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-address px-5 mt-5 text-center">
            <div class="row">
              <div class="col-md-12">
                <p class="text-white mb-4">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
            <div class="col-md-12">
               <div class="d-flex justify-content-center align-items-center mb-4">
                <div class="d-flex justify-content-center align-items-center">
                  <img src="{{ asset('frontend/img/icon/email.svg') }}"/>
                  <span class="px-2 text-white">admin@mail.com</span>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                  <img src="{{ asset('frontend/img/icon/phone.svg') }}"/>
                  <span class="px-2 text-white">0899 9999 9999</span>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="d-flex justify-content-center align-items-center mb-4">
                <a href="#" class="btn">
                  <img src="{{ asset('frontend/img/icon/facebook-footer.svg') }}"/>
                </a>
                <a href="#" class="btn">
                  <img src="{{ asset('frontend/img/icon/twitter-footer.svg') }}"/>
                </a>
                <a href="#" class="btn">
                  <img src="{{ asset('frontend/img/icon/youtube-footer.svg') }}"/>
                </a>
                <a href="#" class="btn">
                  <img src="{{ asset('frontend/img/icon/linked-in-footer.svg') }}"/>
                </a>
                <a href="#" class="btn">
                  <img src="{{ asset('frontend/img/icon/instagram-footer.svg') }}"/>
                </a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="py-4">
                <p class="text-white">
                  &copy; nusakita 2021
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  {{-- footer mobile --}}

  {{-- javascript --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend/vendor/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js" integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ==" crossorigin="anonymous"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
  <script src="{{ asset('frontend/vendor/Magnific-Popup/js/jquery.magnific-popup.js') }}"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
  <script src="{{ asset('frontend/js/app.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      once: 'true'
    });
  </script>
  @yield('js')
</body>
</html>
