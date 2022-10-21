@extends('layout.app')
@section('title')
    Пост
@endsection
@section('main')
    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Создание поста</h2>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-6" >
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Заголовок</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$content->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Описание</label>
                        <textarea type="password" name="content_post" class="form-control" id="content">{{$content->content}}"</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Изображение</label>
                        <input type="file" name="img" class="form-control" id="img" value="{{$content->img}}">
                    </div>

                    <button type="submit" class="btn btn-primary col-12" style="background-color:#F5B7B1; color:#212F3D; border: none">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
