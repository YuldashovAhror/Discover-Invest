@extends('layouts.dashboard')
@section('content')
    
<div>
    <div class="row">
        {{-- <div class="col-xl-7 mx-auto"> --}}
            <h6 class="mb-0 text-uppercase">Timeline</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">
                    <form action="{{route('dashboard.timeline.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <h5 class="mb-0 text-white">Фото добавить</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-6">
                                    <input type="file" name="photo" class="form-control" aria-label="file example" required>
                                </div>
                                <div class="md-6 mt-2">
                                    <label for="date" class="form-label">Свидание</label>
                                    <input type="text" name="date" class="form-control" id="date" >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="name_uz" class="form-label">Название Uz</label>
                                <input type="text" name="name_uz" class="form-control" id="name_uz">
                            </div>
                            <div class="col-md-4">
                                <label for="name_ru" class="form-label">Название Ru </label>
                                <input type="text" name="name_ru" class="form-control" id="name_ru">
                            </div>
                            <div class="col-md-4">
                                <label for="name_en" class="form-label">Название En</label>
                                <input type="text" name="name_en" class="form-control" id="name_en">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Описание Uz</label>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="description_uz"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Описание Ru</label>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="description_ru"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Описание En</label>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="description_en"></textarea>
                                </div>
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