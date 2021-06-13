@extends('frontend/layouts/app')
@section('title','Nusakita - Home')
@section('keyword','cooking oil, sugar, coffee, tea, ptpn')
@section('description','Description')
@section('image', asset('frontend/img/meta/nusakita.png'))

@section('content')
<section id="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 px-0">
        <div class="swiper-container mySwiper">
          <div class="swiper-wrapper">
            @foreach ($home_banners as $home_banner)
            <div class="swiper-slide">
              <img src="{{ asset('frontend/img/banner/'. $home_banner->image_banner   ) }}" class="frame"/>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<section id="intro" class="bg-intro">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-center align-items-center screen-intro">
          <div class="text-center w-100">
            <img src="{{ asset('frontend/img/logo/'. $home_profile_video->image_logo) }}" data-aos="zoom-in-up"/><br>
            <div class="d-flex justify-content-center mt-4 title" data-aos="zoom-in-up">
              {!! $home_profile_video[custom_translate_db('title', $locale)] !!}
            </div>
            <div class="text-center mt-4 p-text-intro" data-aos="zoom-in-up">
              <p>
                {!! $home_profile_video[custom_translate_db('content', $locale)] !!}
              </p>
            </div>
            <div class="d-flex justify-content-center mt-5" data-aos="zoom-in-up">
              <a href="javascript:void(0)" id="headerVideoLink" class="btn btn-brown d-flex popup-video" data-video="{{ $home_profile_video->link }}">
                <span class="mx-2">Watch Video</span>
                <img src="{{ asset('frontend/img/icon/play.svg') }}"/>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="product">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="d-flex justify-content-center mt-4 title">
          <img src="{{ asset('frontend/img/icon/title-icon-2.svg') }}"/>
          <h2 class="px-3 mb-0"><span>Our</span> Product</h2>
        </div>
        <div class="owl-carousel" id="carousel-product">
        @foreach ($general_products as $row => $general_product)
          <div>
            <div class="card card-home-product {{ ($row == 0)? 'active' : '' }} p-3 pb-5" id="product-{{ $general_product['id'] }}">
              <div class="card-body-2"></div>
              <div class="card-body">
                <img src="{{ asset('frontend/img/product/'.$general_product['image_product']) }}">
                <h4>Nusakita {{ $general_product[custom_translate_db('title', $locale)] }}</h4>
                <a href="#product-show" data-id="{{ $general_product['id'] }}"  class="btn btn-block btn-yellow mt-4 w-100 btn-preview-product btn-show-product">Preview Product</a>
              </div>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </div>
  </div>
</section>
<section id="product-show" class="pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex position-relative" data-aos="fade-in" data-aos-delay="500">
        <div class="justify-content-center align-self-center">
          <div id="img-product-show">
            <img src="{{ asset('frontend/img/product/'. $general_products[0]->image_product) }}" class="img-fluid">
          </div>
          <div id="bg-img-product-show">
            <img src="{{ asset('frontend/img/object/product-'.$general_products[0]->theme_color.'.svg') }}" class="position-absolute img-product img-fluid"/>
          </div>
        </div>
      </div>
      <div class="col-md-6 px-5 mt-5" data-aos="fade-right" data-aos-delay="800">
        <div class="justify-content-center align-self-center">
          <h2 class="mb-4" id="product-show-title">
            Nusakita  {{ $general_products[0][custom_translate_db('title', $locale)] }}
          </h2>
          <p class="content_product">
            {{ $general_products[0][custom_translate_db('content', $locale)] }}
          </p>
          <div class="row my-5">
            <div class="col my-2">
              <div class="d-flex align-items-center">
                <img src="{{ asset('frontend/img/icon/murah.svg') }}"/>
                <h6 class="px-3">Murah</h6>
              </div>
            </div>
            <div class="col my-2">
              <div class="d-flex align-items-center">
                <img src="{{ asset('frontend/img/icon/premium.svg') }}"/>
                <h6 class="px-3">Premium</h6>
              </div>
            </div>
            <div class="col my-2">
              <div class="d-flex align-items-center">
                <img src="{{ asset('frontend/img/icon/berkualitas.svg') }}"/>
                <h6 class="px-3">Berkualitas</h6>
              </div>
            </div>
          </div>
          <p>Dapatkan produk kami di</p>
          <div class="row home_available">
            <div class="col my-2">
              <a href="#" class="mr-4">
                <img src="{{ asset('frontend/img/icon/tokopedia.svg') }}"/>
              </a>
            </div>
            <div class="col my-2">
              <a href="#" class="mr-4">
                <img src="{{ asset('frontend/img/icon/shopee.svg') }}"/>
              </a>
            </div>
            <div class="col my-2">
              <a href="#" class="mr-4">
                <img src="{{ asset('frontend/img/icon/bukalapak.svg') }}"/>
              </a>
            </div>
          </div>
          <a href="#" class="btn btn-green btn-lg my-5 detail_button_product">
            Detail
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-7 d-flex position-relative">
        <div class="justify-content-center align-self-center">
          <img src="{{ asset('frontend/img/home/img-content-1.png') }}" class="img-fluid img-content-main w-75">
          <img src="{{ asset('frontend/img/home/img-content-2.png') }}" class="img-fluid img-content-1 w-25 rellax desktop" data-rellax-speed="1">
          <img src="{{ asset('frontend/img/home/img-content-3.png') }}" class="img-fluid img-content-2 w-25 rellax desktop" data-rellax-speed="-1">
        </div>
      </div>
      <div class="col-md-5 d-flex px-3">
        <div class="justify-content-start align-self-center title" data-aos="fade-right">
            <h2 class="mb-0 mt-3 text-green text-start">
                {!! $home_quality_product[custom_translate_db('title', $locale)] !!}
            </h2>
            <p class="my-4">
                {!! $home_quality_product[custom_translate_db('content', $locale)] !!}
            </p>
          <a href="{{ url($home_quality_product->link) }}" class="btn-link">Read More <img src="{{ asset('frontend/img/icon/arrow-link.svg') }}" class="mx-3"></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="promosi">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5">
        <div class="d-flex justify-content-center mt-4 title">
          <img src="{{ asset('frontend/img/icon/title-icon-2.svg') }}"/>
          <h2 class="px-3 mb-0">Promosi</h2>
        </div>
      </div>
      <div class="col-md-6">
        <a href="{{ url($promotion_1->link) }}" data-aos="fade-in">
          <img src="{{ asset('frontend/img/home/'. $promotion_1->image_background ) }}" class="img-fluid img-promosi"/>
        </a>
      </div>
      <div class="col-md-6">
        <a href="{{ url($promotion_2->link) }}" data-aos="fade-in" class="py-5">
          <img src="{{ asset('frontend/img/home/'. $promotion_2->image_background) }}" class="img-fluid img-promosi"/>
        </a>
        <a href="{{ url($promotion_3->link) }}" data-aos="fade-in" class="py-5">
          <img src="{{ asset('frontend/img/home/'. $promotion_3->image_background) }}" class="img-fluid img-promosi"/>
        </a>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-5 desktop">
    <div class="row">
      <div class="col-md-6 d-flex p-0">
        <div class="justify-content-start align-self-center">
          <img src="{{ asset('frontend/img/home/img-location.png') }}" class="img-fluid"/>
        </div>
      </div>
       <div class="col-md-5 d-flex px-5">
        <div class="justify-content-center align-self-center">
          <img src="{{ asset('frontend/img/home/map.svg') }}" class="img-fluid"/><br/>
          <img src="{{ asset('frontend/img/logo/nusakita-logo.png') }}" class="mt-5 mb-3" width="200px">
          <h6>
            Produk Asli Indonesia  Dari Sabang<br/>
            sampai Merauke
          </h6>
          <button class="btn btn-location" data-bs-toggle="modal" data-bs-target="#modal-location">Cari Lokasi</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-center my-4 title">

        </div>
      </div>
      <div class="col-md-12 px-0">
        <div class="owl-carousel" id="carousel-video">
            @foreach ($home_our_videos as $home_our_video)
            <a href="javascript:void(0)" class="text-center popup-video" data-video="https://www.youtube.com/watch?v=8H1Eqf7SInQ">
                <img src="{{ asset('frontend/img/home/'. $home_our_video->image_thumbnail) }}" class="img-fluid"/>
                <p class="mt-2 text-video px-2">
                    {!! $home_our_video[custom_translate_db('content', $locale)] !!}
                </p>
            </a>
            @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5 desktop">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-shop bg-soft-yellow border-0">
          <div class="card-body p-5 position-relative">
            <div class="row">
              <div class="col-md-5">
                <h2 class="mb-3 text-green text-start">
                    {{ $home_shop[custom_translate_db('title', $locale)] }}
                </h2>
                <p>
                    {{ $home_shop[custom_translate_db('content', $locale)] }}
                </p>
                <div class="d-flex align-items-center mt-4">
                    @foreach ($home_availables as $home_available)
                    <a href="{{ $home_available['link'] }}" class="btn mr-3">
                        <img src="{{ asset('frontend/img/logo/'. $home_available['image1']) }}" class="img-fluid"/>
                    </a>
                    @endforeach
                </div>
              </div>
              <div class="col-md-7">
                <img src="{{ asset('frontend/img/home/'. $home_shop->image_background) }}" class="img-shop"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 p-0">
      <img src="{{ asset('frontend/img/footer/footer-image.svg') }}" class="img-fluid bg-footer-image w-100">
    </div>
  </div>
</div>

{{-- pop up cari lokasi --}}
<div class="modal fade" id="modal-location" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLabel">Contact Location</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table id="data-location" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>Location</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-4">
                <h6 class="text-green mb-0">DKI Jakarta</h6>
                <p class="mb-0">
                  Jl.Pasar Minggu Raya no.7 Pasar Minggu Jakarta Selatan
                </p>
              </td>
            </tr>
            <tr>
              <td class="py-4">
                <h6 class="text-green mb-0">Jawa Barat</h6>
                <p class="mb-0">
                  Jl Pemuda No.9 Bandung Jawa Barat
                </p>
              </td>
            </tr>
            <tr>
              <td class="py-4">
                <h6 class="text-green mb-0">Jawa Tengah</h6>
                <p class="mb-0">
                  Jl Diponegoro No.24 Semarang Jaea Tengah
                </p>
              </td>
            </tr>
            <tr>
              <td class="py-4">
                <h6 class="text-green mb-0">Jawa Timur</h6>
                <p class="mb-0">
                  Jl Melon No.18 Surabaya Jawa Timurs
                </p>
              </td>
            </tr>
            <tr>
              <td class="py-4">
                <h6 class="text-green mb-0">DKI Jakarta</h6>
                <p class="mb-0">
                  Jl.Pasar Minggu Raya no.7 Pasar Minggu Jakarta Selatan
                </p>
              </td>
            </tr>
            <tr>
              <td class="py-4">
                <h6 class="text-green mb-0">Jawa Barat</h6>
                <p class="mb-0">
                  Jl Pemuda No.9 Bandung Jawa Barat
                </p>
              </td>
            </tr>
            <tr>
              <td class="py-4">
                <h6 class="text-green mb-0">Jawa Tengah</h6>
                <p class="mb-0">
                  Jl Diponegoro No.24 Semarang Jaea Tengah
                </p>
              </td>
            </tr>
            <tr>
              <td class="py-4">
                <h6 class="text-green mb-0">Jawa Timur</h6>
                <p class="mb-0">
                  Jl Melon No.18 Surabaya Jawa Timurs
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  // swiper slider
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
      delay: 5000,
    },
    zoom: {
      maxRatio: 5,
      minRation: 1
    },
  });

  //product slider
  $('#carousel-product').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    navText : ['<img src="{{ asset('frontend/img/icon/product-arrow-left.svg') }}" class="mr-5 img-owl-carousel-arrow">','<img src="{{ asset('frontend/img/icon/product-arrow-right.svg') }}" class="mr-5 img-owl-carousel-arrow">'],
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:2,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
        loop:false
      }
    }
  });

  //product slider
  $('#carousel-video').owlCarousel({
    loop:true,
    margin:50,
    responsiveClass:true,
    navText : ['<img src="{{ asset('frontend/img/icon/product-arrow-left.svg') }}" class="mr-5 img-owl-carousel-arrow">','<img src="{{ asset('frontend/img/icon/product-arrow-right.svg') }}" class="mr-5 img-owl-carousel-arrow">'],
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:2,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
    }
  });

  //parallax effect
  var rellax = new Rellax('.rellax', {
    center: true
  });

  $(document).ready(function() {
    $('#data-location').DataTable({
      "bPaginate": false,
      "bLengthChange": false,
      "bFilter": true,
      "bInfo": false,
      "bAutoWidth": false
    });
  });

  //get data product
  // $(document).ready(function() {
  //   var base_url = "{{asset('frontend/img/')}}";
  //   $('.btn-show-product').on('click', function() {
  //     var productId = $(this).data('id');
  //     var productName = $(this).data('product-name');
  //     var productImage = $(this).data('product-image');
  //     var productColor = $(this).data('product-color');
  //     var productImageShow = base_url+'/product/'+productImage;
  //     var productColorShow = base_url+'/object/product-'+productColor+'.svg';
  //     $('#product-show-title').html(productName);
  //     $('#img-product-show').html('<img src="'+ productImageShow +'" class="img-fluid"/>');
  //     $('#bg-img-product-show').html('<img src="'+ productColorShow +'" class="position-absolute img-product"/>');
  //     $('.card-home-product').removeClass('active');

  //     $('html, body').animate({
  //       scrollTop: $('#product-show').offset().bottom
  //     }, 500);
  //   });
  // });
</script>

<script>
$(document).ready(function() {
  $('.btn-show-product').on('click', function() {
    var base_url = "{{asset('frontend/img/')}}";
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        /* the route pointing to the post function */
        url: "{{ route('get_product') }}",
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {
            _token: CSRF_TOKEN,
            key:$(this).data('id'),
        },
        dataType: 'JSON',
        /* remind that 'data' is the response of the AjaxController */
        success: function (data) {
          console.log(data['available']);
          var productName = 'Nusakita ' + data['product']['{{ custom_translate_db('title',$locale) }}'];
          var productContent = data['product']['{{ custom_translate_db('content',$locale) }}'];
          var productImage = data['product']['image_product'];
          var productColor = data['product']['theme_color'];

          var productImageShow = base_url+'/product/'+productImage;
          var productColorShow = base_url+'/object/product-'+productColor+'.svg';

          $('#product-show-title').html(productName);
          $('#img-product-show').html('<img src="'+ productImageShow +'" class="img-fluid"/>');
          $('#bg-img-product-show').html('<img src="'+ productColorShow +'" class="position-absolute img-product"/>');
          $('.home_available').html(data['available']);
          $('.content_product').html(productContent);
          $('.detail_button_product').attr('href', data['link']);
          $('.card-home-product').removeClass('active');

          $('html, body').animate({
            scrollTop: $('#product-show').offset().bottom
          }, 500);
        }
    });
  });
});

</script>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}"/>
<style>
    .bg-intro{
        background: url('{{ asset("frontend/img/background/bg-intro.png") }}');
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection
