<header class="header">
    <a href="/" class="mobile-logo">
        @include('front.partials.svg.logo')
    </a>
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-2 col-6">
                <a href="/" class="logo">
                    @include('front.partials.svg.logo')
                </a>
            </div>

            <div class="col-lg-10 col-6">
                <nav class="nav">
                    <ul class="nav-list ">
                        <li><a href="#">Home</a></li>
                        <li><a href="{{ route('menu') }}">Menu</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</header>
