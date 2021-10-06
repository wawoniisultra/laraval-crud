<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('tugas1.register');
    }

    public function welcome(Request $request){
        return view ('tugas1.welcome');
    }

    public function welcome_post(Request $request) {
        $namadepan = $request["namadepan"];
        $namabelakang = $request["namabelakang"];
        return view ('welcome');
    }
}
