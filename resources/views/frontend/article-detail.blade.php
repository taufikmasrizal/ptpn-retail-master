@extends('frontend/layouts/app')
@section('title','Nusakita - Article')
@section('keyword','cooking oil, sugar, coffee, tea, ptpn')
@section('description','Description')
@section('image', asset('frontend/img/meta/nusakita.png'))

@section('content')
<section class="bg-soft-yellow">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('article') }}">Article</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $article[custom_translate_db('title', $locale)] }}</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="pb-0">
    <div class="container bg-article pt-4">
      <div class="row">
        <div class="col-md-12 detail-article">
          <h6>
            <span>admin</span> - {{ $article->created_at->format('d F Y') }}
          </h6>
          <h1>
            {{ $article[custom_translate_db('title', $locale)] }}
          </h1>
          <h6 class="mb-0 mt-4">
            Share
          </h6>
          <div class="d-flex align-items-center mb-4">
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/icon/facebook-share.svg') }}"/>
            </a>
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/icon/twitter-share.svg') }}"/>
            </a>
            <a href="#" class="btn">
              <img src="{{ asset('frontend/img/icon/linked-in-share.svg') }}"/>
            </a>
          </div>
          <picture>
            <img src="{{ asset('frontend/img/article/'. $article->image_thumbnail) }}" class="img-fluid img-responsive img-detail-article"/>
          </picture>
            <p>
              {!! $article[custom_translate_db('content', $locale)] !!}
            </p>
        </div>
        <div class="col-md-12 px-0">
          <div class="bg-bottom-article">
            <h6 class="mb-0 mt-4 px-3">
              Share
            </h6>
            <div class="d-flex align-items-center mb-4 px-3">
              <a href="#" class="btn">
                <img src="{{ asset('frontend/img/icon/facebook-share.svg') }}"/>
              </a>
              <a href="#" class="btn">
                <img src="{{ asset('frontend/img/icon/twitter-share.svg') }}"/>
              </a>
              <a href="#" class="btn">
                <img src="{{ asset('frontend/img/icon/linked-in-share.svg') }}"/>
              </a>
            </div>
            <div class="d-flex justify-content-between align-items-center w-100">
              <div class="article-detail-previous">
                <a href="{{ route('article_detail', $article_prev->slug) }}" class="btn d-flex align-items-center">
                  <img src="{{ asset('frontend/img/article/'. $article_prev->image_thumbnail) }}" class="img-fluid desktop img-btn-detail-article"/>
                  <span class="px-3 font-weight-bold text-brown">Previous Post</span>
                </a>
              </div>
              <div class="article-detail-next">
                <a href="{{ route('article_detail', $article_next->slug) }}" class="btn d-flex align-items-center">
                  <span class="px-3 font-weight-bold text-brown">Next Post</span>
                  <img src="{{ asset('frontend/img/article/'. $article_next->image_thumbnail) }}" class="img-fluid desktop img-btn-detail-article"/>
                </a>
              </div>
            </div>
            <h5 class="mt-5">
              Related Post
            </h5>
            <div class="owl-carousel p-4">
              @foreach ($related_posts as $related_post)
                @if ($related_post->slug !== $article->slug)
                  <a href="{{ route('article_detail', $related_post->slug) }}">
                    <div class="card card-article">
                      <img src="{{ asset('frontend/img/article/'. $related_post->image_thumbnail) }}" class="card-img-top" alt="...">
                      <div class="card-body card-article-content">
                        <h5 class="card-title">{{ $related_post[custom_translate_db('title', $locale)] }}</h5>
                        <p class="card-text"><span>admin</span> - {{ $related_post->created_at->format('d F Y') }}</p>
                      </div>
                    </div>
                  </a>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
    });

    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    navText : ['<img src="{{ asset('frontend/img/icon/product-arrow-left.svg') }}" class="mr-5 img-owl-carousel-arrow">','<img src="{{ asset('frontend/img/icon/product-arrow-right.svg') }}" class="mr-5 img-owl-carousel-arrow">'],
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
    }
  });
  </script>
@endsection

@section('css')
<style>
  .swiper-container {
    width: 100%;
    height: 100%;
  }
  .swiper-slide {
    text-align: left;
    font-size: 18px;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }
  .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
    bottom: 10px;
    left: auto;
    width: 100%;
    transform: translateX(24px);
  }
  .swiper-pagination-bullet {
    width: 5px;
    height: 5px;
    display: inline-block;
    border-radius: 50%;
    background: #000;
    opacity: .2;
  }
  .swiper-pagination-bullet-active{
    background: #000;
    opacity: 1;
  }
</style>
@endsection
