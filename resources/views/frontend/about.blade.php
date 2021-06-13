@extends('frontend/layouts/app')
@section('title','Nusakita - About')
@section('keyword','cooking oil, sugar, coffee, tea, ptpn')
@section('description','Description')
@section('image', asset('frontend/img/meta/nusakita.png'))

@section('content')
<section id="about-banner" class="pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center py-5">
        <img src="{{ asset('frontend/img/logo/'. $about_banners['image_logo']) }}">
        <h1 class="about-title">
          {!! $about_banners[custom_translate_db('title', $locale)] !!}
        </h1>
      </div>
      <div class="col-md-12 text-center position-relative" id="about-banner-img">
        <img src="{{ asset('frontend/img/about/'. $about_banners['image_background']) }}" width="20%" class="img-about-banner">
        <img src="{{ asset('frontend/img/about/'. $about_banners['image_float_item1']) }}" width="20%" class="position-absolute img-banner-about-1">
        <img src="{{ asset('frontend/img/about/'. $about_banners['image_float_item2']) }}" width="15%" class="position-absolute img-banner-about-2">
        <img src="{{ asset('frontend/img/about/'. $about_banners['image_float_item3']) }}" width="15%" class="position-absolute img-banner-about-3">
        <img src="{{ asset('frontend/img/about/'. $about_banners['image_float_item4'])}}" width="30%" class="position-absolute img-banner-about-4">
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex">
        <div class="justify-content-center align-self-center">
          <img src="{{ asset('frontend/img/about/'. $about_our_plantations['image_background']) }}" class="img-fluid"/>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="justify-content-start align-self-center">
          <h2 class="mb-4 text-brown">
          {!! $about_our_plantations[custom_translate_db('title', $locale)] !!}
        </h2>
            <p>
              {!! $about_our_plantations[custom_translate_db('content', $locale)] !!}
          </p>
        </div>
      </div>
    </div>
    <div class="row px-5">
        {!! $about_our_values[custom_translate_db('content', $locale)] !!}
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    @foreach ($about_contents as $row => $about_content)
    @php
        $row++;
    @endphp
    @if ($row % 2 == 1)
    <div class="row">
      <div class="col-md-6 p-5 d-flex mobile">
        <div class="justify-content-center align-self-center">
          <img src="{{ asset('frontend/img/about/'. $about_content['image_background'] ) }}" class="img-fluid"/>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="justify-content-center align-self-center">
          <h2 class="mb-4 text-brown">
            {{ $about_content[custom_translate_db('title', $locale)] }}
          </h2>
          <p>
            {{ $about_content[custom_translate_db('content', $locale)] }}
          </p>
        </div>
      </div>
    </div>
    @else
    <div class="row">
      <div class="col-md-5 d-flex">
        <div class="justify-content-center align-self-center">
          <h2 class="mb-4 text-brown">
            {{ $about_content[custom_translate_db('title', $locale)] }}
          </h2>
          <p>
            {{ $about_content[custom_translate_db('content', $locale)] }}
          </p>
        </div>
      </div>
      <div class="col-md-6 p-5 d-flex">
        <div class="justify-content-center align-self-center">
          <img src="{{ asset('frontend/img/about/'. $about_content['image_background']) }}" class="img-fluid"/>
        </div>
      </div>
    </div>
    @endif

    @endforeach


  </div>

</section>

<section id="cta-about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center title">
        <div class="about-cta-group">
          <h2 class="mb-5 text-brown font-weight-bold">
            {!! $about_contacts[custom_translate_db('content', $locale)] !!}
          </h2>
          <a href="{{ url($about_contacts['link']) }}" class="btn btn-green btn-lg">
            Contact Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script>
  var rect = $('#about-banner-img')[0].getBoundingClientRect();
  var mouse = {x:0, y:0, moved:false}
  $('#about-banner-img').mousemove(function(e) {
    mouse.moved = true;
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
  })
  TweenLite.ticker.addEventListener('tick', function() {
    if(mouse.moved) {
      parallaxIt('.img-banner-about-1', -30);
      parallaxIt('.img-banner-about-2', 150);
      parallaxIt('.img-banner-about-3', 70);
      parallaxIt('.img-banner-about-4', -20);
    }
    mouse.moved = false;
  })
  function parallaxIt(target, movement) {
    TweenMax.to(target, 0.5, {
      x:(mouse.x - rect.width / 2) / rect.width * movement,
      y:(mouse.y - rect.height / 2) / rect.width * movement
    })
  }

  var rellax = new Rellax('.rellax', {
    center: true
  });

  $(document).ready(function() {
    $('.img-banner-about-1').hide();
    $('.img-banner-about-2').hide();
    $('.img-banner-about-3').hide();
    $('.img-banner-about-4').hide();
    
    setInterval(imgBanner1, 1000);
    function imgBanner1() {
      $('.img-banner-about-1').fadeIn();
    }
    setInterval(imgBanner2, 1500);
    function imgBanner2() {
      $('.img-banner-about-2').fadeIn();
    }
    setInterval(imgBanner3, 2000);
    function imgBanner3() {
      $('.img-banner-about-3').fadeIn();
    }
    setInterval(imgBanner4, 2500);
    function imgBanner4() {
      $('.img-banner-about-4').fadeIn();
    }
  });
</script>
@endsection

@section('css')
<style>

</style>
@endsection
