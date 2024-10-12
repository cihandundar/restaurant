<section class="special-menu">
    <div class="container">
        <div class="special-menu-title">
            <span class="info">TEST A LITTLE BIT</span>
            <span class="title">Our Special Menu</span>
        </div>
        <div class="menu-btn">
            <button data-category="breakfast">Breakfast</button>
            <button data-category="brunch">Brunch</button>
            <button data-category="lunch">Lunch</button>
            <button data-category="dinner">Dinner</button>
        </div>
        <div class="special-menu-area">
            <div class="menu breakfast-menu" style="display: block;">
                <div class="menu-wrapper">
                    <div class="menu-item">
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
            <div class="menu brunch-menu" style="display: none;">
                <div class="menu-wrapper">
                    <img src="{{ asset('front/assets/images/brunch.jpg') }}" alt="breakfast menu">
                    <div class="menu-item">
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
            <div class="menu lunch-menu" style="display: none;">
                <div class="menu-wrapper">
                    <div class="menu-item">
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
            <div class="menu dinner-menu" style="display: none;">
                <div class="menu-wrapper">
                    <img src="{{ asset('front/assets/images/dinner.jpg') }}" alt="breakfast menu">
                    <div class="menu-item">
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
