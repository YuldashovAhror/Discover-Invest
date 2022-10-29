@extends('layouts.dashboard')
@section('content')
    
<div>
    <div class="row">
        {{-- <div class="col-xl-7 mx-auto"> --}}
            <h6 class="mb-0 text-uppercase">News</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">
                    <form action="{{route('dashboard.news.update',  $news->id)}}" method="POST" enctype="multipart/form-data">
                        {{ method_field('put') }}
                        @csrf
                        <div class="col-md-6">
                            <h5 class="mb-0 text-white">Фото добавить</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-12">
                                    <div class="mb-3 text-center">
                                        <img src="{{$news->photo}}" alt="">
                                    </div>
                                    <div>
                                        <input type="file" class="form-control" name="photo">
                                    </div>
                                </div>
                                <div class="md-6">
                                    <label for="date" class="form-label">Свидание</label>
                                    <input type="date" name="date" class="form-control" id="date" value="{{$news->date}}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="title_uz" class="form-label">Название Uz</label>
                                <input type="text" name="title_uz" class="form-control" id="title_uz" value="{{$news->title_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label for="title_ru" class="form-label">Название Ru </label>
                                <input type="text" name="title_ru" class="form-control" id="title_ru" value="{{$news->title_ru}}">
                            </div>
                            <div class="col-md-4">
                                <label for="title_en" class="form-label">Название En</label>
                                <input type="text" name="title_en" class="form-control" id="title_en" value="{{$news->title_en}}">
                            </div>
                            <div class="col-4">
                                <label for="description_uz" class="form-label">Описание Uz</label>
                                <textarea class="ckeditor form-control" name="description_uz">{{$news->description_uz}}</textarea>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Описание Ru</label>
                                <textarea class="ckeditor form-control" name="description_ru">{{$news->description_ru}}</textarea>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Описание En</label>
                                <textarea class="ckeditor form-control" name="description_en">{{$news->description_en}}</textarea>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-light px-5">Сохронит</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection