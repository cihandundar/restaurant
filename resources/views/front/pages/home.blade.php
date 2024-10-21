@extends('front.base')

@section('content')
    @include('front.partials.home_section.hero')
    @include('front.partials.home_section.view-menu')
    @include('front.partials.home_section.special-menu')
    @include('front.partials.home_section.about-us')
    @include('front.partials.home_section.runtime')
    @include('front.partials.testimonials')
    @include('front.partials.home_section.home-blog')
@endsection
