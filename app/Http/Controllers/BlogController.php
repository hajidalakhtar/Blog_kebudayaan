<?php

namespace App\Http\Controllers;
use App\Blog;
use Bitly;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return redirect('admin/home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $blog = new Blog;
        $blog->title = $request->title;
        $slug =  Str::slug($request->title);
        $blog->slug =  $slug ;
        $blog->isi = $request->isi;
        $url = app('bitly')->getUrl('http://127.0.0.1:8000/blog/details/'.$slug); // http://bit.ly/nHcn3
         $blog->bitly = $url;
        $image = $request->image->store('public/img');
        $blog->img = basename($image);
        $blog->save();
        return redirect('admin/home');
   //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $allBlog = Blog::paginate(3);
        $blog = Blog::where('slug',$slug)->first();
        return view('details',['blog' => $blog,'allBlog'=>$allBlog]);
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.edit',['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $blog = Blog::find($id);
        $blog->title = $request->title;
        $slug =  Str::slug($request->title);
        $blog->slug =  $slug ;
        $blog->isi = $request->isi;
         $blog->bitly = $blog->bitly;
        $image = $request->image->store('public/img');
        $blog->img = basename($image);
        $blog->save();
        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('admin/home');
    }
    public function blogApi()
    {
        $blog = Blog::all();
        return $blog;
    }
    public function blogApiDetail($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return $blog;
        
    }
      public function createArtikel(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->isi = $request->isi;
        $image = $request->image->store('public/place');
        $blog->img = "tes.png";
        $blog->save();
        // return (['pesan'=>'bisa'] );
        return redirect('admin/home');
   //
    }
}
