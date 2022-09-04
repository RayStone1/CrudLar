<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function show(){
        $posts=Post::where('author_id',Auth::id())->Paginate(10);
        return view('cabinet',compact('posts'));
    }
    public function create(PostRequest $request){
        $user=Auth::user();
        $post=Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'author_id' => $user->id,
        ]);
        if($post){
            return back();
        }
    }
    public function delete(Request $request){
        $validated = $request->validate([
            'post_id' => 'required',
        ]);
        if($validated){
            $post = Post::find($request->post_id);
            $post->delete();
            return back();
        }
        return back()->withErrors([
            'post'=>'Не удалось удалить'
        ]);
    }
    public function edit(Post $post){
        return view('edit',compact('post'));
    }
    public function update(Post $post){
        $validated = request()->validate([
            'title' => 'string',
            'description' => 'string',
        ]);
        $post->update($validated);
        return redirect()->route('post',$post->id);
    }
}
