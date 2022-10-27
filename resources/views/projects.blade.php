@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="wrapper">

        {{--=========SECTION BANNER=========--}}
        <section class="section__banner">
            <div class="general__container">
                <div class="banner">
                    <h1 class="title general__corbel-b">Проекты</h1>
                    <p class="subtitle general__euclid-l">Наша компания была основана 15 сентября 2008 года. С первых дней работы мы стремимся к совершенству, которое является основой всего, что мы делаем. </p>
                </div>
            </div>
        </section>

        {{--=========SECTION PROJECTS=========--}}
        <section class="section__projects">
            <div class="general__container">
                <div class="projects">
                    <?php for ($i = 1; $i < 6; $i++):?>
                    <div class="projects__box" data-aos="fade-up">
                        <img src="<?php echo '/img/projects/'.$i.'.jpg'; ?>" alt="">
                        <div class="content">
                            <a href="" class="title general__euclid-m">Конгресс Холл</a>
                            <p class="subtitle general__euclid-r">Уникальная площадка, подходящая для проведения мероприятий различного формата – международных конференций и форумов. Конгресс-холл, построенный на территории Международного делового центра "Tashkent City" в 2019 году, расположен в живописном месте с захватывающим панорамным видом. В современном сооружении имеются конференц-залы всех видов и размеров, небольшая концертная площадка, рестораны и многое другое.</p>
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
            $('.section__projects').addClass('page')
        });
    </script>
@endsection

