<section class="chefs">
    <div class="container">
        <div class="chefs-title">
            <div class="info">OUR CHEF</div>
            <div class="title">Meet our Chef</div>
        </div>
        <div class="swiper chefsSlider">
            <div class="swiper-wrapper">
                @foreach ($chefs as $item)
                    <div class="swiper-slide">
                        @include('front.partials.items.chef-box')
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
