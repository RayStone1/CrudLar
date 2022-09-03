@extends('layout/main')
@section('content')
    <div class="post">
        <h1>{{$post->title}}</h1>
        <h3 class="col-12 col-md-6">{{$post->description}}</h3>
        <p>Дата создания: {{date('d-m-Y', strtotime($post->created_at))}}</p>
        <h5>Автор: {{$post->author->name}}</h5>
    </div>
@endsection
