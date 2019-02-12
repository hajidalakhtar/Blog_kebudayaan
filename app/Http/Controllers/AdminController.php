<?php

namespace App\Http\Controllers;
use App\Blog;
Use App\Tokoh;
use App\MakananIndonesia;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
      $blog = Blog::paginate(5);
          $makananCount = MakananIndonesia::count();
        $blogCount = Blog::count();
        $tokohCount = Tokoh::count();

    return view('admin.home',['blog' => $blog,'makananCount' => $makananCount,'blogCount'=> $blogCount,'tokohCount'=>$tokohCount]);
    }
}
