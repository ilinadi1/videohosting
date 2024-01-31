<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function registr(Request $request){
        $regustr = $request->all();

    $request -> validate([
        'login'=>'require|unique:users',
        'email'=>'required|unique:users|email',
        'password'=>'required',
        'confirm'=>'required|same:password'
    ],[
        'login.require'=>'Поле обязательное для заполнения',
        'login.unique'=>'Данный логин занят',
        'email.require'=>'Поле обязательное для заполнения',
        'email.unique'=>'Данная почта уже занята',
        'email.email'=>'Введите правильно почту',
        'password.require'=>'Поле обязательное для ввода',
        'confirm.requered'=>'Поле обязательно для ввода',
    ]);
    User::create([
        'login'=>$regustr['login'],
        'email'=>$registr['email'],
        'password'=>Hash::make($registr['password']),
    ]);
    return redirect('/')->with('succes','Успешная регистрация');
    }

    public function auth(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email'=>'Поле обязательно для заполнения',
            'password'=>'Поле обязательно для заполнения',
        ]);

        $user->$request->only('email','password');
        if(User::attempt([
            'email'=>$user['email'],
            'password'=>$user['password'],
        ])){
            if (Auth::user()->id_role == 1) {
                return redirect("/");
            } else {
                return redirect("/")->with("succes", "");
            }
        }else{
            return redirect()->back()->with("error","Неверная почта или пароль");
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect("/");
    }

}
