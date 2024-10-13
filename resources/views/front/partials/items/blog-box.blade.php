<a href="#" class="blog-box">
    <img src="{{ $item['image'] }}" alt="blogImage">
    <div class="blog-box-content">
        <div class="blog-box-content-wrapper">
            <div class="blog-box-date">{{ $item['date'] }}</div>
            /
            <div class="blog-box-name">By: {{ $item['name'] }}</div>
        </div>
        <div class="blog-box-title">{{ $item['title'] }}</div>
        <button>Read more </button>
    </div>
</a>
