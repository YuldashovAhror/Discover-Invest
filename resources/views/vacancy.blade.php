@extends('layouts.main')

@section('style')
@endsection
{{-- @dd($vacancy) --}}
@section('content')
    <div class="wrapper">
        {{--=========SECTION BANNER=========--}}
        <section class="section__banner">
            <div class="general__container">
                <div class="banner">
                    <h1 class="title general__corbel-b">Карьера</h1>
                    <p class="subtitle general__euclid-l">Наша компания была основана 15 сентября 2008 года. С первых дней работы мы стремимся к совершенству, которое является основой всего, что мы делаем. </p>
                </div>
            </div>
        </section>

        {{--=========SECTION CAREER=========--}}
        <section class="section__career">
            <div class="general__container">
                <div class="pic">
                    <img src="/img/bg/bg-career.jpg" alt="">
                </div>
                <div class="career">
                    <div class="column">
                        <div class="title general__corbel-b" data-aos="fade-right">
                            Lorem Ipsum is simply dummy text of the printing and
                            <span>typesetting industry.</span>
                        </div>
                    </div>
                    <div class="career__container">
                        <div class="subtitle general__euclid-l" data-aos="fade-left">
                            Наша компания была основана 15 сентября 2008 года. С первых дней работы мы стремимся к совершенству, которое является основой всего, что мы делаем. Создавая наши проекты, мы создаем возможности. Строя объекты наших клиентов, мы строим будущее. Откройте для себя Discover Invest, чтобы разнообразить и сделать жизнь людей ярче, создавая уникальную архитектуру и дизайн.
                            <br>
                            Наша компания была основана 15 сентября 2008 года. С первых дней работы мы стремимся к совершенству, которое является основой всего, что мы делаем. Создавая наши проекты, мы создаем возможности. Строя объекты наших клиентов, мы строим будущее. Откройте для себя Discover Invest, чтобы разнообразить и сделать жизнь людей ярче, создавая уникальную архитектуру и дизайн.
                        </div>
                        <div class="pocket">
                            <div class="box" data-aos="fade-up">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="18" width="25.4562" height="25.4562" transform="rotate(45 18 0)" fill="#FAB448"/>
                                </svg>
                                <h4 class="general__euclid-m">Наша компания была основана </h4>
                            </div>
                            <div class="box" data-aos="fade-up">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="18" width="25.4562" height="25.4562" transform="rotate(45 18 0)" fill="#FAB448"/>
                                </svg>
                                <h4 class="general__euclid-m">Наша компания была основана </h4>
                            </div>
                            <div class="box" data-aos="fade-up">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="18" width="25.4562" height="25.4562" transform="rotate(45 18 0)" fill="#FAB448"/>
                                </svg>
                                <h4 class="general__euclid-m">Наша компания была основана </h4>
                            </div>
                            <div class="box" data-aos="fade-up">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="18" width="25.4562" height="25.4562" transform="rotate(45 18 0)" fill="#FAB448"/>
                                </svg>
                                <h4 class="general__euclid-m">Наша компания была основана </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--=========SECTION VACANCY=========--}}
        <section class="section__vacancy">
            <div class="general__container">
                <div class="vacancy">
                    @foreach ($vacancy as $vacan)
                        
                    <div class="vacancy__item" data-aos="fade-up">
                        <h4 class="title general__corbel-b">{{$vacan->name_ru}}</h4>
                        <div class="subtitle general__corbel-r">{{$vacan->description_ru}}</div>
                        <a href="" class="more">
                            <span class="general__corbel-r" onclick="choose({{ $vacan->id }})">Подробнее</span>
                        </a>
                        {{--begin info box for popup--}}
                        <div class="box">
                            <div class="box__block">
                                <h4 class="box__name general__corbel-b">Обязанности</h4>
                                <div class="box__description general__euclid-r">{{$vacan->responsihilities_ru}}</div>
                            </div>
                            <div class="box__block">
                                <h4 class="box__name general__corbel-b">Требования</h4>
                                <div class="box__description general__euclid-r">{{$vacan->requirements_ru}}</div>
                            </div>
                            <div class="box__block">
                                <h4 class="box__name general__corbel-b">Условия</h4>
                                <div class="box__description general__euclid-r">{{$vacan->terms_ru}}</div>
                            </div>
                        </div>
                        {{--end info box for popup--}}
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    {{--=========POPUP VACANCY=========--}}
    <div class="popup__vacancy">
        <span class="close">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L20 20" stroke="white" stroke-width="2"/>
                <path d="M20 1L1 20" stroke="white" stroke-width="2"/>
            </svg>
        </span>
        <div class="popup__vacancy-container">
            <img src="/img/bg/bg-vacancy.jpg" alt="" class="banner">
            <div class="content">
                <h4 id="content__name" class="content__name general__euclid-m"></h4>
                <div id="content__wrap" class="content__wrap">

                </div>
                <form action="{{route('dashboard.resume.store')}}" method="POST" class="vacancy__form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="vacancy_id" id="vacancy_id">
                    <h4 class="title general__euclid-b">Анкета соискателя</h4>
                    <label for="vacancy__name" class="vacancy__form-pocket">
                        <span class="general__euclid-r">Ваше имя</span>
                        <input class="general__euclid-m" id="vacancy__name" type="text" name="name" placeholder="Ваше имя">
                    </label>
                    <label for="vacancy__tel" class="vacancy__form-pocket">
                        <span class="general__euclid-r">Номер телефона</span>
                        <input id="vacancy__tel" type="tel" class="general__euclid-m" name="phone" placeholder="+998" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
                    </label>
                    <label for="vacancy__file" class="vacancy__form-pocket">
                        <span class="general__euclid-r">Прикрепите файл</span>
                        <input class="general__euclid-m" id="vacancy__file" type="file" name="file">
                    </label>
                    <button class="vacancy__form-button general__euclid-m">Отправить заявку</button>
                </form>
            </div>
        </div>
    </div>
    {{--End popup vacancy--}}


    {{--=========FOOTER=========--}}
    @include('layouts.footer')
@endsection

@section('script')
<script>
    function choose(id)
    {
        $('#vacancy_id').val(id);
    }
</script>
    <script>
        $(window).on('load', function () {
            $('.header').addClass('header__dark')
            $('.section__news').addClass('page')


            $(document).on('click', '.vacancy__item a', function(event) {
                event.preventDefault();
                $('#content__name').text('');
                $('#content__wrap').html('');

                let $contentName = $(this).parent().find('.title').text();
                let $contentWrap = $(this).parent().find('.box').html();

                console.log($contentName, $contentWrap)

                $('#content__name').text($contentName);
                $('#content__wrap').html($contentWrap);
                $('.popup__back').slideDown('200');

                setTimeout(()=> {
                    $('.popup__vacancy').fadeIn('200');
                }, 800)

            })

            $('.popup__vacancy .close, .popup__back').click((event)=>{
                event.preventDefault();
                $('.popup__vacancy').fadeOut('200')
                setTimeout(()=> {
                    $('#content__name').text('');
                    $('#content__wrap').html('');
                    $('.popup__back').slideUp('200');
                }, 250)
            })
        });
    </script>
@endsection

