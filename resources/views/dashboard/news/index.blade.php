@extends('layouts.dashboard')
@section('content')
    
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card-body row">
                    <h4 class="card-title">Новости Список</h4>
                    <table class="table mb-0">
                        <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th>Фото</th>
                            <th>Свидание</th>
                            <th>Название Uz</th>
                            <th>Название Ru</th>
                            <th>Название En</th>
                            <th>Описание Uz</th>
                            <th>Описание Ru</th>
                            <th>Описание En</th>
                            <th style="width: 130px;">Actions</th>
                        </tr>
                        </thead>
                        <?php
                        $num = 1;
                        ?>
                        <tbody>
                        @foreach($news as $new)
                            <tr>
                                <td  >{{$num++}}</td>
                                <td><img src="{{$new->photo}}" alt="" style="width: 100px; height: 100px;"></td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$new->date}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$new->title_uz}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$new->title_ru}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$new->title_en}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {!! $new->description_uz !!}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {!! $new->description_ru !!}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {!! $new->description_en !!}</td>
                                <td class="px-6 py-2 text-sm" style="width: 130px;">
                                    <form action="{{ Route('dashboard.news.edit', $new->id) }}" style="display: inline;">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="lni lni-pencil"></i></button>
                                    </form>
                                    <form action="{{ Route('dashboard.news.destroy', $new->id) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')
        
                                        <button type="submit" class="btn btn-danger waves-effect waves-light"><i class="lni lni-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

@endsection