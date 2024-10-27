@extends('front.base')


@section('content')
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        About Us
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('front.partials.about_section.experience')
    @include('front.partials.about_section.chefs-slider')
    @include('front.partials.home_section.about-us')
    @include('front.partials.home_section.runtime')
    @include('front.partials.testimonials')
@endsection
