<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
      $blog = Blog::paginate(5);
    return view('admin.home',['blog' => $blog]);
    }
}
