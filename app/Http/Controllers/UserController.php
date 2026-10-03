<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
}
function login()
{
    return view("login");
}
function logincheck(Request $request)
{
    return $request->all;
    if(auth::attempt(["email"=>$request->email,
    "password"=>$request->password]))
    {
        echo"login complete";
    }
    else{
        echo "invalid email or password";
    }
}
