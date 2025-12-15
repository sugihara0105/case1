<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FleamarketController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function login2(Request $request){
        return view('products');
    }
    public function register2(Request $request){
        // 会員登録処理
    }

    public function products(){
    return view('products');
    }
}
