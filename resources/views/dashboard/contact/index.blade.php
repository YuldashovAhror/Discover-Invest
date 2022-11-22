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
                            <th>Отдел </th>
                            <th>Название </th>
                            <th>Телефон</th>
                            <th>Описание</th>
                            <th style="width: 130px;">Actions</th>
                        </tr>
                        </thead>
                        <?php
                        $num = 1;
                        ?>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td  style="width: 60px;">{{$num++}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$contact->department->name_ru}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$contact->name}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$contact->phone}}</td>
                                <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$contact->description}}</td>
                                <td class="px-6 py-2 text-sm" style="width: 130px;">
                                    <div>
                                        <button class="btn btn-danger " type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{$contact->id}}" data-bs-original-title="" title=""><i class="lni lni-trash"></i></i></button>
                                    </div>
                                </td>
                                <div class="modal fade" id="exampleModalCenter{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content" >
                                            <div class="modal-header">
                                                <h5 class="modal-title" >Rostan ham o'chirmoqchimisiz</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Закрывать</button>
                                            <form action="{{route('dashboard.contact.destroy', $contact->id)}}" method="post">
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

{{-- <form action="{{ Route('dashboard.contact.destroy', $contact->id) }}" method="post" style="display: inline;">
    @csrf
    @method('delete')

    <button type="submit" class="btn btn-danger waves-effect waves-light"><i class="lni lni-trash"></i></button>
</form> --}}