<div class="col-sm-6 my-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{Illuminate\Support\Str::words($post->description,5)}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('post',$post->id)}}" class="btn btn-primary">Читать далее</a>
                <div class="d-flex align-items-center">
                    <a href=""><span class="material-symbols-outlined">edit</span></a>
                    <form action="{{route("post.delete")}}" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <button class="btn" style="border: none" type="submit"><span class="material-symbols-outlined">delete</span></button>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
