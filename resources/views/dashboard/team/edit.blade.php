@extends('layouts.dashboard')
@section('content')
    
<div>
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <h6 class="mb-0 text-uppercase">Team</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">
                    <form action="{{route('dashboard.team.update', $team->id)}}" method="POST" enctype="multipart/form-data">
                        {{ method_field('put') }}
                        @csrf
                        <div class="card-title d-flex align-items-center">
                            <div></i>
                            </div>
                            <h5 class="mb-0 text-white">Photo добавить</h5>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" name="photo" aria-label="file example" required>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="name_uz" class="form-label">Название Uz</label>
                                <input type="text" name="name_uz" class="form-control" id="name_uz" value="{{$team->name_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label for="name_ru" class="form-label">Название Ru </label>
                                <input type="text" name="name_ru" class="form-control" id="name_ru" value="{{$team->name_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label for="name_en" class="form-label">Название En</label>
                                <input type="text" name="name_en" class="form-control" id="name_en" value="{{$team->name_uz}}">
                            </div>
                            <div class="col-4">
                                <label for="position_uz" class="form-label">Должность Uz</label>
                                <textarea class="form-control" name="position_uz" id="position_uz" placeholder="..." rows="3">{{$team->position_uz}}</textarea>
                            </div>
                            <div class="col-4">
                                <label for="position_ru" class="form-label">Должность Ru</label>
                                <textarea class="form-control" name="position_ru" id="inputAddress2" placeholder=" ..." rows="3">{{$team->position_ru}}</textarea>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Должность En</label>
                                <textarea class="form-control" name="position_en" id="inputAddress2" placeholder=" ..." rows="3">{{$team->position_ru}}</textarea>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-light px-5">Сохронит</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection