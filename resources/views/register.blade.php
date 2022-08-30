@extends('layout/main')
@section('content')
    <div class="register_form">
        <form action="{{route('register_user')}}" method="post">
            <h1>Регистрация</h1>
            @csrf
            <br>
            <h5 class="sub__title py-3 px-2 bg-light bg-gradient">Личный данные</h5>
            <div class="col-lg-6 my-4 mx-4">
                <span class="col-12 my-4 row align-items-center">
                    <h5 class="col-12 col-md-3 text-md-left">Имя</h5>
                    <input type="text" name="name" class="col-12 col-md-8">

                </span>
            </div>
            <h5 class="sub__title py-3 px-2 bg-light bg-gradient">Данные для идентификации</h5>
            <div class="col-lg-6 my-4 mx-4">
                <span class="col-12 my-4 row align-items-center">
                    <h5 class="col-12 col-md-3 text-md-left">Логин</h5>
                    <input type="text" name="login"  class="col-12 col-md-8">
                </span>
                <span class="col-12 my-4 row align-items-center">
                    <h5 class="col-12 col-md-3 text-md-left">Пароль</h5>
                    <input type="password" name="password"  class="col-12 col-md-8">
                </span>
                <span class="col-12 my-4 row align-items-center">
                    <h5 class="col-12 col-md-3 text-md-left">Повторите пароль</h5>
                    <input type="password" name="password_confirmation"  class="col-12 col-md-8">
                </span>
            </div>
            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif
            <input type="submit" value="Зарегистрироваться" class="btn btn-secondary btn-lg col-12 col-md-3">
        </form>

    </div>
@endsection
