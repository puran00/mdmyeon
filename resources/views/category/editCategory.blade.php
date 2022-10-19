@extends('layout.app')
@section('title')
    Редактирование
@endsection
@section('main')
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="row mt-5 text-center">
                <h2>Редактирование категории</h2>
            </div>
            <div class="col-6" >
                <form action="{{route('CategoryEditSave',['category'=>$category])}}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="category" class="form-label"></label>
                        <input required type="text" name="category" class="form-control" id="category" value="{{$category->title}}">
                    </div>

                    <button type="submit" class="btn btn-primary col-12" style="background-color:#F5B7B1; color:#212F3D; border: none">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
