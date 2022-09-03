@extends('layout/main')
@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Создание</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Мои посты</button>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-lg-6 mx-auto text-center py-4 px-2">
                <form action="{{route('post.create')}}" method="post">
                    @csrf
                    <h1>Создание постов</h1>
                    <form>
                        <div class="form-group my-4">
                            <label for="exampleFormControlInput1"><h3>Заголовок</h3></label>
                            <input type="text" class="form-control" name="title" placeholder="">
                        </div>
                        <div class="form-group my-4">
                            <label for="exampleFormControlTextarea1"><h3>Описание</h3></label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <input type="submit" value="Создать" class="btn btn-secondary btn-lg my-4 col-12 col-md-6">
                    </form>
                    @if ($errors->any())

                        <div class="alert alert-danger my-4">

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    @endif

                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
                @if ($errors->any())

                    <div class="alert alert-danger my-4">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>

                    </div>

                @endif
                @foreach($posts as $post)

                    @include('./layout/card_user',['post'=>$post])
                @endforeach

            </div>
            <div class="">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
