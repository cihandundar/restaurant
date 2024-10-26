@extends('front.base')

@section('content')
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        Our Menu
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="menu-wrapper">
                        <div class="menu-item">
                            <div class="item-title">Breakfast</div>
                            @foreach ($menu['breakfast'] as $item)
                                <div class="menu-item-wrapper">
                                    <div class="menu-item-desc">
                                        <div class="menu-item-title">{{ $item['name'] }}</div>
                                        <div class="menu-item-desc">{{ $item['desc'] }}</div>
                                    </div>
                                    <div class="menu-item-price">${{ $item['price'] }}</div>
                                </div>
                            @endforeach
                        </div>
                        <img src="{{ asset('front/assets/images/breakfast.jpg') }}" alt="breakfast menu">
                    </div>
                </div>
                <div class="col-lg-12 mb-5">
                    <div class="menu-wrapper">
                        <img src="{{ asset('front/assets/images/brunch.jpg') }}" alt="breakfast menu">
                        <div class="menu-item">
                            <div class="item-title">Brunch</div>
                            @foreach ($menu['brunch'] as $item)
                                <div class="menu-item-wrapper">
                                    <div class="menu-item-desc">
                                        <div class="menu-item-title">{{ $item['name'] }}</div>
                                        <div class="menu-item-desc">{{ $item['desc'] }}</div>
                                    </div>
                                    <div class="menu-item-price">${{ $item['price'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-5">
                    <div class="menu-wrapper">
                        <div class="menu-item">
                            <div class="item-title">Lunch</div>
                            @foreach ($menu['lunch'] as $item)
                                <div class="menu-item-wrapper">
                                    <div class="menu-item-desc">
                                        <div class="menu-item-title">{{ $item['name'] }}</div>
                                        <div class="menu-item-desc">{{ $item['desc'] }}</div>
                                    </div>
                                    <div class="menu-item-price">${{ $item['price'] }}</div>
                                </div>
                            @endforeach
                        </div>
                        <img src="{{ asset('front/assets/images/lunch.jpg') }}" alt="breakfast menu">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <img src="{{ asset('front/assets/images/dinner.jpg') }}" alt="breakfast menu">
                        <div class="menu-item">
                            <div class="item-title">Dinner</div>
                            @foreach ($menu['dinner'] as $item)
                                <div class="menu-item-wrapper">
                                    <div class="menu-item-desc">
                                        <div class="menu-item-title">{{ $item['name'] }}</div>
                                        <div class="menu-item-desc">{{ $item['desc'] }}</div>
                                    </div>
                                    <div class="menu-item-price">${{ $item['price'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('front.partials.testimonials')
@endsection
