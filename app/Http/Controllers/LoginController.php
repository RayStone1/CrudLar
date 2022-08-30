<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }
    public function login_user(Request $request){

        if(Auth::check()){
            return redirect(route('home'));
        }
        $user=$request->only(['login','password']);

        if(Auth::attempt($user)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->withErrors([
            'login'=>'Не удалось авторизоваться'
        ]);

    }
}
