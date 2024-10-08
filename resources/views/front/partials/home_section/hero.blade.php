@extends('front.base')


@section('content')
    <section class="hero-slider">
        <div class="swiper heroSlider>
            <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('front/assets/images/hero1.jpg') }}" alt="heroImage"></div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/images/hero2.jpg') }}" alt="heroImage"></div>
        </div>
        <div class="swiper-pagination"></div>
        </div>
    </section>
@endsection
