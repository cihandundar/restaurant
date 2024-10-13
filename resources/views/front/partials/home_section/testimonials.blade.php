<section class="testimonials">
    <div class="container">
        <div class="testimonials-title">
            <div class="info">testimonials</div>
            <div class="title">Reviews about our test</div>
        </div>
        <div class="swiper testimonialsSlider">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $item)
                    <div class="swiper-slide">
                        @include('front.partials.items.testimonial-box')
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
