@extends('layout/main')
@section('content')
    <div class="login_form col-lg-6 m-auto text-center">
        <form action="{{route('login_user')}}" method="post">
            @csrf
            <h1>Авторизация</h1>
            <input type="text" name="login" placeholder="Логин" class="form_input col-12 col-md-6 my-4"><br>
            <input type="password" name="password" placeholder="Пароль" class="form_input col-12 col-md-6 my-4"><br>
            <input type="submit" value="Зарегистрироваться" class="btn btn-secondary btn-lg col-12 col-md-6">
            @if ($errors->any())

                <div class="alert alert-danger my-4">

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif
            <h5 class="my-3">Нет аккаунта? <a href="{{route('register')}}">Войти</a></h5>
        </form>
    </div>
@endsection
