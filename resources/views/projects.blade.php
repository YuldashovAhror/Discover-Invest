@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="wrapper">
{{-- @dd($projects) --}}
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

