<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AuthController extends Controller
{
    public function index(){
    	return view('company.login');
    }

    public function register(){
    	return view('company.register');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/login');
    }
    public function login(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            
            return redirect('index');
                

        }else{
            return redirect('/login')->with('GAGAL','Password atau Username Salah');
        }    
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
