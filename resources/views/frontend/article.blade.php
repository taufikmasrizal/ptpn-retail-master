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
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Article</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="pb-0">
    <div class="container bg-article p-4">
      <div class="row">
        <div class="col-md-12">
          <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">

                @foreach ($article_highlights as $article_highlight)
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="justify-content-center align-self-center">
                            <img src="{{ asset('frontend/img/article/'. $article_highlight->image_thumbnail) }}" class="img-fluid img-article-top"/>
                            </div>
                        </div>
                        <div class="col-md-5 pl-5 d-flex">
                            <div class="justify-content-center align-self-center">
                            <a href="{{ url('article/'. $article_highlight->slug) }}" class="article-top p-4">
                                <h1>
                                    {{ $article_highlight[custom_translate_db('title', $locale)] }}
                                </h1>
                                <h6>
                                <span>admin</span> - {{ $article_highlight->created_at->format("d F Y") }}
                                </h6>
                                <p>
                                    {{ $article_highlight[custom_translate_db('content', $locale)] }}
                                </p>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <div class="row py-5">
        <div class="col-md-12">
          <a href="{{ route('article') }}" class="btn btn-article-category {{ (empty($c_search))? 'active' : '' }}">
            All
          </a>
          @foreach ($category_articles as $category_article)
            <a href="{{ url('article?c='.$category_article->slug) }}" class="btn btn-article-category {{ ($c_search == $category_article->slug)? 'active' : '' }}">
                {{ $category_article[custom_translate_db('title', $locale)] }}
            </a>
          @endforeach
        </div>
      </div>
      <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-4 mb-4">
            <a href="{{ url('article/'. $article->slug) }}">
                <div class="card card-article">
                    <img src="{{ asset('frontend/img/article/'. $article->image_thumbnail) }}" class="card-img-top" alt="...">
                    <div class="card-body card-article-content">
                        <h5 class="card-title">{{ $article[custom_translate_db('title', $locale)] }}</h5>
                        <p class="card-text"><span>admin</span> - {{ $article->created_at->format("d F Y") }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

        <div class="col-md-12 text-center d-flex justify-content-center w-100 py-5">
            <nav aria-label="Page navigation example">
                @if ($articles->lastPage() > 1)
                @php
                    $currentPage = $articles->currentPage();
                    $next = $currentPage + 1;
                    $prev = $currentPage - 1;
                    if($prev == 0){
                        $prev = 1;
                    }
                @endphp
                <ul class="pagination">
                    <li class="{{ ($articles->currentPage() == 1) ? ' disabled' : '' }}">
                        <a class="page-link mx-3" href="{{ (!empty($c_search))? '?c=' . $c_search . '&page='. $prev : $articles->url($articles->currentPage()-1) }}">
                            <img src="{{ asset('frontend/img/icon/arrow-pagination-left.svg') }}">
                        </a>
                    </li>
                    @for ($i = 1; $i <= $articles->lastPage(); $i++)
                        <li class="page-item {{ ($articles->currentPage() == $i) ? ' active' : '' }}">
                            <a class="page-link" href="{{ (!empty($c_search))? '?c=' . $c_search . '&page='. $i : $articles->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li class="{{ ($articles->currentPage() == $articles->lastPage()) ? ' disabled' : '' }}">

                        <a class="page-link mx-3" href="{{ (!empty($c_search))? '?c=' . $c_search . '&page='. $next : $articles->url($articles->currentPage()+1) }}">
                            <img src="{{ asset('frontend/img/icon/arrow-pagination-right.svg') }}">
                        </a>
                    </li>
                </ul>
                @endif
            </nav>
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
  </script>
@endsection

@section('css')
<style>

  .disabled{
    pointer-events: none;
  }
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
