<section class="home-blog">
    <div class="container">
        <div class="home-blog-title">
            <div class="info">Our Blog</div>
            <div class="title">Latest Blog Post</div>
        </div>
        <div class="swiper blogSlider">
            <div class="swiper-wrapper">
                @foreach ($blogs as $item)
                    <div class="swiper-slide">
                        @include('front.partials.items.blog-box')
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
</section>
