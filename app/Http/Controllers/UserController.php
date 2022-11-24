<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }
    //post user
    public function store(Request $request){
        $formRegister=$request->validate([
            'name'=>'required',
            'email'=>['required','email'],
            'password'=>['required','confirmed','min:8'],
            
        ]);
        //Hash Password
        $formRegister['password'] = bcrypt($formRegister['password']);
        //create user
       $user= User::create($formRegister);
        //login
        auth()->login($user);
        return redirect('/');
    }
    //logout
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
    //Login
    public function login(){
        return view('users.login');
    }
    //postLogin
    public function authenticate(Request $request){
        $formRegister=$request->validate([
            
            'email'=>['required','email'],
            'password'=>'required'
            
        ]);
        if(auth()->attempt($formRegister)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['email'=>'invalid credentials'])->onlyInput('email');
    }
}
