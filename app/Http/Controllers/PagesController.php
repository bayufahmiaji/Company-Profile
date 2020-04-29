<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Binar;
use App\News;
use App\Analysis;


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
        $news = News::orderBy('id','desc')->get();
        return view('company.costumer.berita',compact('news'));
    }
     public function berita2(News $news){
        return view('company.costumer.detail-berita',compact('news'));
    }

    public function tutor(){
        $binar = Binar::all();
        return view('company.costumer.tutor',compact('binar'));
    }

    public function legalitas(){
        return view('company.costumer.legalitas');
    }

    public function analisa(){
        $analyst = Analysis::orderBy('id','desc')->get();
        return view('company.costumer.analisa',compact('analyst'));
    }
    public function analisa2(Analysis $analysis){
      
        return view('company.costumer.detail-analyst',compact('analysis'));
    }
 
    public function partner(){
        $partner = Partner::all();
        return view('company.costumer.partner',compact('partner'));
    }
 
}
