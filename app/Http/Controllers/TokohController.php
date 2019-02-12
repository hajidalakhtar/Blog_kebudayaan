<?php

namespace App\Http\Controllers;
Use App\Tokoh;
use Bitly;
use App\MakananIndonesia;
use App\Blog;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TokohController extends Controller
{

    public function index()
    {
        $tokoh  = Tokoh::orderBy('id', 'DESC')->paginate(12);
        return view('tokohindonesia', ['tokoh'=>$tokoh]);
        
    }
    public function homeAdmin()
    {

        $tokoh  = Tokoh::paginate(5);
        $makananCount = MakananIndonesia::count();
        $blogCount = Blog::count();
        $tokohCount = Tokoh::count();
        return view('admin.tokoh.home', ['tokoh'=>$tokoh,'makananCount' => $makananCount,'blogCount'=> $blogCount,'tokohCount'=>$tokohCount]);

    }
    public function create()
    {
        return view('admin.tokoh.create');
    }
    public function store(Request $request)
    {
        $tokoh = new Tokoh;
        $slug =  Str::slug($request->nama_tokoh);
        $tokoh->slug = $slug;
        $tokoh->nama_tokoh = $request->nama_tokoh;
        $tokoh->tgl_lahir = $request->tgl_lahir;
        $tokoh->tgl_wafat = $request->tgl_wafat;
        $tokoh->riwayat = $request->riwayat;
        $image = $request->foto_tokoh->store('public/tokoh');
        $url = app('bitly')->getUrl('http://127.0.0.1:8000/tokoh/details/'.$slug);
        $tokoh->bitly = $url;
        $tokoh->foto_tokoh = basename($image);
        $tokoh->save();
        return redirect('/admin/tokoh/home');
    }
     public function update(Request $request, $id)
    {
        $tokoh = Tokoh::find($id);
        $slug =  Str::slug($request->nama_tokoh);
        $tokoh->slug = $slug;
        $tokoh->nama_tokoh = $request->nama_tokoh;
        $tokoh->tgl_lahir = $request->tgl_lahir;
        $tokoh->tgl_wafat = $request->tgl_wafat;
        $tokoh->riwayat = $request->riwayat;
        $image = $request->foto_tokoh->store('public/tokoh');
        $tokoh->bitly = $tokoh->bitly;
        $tokoh->foto_tokoh = basename($image);
        $tokoh->save();
        return redirect('/admin/tokoh/home');
    }
    public function delete($id)
    {
        $tokoh = Tokoh::destroy($id);
        return redirect('admin/tokoh/home');
    }
    public function show($slug)
    {
        $now = Carbon::now()->format('H:i');
        $alltokoh = Tokoh::paginate(4);
        $tokoh = Tokoh::where('slug',$slug)->first();
        return view('detailsTokoh',['tokoh' => $tokoh ,'tanggal'=>$now]);
    }
    public function edit($id)
    {
        $tokoh = Tokoh::find($id);
        return view('admin.tokoh.edit', ['tokoh'=>$tokoh]);
    }
    public function allTokoh()
    {
        $tokoh = Tokoh::orderBy('id', 'DESC')->paginate(12);
        return view('semuatokoh', ['tokoh'=>$tokoh]);
    }
    public function allApi()
    {
        $tokoh = Tokoh::all();
        return $tokoh;
    }
    public function apidetails($slug)
    {
         $tokoh = Tokoh::where('slug',$slug)->first();
         return $tokoh;
    }
      public function search(Request $request)
    {
        $search = $request->get('search');
        $tokoh = Tokoh::where('nama_tokoh','like','%'.$search.'%')->paginate(5);
        $tidakada = "tokoh";
        if(count($tokoh) > 0)
        return view('semuatokoh', ['tokoh'=>$tokoh]);
        else 
        return view('tidakada',['data'=>$tidakada]);
        

    }
    
}
