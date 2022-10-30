@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="wrapper">
        {{--=========SECTION NEWS-BANNER=========--}}
        <section class="section__news-banner">
            <div class="general__container">
                <div class="history">
                    <span class="history__name general__euclid-l">{{__('asd.Новости')}}/</span>
                    <span class="history__name general__euclid-r">{{$new['title_'.$lang]}}</span>
                </div>
                <h1 class="title general__corbel-b">{{$new['title_'.$lang]}}</h1>
            </div>
        </section>

        {{--=========SECTION NEWS-SINGLE=========--}}
        <section class="section__news-single">
            <div class="general__container">
                <div class="single">
                    <div class="pic">
                        <img src="{{$new->photo}}" alt="">
                    </div>
                    <div class="single__description">
                        <p>{{$new['description_'.$lang]}}</p>
                    </div>
                </div>
            </div>
        </section>

        {{--=========SECTION NEWS=========--}}
        <section class="section__news">
            <div class="general__container">
                <div class="general__top">
                    <h2 class="general__title" data-aos="fade-right">
                        <span class="line">{{__('asd.Последние')}} </span>
                        <span class="pl">{{__('asd.Новости')}}</span>
                    </h2>
                    <div class="news__buttons general__carousel-buttons" data-aos="fade-left">
                        <button class="news__prev general__carousel-btn">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8528 3.36135L6.40993 8.80421L11.8528 14.2471" stroke="white" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="news__next general__carousel-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.7185 3.36331L12.1614 8.80617L6.71851 14.249" stroke="white" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="news__carousel owl-carousel">
                @foreach (App\Models\News::all() as $new)
                    
                <div class="news__carousel-item">
                    <span class="date general__euclid-l">{{$new->date}}</span>
                    <div class="pic">
                        <img class="pic__banner" src="{{$new->photo}}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{route('blog.single',$new->id)}}" class="title general__euclid-r">{{$new['title_'.$lang]}}</a>
                        <a href="{{route('blog.single',$new->id)}}" class="link general__euclid-r">{{__('asd.Подробнее')}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    {{--=========FOOTER=========--}}
    @include('layouts.footer')
@endsection

@section('script')
    <script>
        $(window).on('scroll load', () => {
            ($(window).scrollTop() > 80) ?
                $('.header').addClass('header__dark').removeClass('header__transparent') :
                $('.header').addClass('header__transparent')
        });
        $(window).on('load', function () {

            $('.header').addClass('header__dark header__transparent')

            $('.news__carousel').owlCarousel({
                dots: true,
                nav: false,
                mouseDrag: false,
                smartSpeed: 700,
                lazyLoad: true,
                autoplay: false,
                margin: 40,
                autoplayTimeout: 3000,
                loop: true,
                responsiveBaseElement: 'body',
                responsive: {
                    0: {
                        items: 1.15,
                        margin: 20,
                    },
                    600: {
                        items: 2.5,
                        slideBy: 1
                    },
                    1300: {
                        items: 3.5,
                    }
                }

            })
            $('.news__prev').click(() => {
                $('.news__carousel').trigger('prev.owl.carousel', [700]);
                $('.news__carousel').trigger('stop.owl.autoplay')
            })
            $('.news__next').click(() => {
                $('.news__carousel').trigger('next.owl.carousel', [700]);
                $('.news__carousel').trigger('stop.owl.autoplay')
            })
        });
    </script>
@endsection
