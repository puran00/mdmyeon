@extends('layout.app')
@section('title')
    Админка
@endsection
@section('main')
    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Админ панель</h2>
        </div>
        <table class="table">
            <thead>
            <tr style="background-color:#F5B7B1">
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $key=>$category)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$category->title}}</td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{route('CategoryEditPage',['category'=> $category])}}" class="btn btn-secondary col-12">Редактировать</a>
                            </div>
                            <div class="col-6">
                                <form action="{{route('delete',['category'=> $category])}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger col-12">Удалить</button>
                                </form>
                            </div>
                        </div>

                    </td>

                </tr>
            @endforeach



            </tbody>
        </table>

    </div>
@endsection
