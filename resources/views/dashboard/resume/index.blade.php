@extends('layouts.dashboard')
@section('content')
    
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card-body row">
                    <h4 class="card-title">Contact List</h4>
                    <table class="table mb-0">
                        <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th>Фото</th>
                            <th>Вакансия</th>
                            <th>Название </th>
                            <th>Телефон</th>
                            <th style="width: 130px;">Actions</th>
                        </tr>
                        </thead>
                        <?php
                        $num = 1;
                        ?>
                        <tbody>
                        @foreach($resume as $resum)
                            <tr>
                                <td  style="width: 60px;">{{$num++}}</td>
                                <td><img src="{{$resum->file}}" alt="" style="width: 100px; height: 100px;"></td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$resum->vacancy_id}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$resum->name}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$resum->phone}}</td>
                                <td class="px-6 py-2 text-sm" style="width: 130px;">
                                    <form action="{{ Route('dashboard.resume.destroy', $resum->id) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')    
                                        <button type="submit" class="btn btn-danger waves-effect waves-light"><i class="uil-trash"></i></button>
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