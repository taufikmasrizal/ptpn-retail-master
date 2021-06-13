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
            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="pb-0">
    <div class="container bg-article pt-4 px-0">
      <div class="row">
        <div class="col-md-12 p-4 px-5">
          <h2>
            Privacy Policy
          </h2>
          <div class="accordion my-5" id="accordionExample">
            @for($i=1; $i<10; $i++)
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-{{ $i }}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $i }}" aria-expanded="true" aria-controls="collapse-{{ $i }}">
                  Order
                </button>
              </h2>
              <div id="collapse-{{ $i }}" class="accordion-collapse collapse @if($i == 1) show @endif" aria-labelledby="heading-{{ $i }}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ol>
                    <li>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </li> 
                    <li>
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </li>  
                    <li>
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </li>  
                    <li>
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </li>  
                  </ol> 
                </div>
              </div>
            </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
  <script>
    
  </script>
@endsection

@section('css')
<style>
  
</style>
@endsection