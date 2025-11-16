<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    function postRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:4',
            'confirm_password'=>'required|same:password'
        ]);

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->back()->with("msg", "The user account has been created.");

    }
    function getLogin(){
        return view("auth.signin");
    }
    function getRegister(){
        return view("auth.signup");
    }
}
