<div class="testimonial-box">
    <div class="testimonial-box-comment">
        {{ $item['comment'] }}
    </div>
    <div class="testimonial-box-bottom">
        <img src="{{ $item['image'] }}" alt="testimonial image">
        <div class="testimonial-box-content">
            <span class="testimonial-box-name"> {{ $item['name'] }}</span>
            <span class="testimonial-box-job">{{ $item['job'] }}</span>
        </div>
    </div>
</div>
