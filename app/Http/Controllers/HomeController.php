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
        $blog = Blog::orderBy('id', 'DESC')->paginate(6);
        return view('home',['blog'=>$blog]);
    }
}
