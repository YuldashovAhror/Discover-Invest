<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>Discover Invest</title>
    <meta name="description" content="">
    <meta name="keywords" content="Novas"/>
    <meta name="author" content="Novas"/>
    <meta name="google-site-verification" content=""/>
    <!--=======css Links======-->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon.svg">
    <link rel="icon" type="image/svg" sizes="32x32" href="/img/favicon.svg">
    <link rel="icon" type="image/svg" sizes="16x16" href="/img/favicon.svg">
    <!--    <link rel="manifest" href="img/favicon/site.webmanifest">-->
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/img/favicon.svg') }}">

    {{--=========CSS=========--}}
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/fancybox.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/main.css">
    @yield('style')
</head>
<body>

@include('layouts.header')
@yield('content')
@include('layouts.popup')

{{--=========SCRIPTS=========--}}
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/inputmask.min.js"></script>
<script src="/js/gsap.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/main.js"></script>
@yield('script')
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
<script>
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [41.302150, 69.244185],
                zoom: 17,
                controls: []
            }),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {}, {
                iconLayout: 'default#image',
                iconImageHref: '/img/map.svg',
                iconImageSize: [86, 86],
                iconImageOffset: [-55, -58]
            })
        myMap.geoObjects
            .add(myPlacemark)

        myMap.behaviors.disable('ScrollZoom');

        myMap.panes.get('ground').getElement().style.filter = 'grayscale(100%)';
    });
</script>
</body>
</html>
