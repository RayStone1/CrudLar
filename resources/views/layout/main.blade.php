 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page',$title_page??'CRUD')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-lg">
            <a class="navbar-brand" href="{{route('home')}}"><h2>CRUD</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}"><h5>Главная</h5></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><h5>Pricing</h5></a>
                    </li>
                </ul>

                <div class="user d-flex align-items-center justify-content-between">
                    @auth
                        <h5 class="p-3">Здравствуйте,{{ Auth::user()->name }}</h5>
                        <h5>|</h5>
                        <a href="{{route('logout')}}" class="p-3"><h5 class="p-3">Выход</h5></a>
                    @else
                        <a href="{{route('login')}}" class="p-3"><h5 class="p-3">Вход</h5></a>
                        <h5>|</h5>
                        <a href="{{route('register')}}" class="p-3"><h5 class="p-3">Регистрация</h5></a>
                    @endauth

                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container-lg">
        @yield('content')
    </div>
</main>
<footer>

</footer>
</body>
</html>


