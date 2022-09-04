@extends('layout/main')
@section('content')
    <div class="col-lg-6 mx-auto py-4 px-2">
        <form action="{{route('post.update',$post->id)}}" method="post">
            @csrf
            @method('patch')
            <h1>Редактирование постов</h1>
            <form>
                <div class="form-group my-4">
                    <label for="exampleFormControlInput1"><h3>Заголовок</h3></label>
                    <input type="text" class="form-control" name="title" placeholder="" value="{{$post->title}}">
                </div>
                <div class="form-group my-4">
                    <label for="exampleFormControlTextarea1"><h3>Описание</h3></label>
                    <textarea class="form-control" name="description" rows="3">{{$post->description}}</textarea>
                </div>
                <input type="submit" value="Редактировать" class="btn btn-secondary btn-lg my-4 col-12">
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
@endsection
