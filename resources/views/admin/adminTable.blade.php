@extends('layout')




@section('content')

    <div class="row">
        <div class="container">
            <table class="table table-bordered">
                @foreach ($products as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->dist }}</td>
                    <td>{{ $value->price }}</td>
                    <td><a href="/admin/delete/{{ $value->id }}"> Удалить </a></td>
                    <td><a href="/admin/edit/{{ $value->id }}">Редактировать</a></td>
                </tr>
                @endforeach
            </table>

        </div>

        <a href="/admin/add" class="btn btn-default">Добавить товар</a>
    </div>


@endsection

