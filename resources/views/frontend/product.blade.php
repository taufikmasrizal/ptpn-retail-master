@extends('frontend/layouts/app')
@section('title','Nusakita - Product '.$product[custom_translate_db('title', $locale)])
@section('keyword','cooking oil, sugar, coffee, tea, ptpn')
@section('description','Description')
@section('image', asset('frontend/img/meta/nusakita.png'))

@section('content')
<section class="bg-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center pt-5 pb-0">
        <div class="product-detail-title-group" data-aos="fade-up" data-aos-delay="1500">
          <img src="{{ asset('frontend/img/product/'. $product['image_logo']) }}" class="mt-5"/>
          <h1 class="title-product mb-0 text-{{  $product['title_color'] }}">{{  strtoupper($product[custom_translate_db('title', $locale)]) }}</h1>
        </div>
        <img src="{{ asset('frontend/img/product/'. $product['image_product_banner']) }}" class="img-fluid img-product-detail w-75" data-aos="fade-up" data-aos-delay="2000"/>
      </div>
    </div>
  </div>
</section>
<section id="product-detail-content">
  <div class="container-fluid">
    <div class="row pt-content">
      <div class="col-md-6 d-flex p-0">
        <div class="justify-content-center align-self-center">
          <img src="{{ asset('frontend/img/product/'. $product['image_premium_product']) }}" class="img-fluid desktop" data-aos="fade-right"/>
        </div>
      </div>
      <div class="col-md-5 d-flex px-5 p-0" data-aos="fade-up">
        <div class="justify-content-center align-self-center detail-content">
          <h6>
            Nusakita presents
          </h6>
          <h2>
            {{  $product[custom_translate_db('premium_title', $locale)] }}
          </h2>
          <p>
            {{  $product[custom_translate_db('premium_content', $locale)] }}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="product-detail-advantages">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center detail-content">
        <h2>
          {{ $product[custom_translate_db('advantage_title', $locale)] }}
        </h2>
      </div>

      <div class="col-12">
        {!!  $product[custom_translate_db('advantage_content', $locale)] !!}
      </div>

    </div>
  </div>
</section>
<section id="image-all">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 px-0">
        <div class="owl-carousel" id="history-image">
        @foreach (json_decode($product->image_slider, TRUE) as $image_slider)
          <a href="javascipt:void()" class="img-history" data-bs-toggle="modal" data-img="{{ asset('frontend/img/product/'. $image_slider['image']) }}" data-content="{{ $image_slider[custom_translate_db('content', $locale)] }}" data-bs-target="#modalHistory">
            <img src="{{ asset('frontend/img/product/'. $image_slider['image']) }}"/>
          </a>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal" id="modalHistory" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content modal-history">
      <div class="modal-body modal-body-history">
        <img src="{{ asset('frontend/img/product/'. $product['photo_1']) }}" class="img-fluid"/>
      </div>
      <div class="modal-footer modal-footer-history">
        
      </div>
    </div>
  </div>
</div>

<section id="product-history">
  <div class="container">
    <div class="col-md-12 text-center detail-content">
      <h2>
        History Describe Experience
      </h2>
    </div>
    <div class="col-md-12 mt-5">
      <div class="timeline-centered">
        @foreach($product->history as $row => $history)
        <article class="timeline-entry">
          @php
            ++$row
          @endphp
          @if($row % 2 == 0)
          <div class="timeline-entry-inner" data-aos="fade-right">
          @else
          <div class="timeline-entry-inner" data-aos="fade-left">
          @endif
            <div class="timeline-icon bg-timeline">
              <i class="entypo-feather"></i>
            </div>
            <div class="timeline-label">
              <h2>{{ $history->year }}</h2>
              <h6>{{ $history[custom_translate_db('title', $locale)] }}</h6>
              <p>{{ $history[custom_translate_db('content', $locale)] }}</p>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </div>
</section>
<section id="product-description">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex px-5">
        <div class="justify-content-start align-self-center detail-content">
          <h2>
            Best Plantation Products Produce Best Products
          </h2>
          <p>
            {{ $product[custom_translate_db('content', $locale)] }}
          </p>
        </div>
      </div>
      <div class="col-md-6 d-flex px-5">
        <div class="justify-content-center align-self-center position-relative" id="product-image-description">
          <img src="{{ asset('frontend/img/product/'. $product['image_product']) }}" class="img-fluid"/>
          <img src="{{ asset('frontend/img/product/'. $product['image_object_product1']) }}" class="img-fluid img-product-description-animation animation-1"/>
          <img src="{{ asset('frontend/img/product/'. $product['image_object_product2']) }}" class="img-fluid img-product-description-animation animation-2"/>
          <img src="{{ asset('frontend/img/product/'. $product['image_object_product3']) }}" class="img-fluid img-product-description-animation animation-3"/>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="order-now">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-order-now">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 text-center detail-content py-4">
                <h2>Order Now</h2>
              </div>
              <div class="col-md-6 px-5">
                <h6>
                  Composition
                </h6>
                <p>
                  {{ $product[custom_translate_db('composition', $locale)] }}
                </p>
                <h6 class="mt-5">
                  Produce By
                </h6>
                <a href="#" class="btn">
                  <img src="{{ asset('frontend/img/product/logo-ptpn-1.png') }}"/>
                </a>
                <h6 class="mt-5">
                  Available in
                </h6>
                <div class="d-flex align-items-center">
                    @foreach ($availables as $available)
                    <a href="{{ $available['link'] }}" class="mx-4">
                      <img src="{{ asset('frontend/img/icon/'. $available['image2']) }}"/>
                    </a>
                    @endforeach
                </div>
              </div>
              <div class="col-md-6 text-center">
                <img src="{{ asset('frontend/img/product/'. $product['image_nustrition_fact']) }}" class="img-fluid"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center detail-content py-4 pt-5">
                <h2>Buy {{  $product[custom_translate_db('title', $locale)] }} at the following shop</h2>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-3 p-3">
                    <a href="#" class="btn btn-lg btn-wa d-flex justify-content-center mx-4 align-items-center">
                      <img src="{{ asset('frontend/img/icon/wa-product.svg') }}" class="mx-2"/>
                      WhatsApp
                    </a>
                  </div>
                  @foreach ($availables as $available)
                    <div class="col-md-3 p-3">
                      <a href="{{ $available['link'] }}" class="btn btn-lg btn-{{ $available['name'] }} d-flex justify-content-center mx-4 align-items-center">
                        <img src="{{ asset('frontend/img/icon/'. $available['image3']) }}" class="mx-2"/>
                        {{ ucfirst($available['name']) }}
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center pt-5 pb-0">
      @if($product->image_footer)
        <img src="{{ asset('frontend/img/product/'. $product['image_footer']) }}" class="img-fluid w-50">
      @endif
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script>
 //parallax effect
  var rellax = new Rellax('.rellax', {
    center: true
  });

  //history image
  $('#history-image').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    loop:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
      0:{
        items:2,
        nav:true
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:4,
        loop:false
      }
    }
  });
  $('.img-history').on('click', function() {
    var image = $(this).data('img');
    var content = $(this).data('content');
    if(image != '') {
      $('.modal-body-history').html(`<img src="${image}" class="img-fluid"/>`)
      $('.modal-footer-history').html(`<p class="text-center text-white">
      ${content}</p>`)
    }
  })
  $('.timeline-entry').odd().addClass('left-aligned');

  var rect = $('#product-image-description')[0].getBoundingClientRect();
  var mouse = {x:0, y:0, moved:false}
  $('#product-image-description').mousemove(function(e) {
    mouse.moved = true;
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
  })
  TweenLite.ticker.addEventListener('tick', function() {
    if(mouse.moved) {
      parallaxIt('.animation-1', -10);
      parallaxIt('.animation-2', 10);
      parallaxIt('.animation-3', -10);
    }
    mouse.moved = false;
  })
  function parallaxIt(target, movement) {
    TweenMax.to(target, 0.5, {
      x:(mouse.x - rect.width / 2) / rect.width * movement,
      y:(mouse.y - rect.height / 2) / rect.width * movement
    })
  }
</script>
@endsection

@section('css')
@if($product->theme_color == 'yellow') 
<style>
  .timeline-icon{
    background-color: var(--yellow) !important;
  }
  #order-now{
    background: linear-gradient(180deg, rgba(249, 249, 249, 0) 0%, #FFFBED 100%);
  }
</style>
@elseif($product->theme_color == 'dark-green')
<style>
  .timeline-icon{
    background-color: #4A6B62 !important;
  }
  #order-now{
    background: linear-gradient(180deg, rgba(249, 249, 249, 0) 0%, #E9F3F1 100%);
  }
</style>
@elseif($product->theme_color == 'brown')
<style>
  .timeline-icon{
    background-color: var(--brown) !important;
  }
  #order-now{
    background: linear-gradient(180deg, rgba(248, 239, 231, 0) 0%, #F3EEE9 100%);
  }
</style>
@endif
<style>
  .bg-product{
    background: url("{{ asset('frontend/img/product/'. $product['image_background_banner']) }}");
    background-size: cover;
    background-position: center bottom;
    backgound-repeat: no-repeat;
  }
</style>
@endsection