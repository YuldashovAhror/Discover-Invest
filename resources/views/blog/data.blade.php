@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="wrapper">
        <section class="section__banner">
            <div class="general__container">
                <div class="banner">
                    <h1 class="title general__corbel-b">Новости</h1>
                    <p class="subtitle general__euclid-l">Наша компания была основана 15 сентября 2008 года. С первых дней работы мы стремимся к совершенству, которое является основой всего, что мы делаем. </p>
                </div>
            </div>
        </section>
        <section class="section__news">
            <div class="general__container">
                <div class="news__container">
                    <?php for ($i = 1; $i < 5; $i++):?>
                    <div class="news__item" data-aos="fade-up">
                        <span class="date general__euclid-l">01.09.2022</span>
                        <div class="pic">
                            <img class="pic__banner" src="<?php echo '/img/news/'.$i.'.jpg'; ?>" alt="">
                        </div>
                        <div class="content">
                            <a href="/blog-single" class="title general__euclid-r">Архитектор – это не просто профессия, а образ жизни.</a>
                            <a href="/blog-single" class="link general__euclid-r">Подробнее</a>
                        </div>
                    </div>
                    <?php endfor ?>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')
@endsection

@section('script')
    <script>
        $(window).on('load', function () {
            $('.header').addClass('header__dark')
            $('.section__news').addClass('page')
        });
    </script>
@endsection

