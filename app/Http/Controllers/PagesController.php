<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function index()
    {
        return view('company.index');
    }

    public function profile(){
        return view('company.costumer.profile');
    }

    public function produk(){
        return view('company.costumer.produk');
    }

    public function berita(){
        return view('company.costumer.berita');
    }

    public function tutor(){
        return view('company.costumer.tutor');
    }

    public function legalitas(){
        return view('company.costumer.legalitas');
    }

    public function analisa(){
        return view('company.costumer.analisa');
    }
 
    public function partner(){
        return view('company.costumer.partner');
    }
 
}
