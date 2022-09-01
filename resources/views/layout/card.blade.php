<div class="col-sm-6 my-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{Illuminate\Support\Str::words($post->description,5)}}</p>
            <a href="" class="btn btn-primary">Читать далее</a>
        </div>
    </div>
</div>
