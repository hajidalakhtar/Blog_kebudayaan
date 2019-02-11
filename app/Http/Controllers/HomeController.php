<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $name = ['Rahajeng Rauh', 'wilujeung sumping', 'sambutan kanggo','Salamaik datang','selamat datang','seulamat trôh','Salama Engka','Fokha'];
        $blog = Blog::orderBy('id', 'DESC')->paginate(6);
        return view('home',['blog'=>$blog,'selamat'=>array_random($name)]);
    }
}
