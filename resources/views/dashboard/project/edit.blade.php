@extends('layouts.dashboard')
@section('content')
    
<div>
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <h6 class="mb-0 text-uppercase">Project</h6>
            <hr/>
            {{-- @dd($project) --}}
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">
                    <form action="{{route('dashboard.project.update', $project->id)}}" method="Post" enctype="multipart/form-data">
                        {{ method_field('put') }}
                        @csrf
                        <div class="card-title d-flex align-items-center">
                            <div></i>
                            </div>
                            <h5 class="mb-0 text-white">Фото добавить</h5>
                        </div>
                        <div class="mb-12">
                            <div class="mb-9">
                                <input type="file" class="form-control" name="photo" aria-label="file example" required>
                            </div>
                            <div class="mb-3">
                                <img src="/{{$project->photo}}" alt="">
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="name_uz" class="form-label">Название Uz</label>
                                <input type="name_uz" name="name_uz" class="form-control" id="name_uz" value="{{$project->name_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label for="name_ru" class="form-label">Название Ru </label>
                                <input type="name_ru" name="name_ru" class="form-control" id="name_ru" value="{{$project->name_ru}}">
                            </div>
                            <div class="col-md-4">
                                <label for="name_en" class="form-label">Название En</label>
                                <input type="name_en" name="name_en" class="form-control" id="name_en" value="{{$project->name_ru}}">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Описание Uz</label>
                                <textarea class="form-control" name="description_uz" id="inputAddress" placeholder="..." rows="3">{{$project->description_uz}}</textarea>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Описание Ru</label>
                                <textarea class="form-control"  name="description_ru" id="inputAddress2" placeholder=" ..." rows="3">{{$project->description_uz}}</textarea>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Описание En</label>
                                <textarea class="form-control"  name="description_en" id="inputAddress2" placeholder=" ..." rows="3">{{$project->description_uz}}</textarea>
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