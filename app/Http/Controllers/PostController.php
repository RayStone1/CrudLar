<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class PostController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('id','desc')->paginate(10);
        return view('posts',compact('posts'));
    }
    public function single($post_id){

        $post=Post::find($post_id);
        return view('post',compact('post'));
    }

}
