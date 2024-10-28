<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rosoi Restaurant</title>

    @include('front.partials.styles')


</head>

<body>

    @include('front.partials.header')

    @yield('content')

    @include('front.partials.cta')

    @include('front.partials.footer')

    @include('front.partials.script')

    @include('front.social-fixed')
</body>

</html>
