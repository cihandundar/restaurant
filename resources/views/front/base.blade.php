<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>22</title>

    @include('front.partials.styles')


</head>

<body>

    @include('front.partials.header')

    @yield('content')

    @include('front.partials.cta')

    @include('front.partials.footer')

    @include('front.partials.script')

    <div id="fixed-social">
        <div>
            <a href="#" class="fixed-facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i>
                <span>Facebook</span></a>
        </div>
        <div>
            <a href="#" class="fixed-twitter" target="_blank"><i
                    class="fa-brands fa-twitter"></i><span>Twitter</span></a>
        </div>
        <div>
            <a href="#" class="fixed-gplus" target="_blank"><i
                    class="fa-brands fa-whatsapp"></i><span>Whatsapp</span></a>
        </div>
        <div>
            <a href="#" class="fixed-instagrem" target="_blank"><i class="fa-brands fa-instagram"></i>
                <span>Instagram</span></a>
        </div>
    </div>
</body>

</html>
