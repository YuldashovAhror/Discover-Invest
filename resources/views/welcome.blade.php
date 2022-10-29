@extends('layouts.main')
@section('style')
@endsection
@section('content')
    <div class="wrapper">
        {{-- @dd( $projects) --}}
        {{--=========SECTION MAIN=========--}}
        <section class="section__main">
            <img src="/img/bg/bg-main.jpg" alt="">
            <div class="general__container">
                <div class="main">
                    <div class="main__content">
                        <h1 class="title general__corbel-b ">DISCOVER
                            INVEST</h1>
                        <p class="subtitle general__corbel-r">Здесь строятся великие дела</p>
                        <div class="main__btns">
                            <a href="/projects" class="main__btn"><span class="general__corbel-r">Проекты</span></a>
                            <a href="/contacts" class="main__btn"><span class="general__corbel-r">Контакты</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--=========SECTION ABOUT=========--}}
        <section class="section__about">
            <svg class="about__banner" width="658" height="855" viewBox="0 0 658 855" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.1">
                    <path d="M259.418 86.7901V0H657.706V591.526H541.891L541.954 536.143H605.022V55.3831H312.102V86.7584H511.563V854.691H0V86.7584H259.386L259.418 86.7901ZM99.6832 795.116H450.591V591.557H303.083L99.6832 795.116ZM259.418 554.371V186.061H315.754V532.491H450.591V146.397H61.004V752.943L259.418 554.371Z" fill="#8F8F8F"/>
                </g>
            </svg>
            <div class="general__container">
                <h2 class="title general__title" data-aos="fade-right">
                    <span class="line">О компании</span>
                    <span class="pl">DISCOVER INVEST</span>
                </h2>
                <p class="subtitle general__euclid-l" data-aos="fade-up">Наша компания была основана 15 сентября 2008 года. С первых дней работы мы стремимся к совершенству, которое является основой всего, что мы делаем. Создавая наши проекты, мы создаем возможности. Строя объекты наших клиентов, мы строим будущее. Откройте для себя Discover Invest, чтобы разнообразить и сделать жизнь людей ярче, создавая уникальную архитектуру и дизайн. </p>
                <div class="about__container">
                    <div class="about__container-columns" data-aos="fade-down-left">
                        <div class="columns">
                            <div class="box">
                                <h4 class="number"></h4>
                                <p class="name"></p>
                            </div>
                            <div class="box">
                                <img src="/img/bg/about-pic.jpg" alt="">
                                <h4 class="number general__euclid-sm">14</h4>
                                <p class="name general__euclid-r">Лет на рынке</p>
                            </div>
                            <div class="box">
                                <img src="/img/bg/about-pic.jpg" alt="">
                                <h4 class="number general__euclid-sm">256</h4>
                                <p class="name general__euclid-r">Lorem ipsum</p>
                            </div>
                            <div class="box">
                                <img src="/img/bg/about-pic.jpg" alt="">
                                <h4 class="number general__euclid-sm">150+</h4>
                                <p class="name general__euclid-r">Архитектурных проектов</p>
                            </div>
                            <a href="/about" class="box box__link">
                                <span class="general__corbel-b">О компании</span>
                            </a>
                            <div class="box">
                                <img src="/img/bg/about-pic.jpg" alt="">
                                <h4 class="number general__euclid-sm">2 048</h4>
                                <p class="name general__euclid-r">Lorem ipsum</p>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="box">
                                <img src="/img/bg/about-pic.jpg" alt="">
                                <h4 class="number general__euclid-sm">5233</h4>
                                <p class="name general__euclid-r">Оптыных сотрудников</p>
                            </div>
                            <div class="box">
                                <img src="/img/bg/about-pic.jpg" alt="">
                                <h4 class="number general__euclid-sm">128</h4>
                                <p class="name general__euclid-r">Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--=========SECTION ADVANTAGES=========--}}
        <section class="section__advantages">
            <div class="general__container">
                <h2 class="general__title" data-aos="fade-right">
                    <span class="line">
                        Наши
                    </span>
                    <span class="pl">премущества</span>
                </h2>
                <div class="advantages">
                    <div class="advantages__box" data-aos="fade-right">
                        <div class="pic">
                            <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M98.7643 45.2367C102.517 48.9894 102.517 55.0736 98.7643 58.8262C95.0117 62.5789 88.9275 62.5789 85.1748 58.8262C81.4222 55.0736 81.4222 48.9894 85.1748 45.2367C88.9275 41.4841 95.0117 41.4841 98.7643 45.2367" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M67.4624 28.0837C73.2407 33.862 73.2407 43.2305 67.4624 49.0088C61.6841 54.7871 52.3157 54.7871 46.5373 49.0088C40.759 43.2305 40.759 33.862 46.5373 28.0837C52.3156 22.3054 61.6841 22.3054 67.4624 28.0837" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28.8253 45.2367C32.5779 48.9894 32.5779 55.0736 28.8253 58.8262C25.0726 62.5789 18.9884 62.5789 15.2358 58.8262C11.4831 55.0736 11.4831 48.9894 15.2358 45.2367C18.9884 41.4841 25.0726 41.4841 28.8253 45.2367" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M109.25 90.25V85.044C109.25 78.4843 103.935 73.169 97.3751 73.169H93.5703" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.75 90.25V85.044C4.75 78.4843 10.0652 73.169 16.625 73.169H20.4298" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M82.3603 90.25V82.6453C82.3603 73.4635 74.917 66.0203 65.7353 66.0203H48.26C39.0783 66.0203 31.635 73.4635 31.635 82.6453V90.25" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h4 class="title">Команда
                            профессионалов</h4>
                        <p class="subtitle">Мы тщательно подбираем сотрудников с многолетним опытом работы.</p>
                    </div>
                    <div class="advantages__box" data-aos="fade-right">
                        <div class="pic">
                            <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M67.5229 29.63C68.223 28.2111 69.6679 27.3128 71.2501 27.3128C72.8323 27.3128 74.2772 28.2111 74.9773 29.63L77.092 33.9168C77.6972 35.1437 78.8675 35.9942 80.2214 36.191L84.9518 36.8785C86.517 37.1062 87.8173 38.2024 88.3062 39.7066C88.7952 41.2107 88.3881 42.862 87.2559 43.9665L83.8316 47.3065C82.8527 48.2614 82.4061 49.6366 82.6373 50.9844L83.4453 55.6946C83.7126 57.2537 83.0717 58.8293 81.792 59.7592C80.5124 60.689 78.8158 60.8119 77.4155 60.0761L73.1836 57.852C71.9731 57.2158 70.5271 57.2158 69.3166 57.852L65.0846 60.0761C63.6844 60.8119 61.9878 60.689 60.7082 59.7592C59.4285 58.8293 58.7876 57.2537 59.0549 55.6946L59.8629 50.9844C60.0941 49.6366 59.6475 48.2614 58.6686 47.3065L55.2443 43.9665C54.1121 42.862 53.705 41.2107 54.194 39.7066C54.6829 38.2024 55.9832 37.1062 57.5484 36.8785L62.2788 36.191C63.6327 35.9942 64.803 35.1437 65.4082 33.9168L67.5229 29.63Z" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3697 76H52.25C44.3799 76 38 69.6201 38 61.75V28.5C38 20.6299 44.3799 14.25 52.25 14.25H90.25C98.1201 14.25 104.5 20.6299 104.5 28.5V61.75C104.5 69.6201 98.1201 76 90.25 76V76V83.1205C90.25 84.0372 89.7224 84.872 88.8945 85.2655C88.0666 85.659 87.0861 85.5409 86.3753 84.9621L75.3697 76Z" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M38 47.5H23.75C15.8799 47.5 9.5 53.8799 9.5 61.75V80.75C9.5 88.6201 15.8799 95 23.75 95V102.12C23.75 103.037 24.2775 103.872 25.1055 104.266C25.9334 104.659 26.9139 104.541 27.6247 103.962L38.6303 95H52.25C60.1201 95 66.5 88.6201 66.5 80.75V76" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h4 class="title">Положительные
                            отзывы клиентов</h4>
                        <p class="subtitle">Которые вы можете посмотреть на нашем сайте и убедиться в качестве нашей работы.</p>
                    </div>
                    <div class="advantages__box" data-aos="fade-right">
                        <div class="pic">
                            <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M72.7653 49.1245L53.0623 68.8275L41.2395 57.0048" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M90.725 28.1248C79.0448 27.2033 68.4143 22.553 60.0258 15.3568C58.3063 13.8843 55.689 13.8843 53.9742 15.3568C45.5857 22.5483 34.9553 27.2033 23.275 28.1248C20.843 28.3148 19 30.3953 19 32.832V53.3995C19 74.1427 33.991 93.594 54.5205 99.4032C56.1308 99.8592 57.874 99.8592 59.4842 99.4032C80.009 93.5892 95 74.1475 95 53.4043V32.8368C95 30.3953 93.157 28.3148 90.725 28.1248Z" stroke="#262524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h4 class="title general__euclid-m">Гарантия
                            на все работы</h4>
                        <p class="subtitle general__euclid-r">Мы уверены в том, что мы делаем, поэтому предоставляем гарантию на все виды работ.</p>
                    </div>
                </div>
            </div>
        </section>

        {{--=========SECTION TEAM=========--}}
    
        <section class="section__team">
            <div class="general__container">
                <div class="general__top">
                    <h2 class="general__title" data-aos="fade-right">
                        <span class="line">Наша</span>
                        <span class="pl">команда</span>
                    </h2>
                    <div class="team__buttons general__carousel-buttons" data-aos="fade-left">
                        <button class="team__prev general__carousel-btn">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8528 3.36135L6.40993 8.80421L11.8528 14.2471" stroke="white" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="team__next general__carousel-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.7185 3.36331L12.1614 8.80617L6.71851 14.249" stroke="white" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            

                <div class="team__carousel owl-carousel">
                    @foreach ($teams as $team)
                    <div class="team__carousel-item">
                        <div class="pic">
                            <img src="/img/discover.svg" alt="Discover Invest" class="logo">
                            <img class="pic__banner" src="{{$team->photo}}" alt="">
                        </div>
                        <div class="content">
                            <a href="" class="title general__euclid-m">{{$team->name_ru}}</a>
                            <p class="subtitle general__euclid-r">{{$team->position_ru}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>

        {{--=========SECTION PROJECTS=========--}}
        <section class="section__projects">
            <div class="general__container">
                <h2 class="general__title" data-aos="fade-right">
                    <span class="line">Наши</span>
                    <span class="pl">проекты</span>
                </h2>
                <div class="projects">
                    @foreach ($projects as $project)
                        <div class="projects__box" data-aos="fade-up">
                            <img src="{{$project->photo}}" alt="">
                            <div class="content">
                                <a href="" class="title general__euclid-m">{{$project->name_ru}}</a>
                                <p class="subtitle general__euclid-r">{{$project->description_ru}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="/projects" class="projects__link general__link" data-aos="fade-up">
                    <span>Все проекты</span>
                </a>
            </div>
        </section>

        {{--=========SECTION NEWS=========--}}
        <section class="section__news">
            <div class="general__container">
                <div class="general__top">
                    <h2 class="general__title" data-aos="fade-right">
                        <span class="line">Новости</span>
                        <span class="pl">компании</span>
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
                @foreach ($news as $new)
                <div class="news__carousel-item">
                    <span class="date general__euclid-l">{{$new->date}}</span>
                    <div class="pic">
                        <img class="pic__banner" src="{{$new->photo}}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{route('blog.single',$new->id)}}" class="title general__euclid-r">{{$new->title_ru}}</a>
                        <a href="{{route('blog.single',$new->id)}}" class="link general__euclid-r">Подробнее</a>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="/blog" class="news__link general__link" data-aos="fade-up">
                <span>Все новости</span>
            </a>
        </section>
    </div>

    {{--=========FOOTER=========--}}
    @include('layouts.footer')
@endsection

@section('script')
    <script>
        $(window).on('scroll load', () => {
            ($(window).scrollTop() > 80) ?
                $('.header').addClass('header__dark') :
                $('.header').removeClass('header__dark')
        });

        $(window).on('load', function () {
            $('.team__carousel').owlCarousel({
                dots: true,
                nav: false,
                mouseDrag: false,
                smartSpeed: 700,
                lazyLoad: true,
                autoplay: true,
                margin: 40,
                autoplayTimeout: 3000,
                loop: true,
                responsiveBaseElement: 'body',
                responsive: {
                    0: {
                        items: 1.3,
                        margin: 30,
                    },
                    600: {
                        items: 2.5,
                        slideBy: 1
                    },
                    1300: {
                        items: 4.5,
                    }
                }

            })
            $('.team__prev').click(() => {
                $('.team__carousel').trigger('prev.owl.carousel', [700]);
                $('.team__carousel').trigger('stop.owl.autoplay')
            })
            $('.team__next').click(() => {
                $('.team__carousel').trigger('next.owl.carousel', [700]);
                $('.team__carousel').trigger('stop.owl.autoplay')
            })

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

