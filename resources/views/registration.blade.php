@extends('layout.app')
@section('title')
    Регистрация
@endsection
@section('main')
    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Регистрация</h2>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-6" >
                <form action="{{route('register')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Имя</label>
                        <input type="text" name="firstname" class="form-control" id="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Фамилия</label>
                        <input type="text" name="lastname" class="form-control" id="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control" id="login">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Телефон</label>
                        <input type="phone" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Повторите пароль</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agree" name="agree">
                        <label class="form-check-label" for="exampleCheck1">Согласие на обработку ПД</label>
                    </div>
                    <button type="submit" class="btn btn-primary col-12" style="background-color:#F5B7B1; color:#212F3D; border: none">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
