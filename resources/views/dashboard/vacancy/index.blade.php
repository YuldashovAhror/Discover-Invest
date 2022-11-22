@extends('layouts.dashboard')
@section('content')
    
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card-body row">
                    <h4 class="card-title">Вакансия Список</h4>
                    <table class="table mb-0">
                        <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th>Фото</th>
                            <th>Название Uz</th>
                            <th>Название Ru</th>
                            <th>Название En</th>
                            <th style="width: 130px;">Actions</th>
                        </tr>
                        </thead>
                        <?php
                        $num = 1;
                        ?>
                        <tbody>
                        @foreach($vacancy as $vacan)
                            <tr>
                                <td  >{{$num++}}</td>
                                <td><img src="{{$vacan->photo}}" alt="" style="width: 100px; height: 100px;"></td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$vacan->name_uz}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$vacan->name_ru}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$vacan->name_en}}</td>
                                <td class="px-6 py-2 text-sm" style="width: 130px;">
                                    <form action="{{ Route('dashboard.vacancy.edit', $vacan->id) }}" style="display: inline;">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="lni lni-pencil"></i></button>
                                    </form>
                                    <div class="mt-1">
                                        <button class="btn btn-danger " type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{$vacan->id}}" data-bs-original-title="" title=""><i class="lni lni-trash"></i></i></button>
                                    </div>
                                </td>
                                <div class="modal fade" id="exampleModalCenter{{$vacan->id}}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content" >
                                            <div class="modal-header">
                                                <h5 class="modal-title" >Rostan ham o'chirmoqchimisiz</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Закрывать</button>
                                            <form action="{{route('dashboard.vacancy.destroy', $vacan->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit"  data-bs-original-title="" title="">Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

@endsection