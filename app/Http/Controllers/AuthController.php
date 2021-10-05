<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function welcome(Request $request){
        return view ('welcome');
    }

    public function welcome_post(Request $request) {
        $namadepan = $request["namadepan"];
        $namabelakang = $request["namabelakang"];
        return view ('welcome');
    }
}
