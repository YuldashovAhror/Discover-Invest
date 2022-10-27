@extends('layouts.dashboard')
@section('content')
    
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card-body row">
                    <h4 class="card-title">Project List</h4>
                    <table class="table mb-0">
                        <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th>Фото</th>
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
                        @foreach($projects as $project)
                            <tr>
                                <td  >{{$num++}}</td>
                                <td><img src="/{{$project->photo}}" alt="" style="width: 100px; height: 100px;"></td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$project->name_uz}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$project->name_ru}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$project->name_en}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$project->description_uz}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$project->description_ru}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$project->description_en}}</td>
                                <td class="px-6 py-2 text-sm" style="width: 130px;">
                                    <a href="{{ Route('dashboard.project.edit', $project->id) }}" style="display: inline;">
                                        <i class="lni lni-pencil"></i>
                                    </a>
                                    <form action="{{ Route('dashboard.project.destroy', $project->id) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <i class="lni lni-trash"></i>
                                        <button type="submit"></button>
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