<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class PostController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('id','desc')->paginate(10);


        return view('posts',compact('posts'));
    }

    public function show(){
        return view('cabinet');
    }
    public function create(PostRequest $request){
        if(!Auth::check()){
            return redirect(route('home'));
        }
        $user=Auth::user();
        $post=Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'aurhor_id' => $user->id,
        ]);
        if($post){
            return back();
        }
    }
}
