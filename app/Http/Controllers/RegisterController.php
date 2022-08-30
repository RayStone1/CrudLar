<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
    public function register_user(RegisterRequest $request){
        if(Auth::check()){
            return redirect(route('home'));
        }
        $user=User::create([
            'name' => request()->name,
            'login' => request()->login,
            'password' => Hash::make(request()->password),
        ]);
        if($user){
            Auth::login($user);
            return redirect()->to(route('home'));
        }
    }
}
