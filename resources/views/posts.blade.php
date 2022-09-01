@extends('layout/main')
@section('content')
    <div class="row">
        @foreach($posts as $post)
            @include('./layout/card',['post'=>$post])
        @endforeach
        <div class="">
            {{$posts->links()}}
        </div>
    </div>
@endsection
