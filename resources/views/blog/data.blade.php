@extends('layouts.main')

@section('style')
@endsection

@section('content')
{{-- @dd($news) --}}
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
                    @foreach ($news as $new)
                        
                    <div class="news__item" data-aos="fade-up">
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

