<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'login'=>'required | unique:users,login',
            'name'=>'required',
            'password' => 'required|confirmed|min:6',
        ];
    }
    public function attributes()
    {
        return [
            'login'=>'логин',
            'name'=>'имя',
            'password'=>'пароль',
            'repeat_password'=>'повтор пароль',
        ];
    }
    public function messages()
    {
        return [
            'unique'=>':attribute уже занят',
            'required'=>"Поле :attribute обязательно",
            'password.min'=>'Минимум :min символов для пароля',
            'password.confirmed'=>'Пароли не совпадают'
        ];
    }
}
