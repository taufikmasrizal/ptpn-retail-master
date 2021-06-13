@extends('frontend/layouts/app')
@section('title','Nusakita - Contact')
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
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-contact pt-5 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-5">
          <h2 class="text-white py-5">
            {{ $contacts[custom_translate_db('title', $locale)] }}
          </h2>
          <form class="form-horizontal" method="" action="">
            <div class="form">
              <div class="form-group mb-4">
                <label class="control-label text-white">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Entry Your Name"/>
              </div>
              <div class="form-group mb-4">
                <label class="control-label text-white">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Entry Your Email"/>
              </div>
              <div class="form-group mb-4">
                <label class="control-label text-white">Phone Number</label>
                <input type="tel" name="phone-number" id="phone-number" minlength="1" maxlength="14" class="form-control" placeholder="Entry Your Phone Number"/>
              </div>
              <div class="form-group mb-4">
                <label class="control-label text-white">Message</label>
                <textarea type="textarea" name="phone-number" id="phone-number" minlength="1" maxlength="14" rows="5" class="form-control" placeholder="Entry Your Message"></textarea>
              </div>
              <div class="form-group mb-4">
                <button class="btn btn-lg btn-yellow w-100">
                  Send
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 bg-dark-green contact-information p-4 desktop">
          <img src="{{ asset('frontend/img/contact/'. $contacts['image_thumbnail']) }}" class="img-fluid img-contact w-100"/>
          <div class="d-flex align-items-center my-5">
            @foreach (json_decode($contacts['social_media']) as $social_media)
                <a href="{{ url($social_media->link) }}" class="btn">
                    @if ($social_media->platform == 'Facebook')
                        <img src="{{ asset('frontend/img/icon/facebook-contact.svg') }}"/>
                    @endif

                    @if ($social_media->platform == 'Twitter')
                        <img src="{{ asset('frontend/img/icon/twitter-contact.svg') }}"/>
                    @endif

                    @if ($social_media->platform == 'Youtube')
                        <img src="{{ asset('frontend/img/icon/youtube-contact.svg') }}"/>
                    @endif

                    @if ($social_media->platform == 'LinkedIn')
                        <img src="{{ asset('frontend/img/icon/linked-in-contact.svg') }}"/>
                    @endif

                    @if ($social_media->platform == 'Instagram')
                        <img src="{{ asset('frontend/img/icon/instagram-contact.svg') }}"/>
                    @endif
                </a>
            @endforeach
          </div>
          <p class="text-soft-green">
              {{ $contacts[custom_translate_db('content', $locale)] }}
          </p>
          <div class="d-flex align-items-center mb-2">
            <img src="{{ asset('frontend/img/icon/email-contact.svg') }}"/>
            <p class="px-2 text-soft-green mb-0">{{ $contacts['email'] }}</p>
          </div>
          <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('frontend/img/icon/phone-contact.svg') }}"/>
            <p class="px-2 text-soft-green mb-0">{{ $contacts['phone'] }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')

@endsection

@section('css')
<style>
  .bg-contact{
    background: url('{{ asset("frontend/img/contact/bg-contact.png") }}');
  }
</style>
@endsection
