<?php

namespace App\Http\Controllers;
use App\MakananIndonesia;
use Illuminate\Support\Str;
use Bitly;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $maknan = MakananIndonesia::paginate(10);
        return view('admin.makanan.home', ['makanan'=>$maknan]);
        
    }
    public function create()
    {
        return view('admin.makanan.create');
    }
    public function store(Request $request)
    {
        $makanan = new MakananIndonesia;
        $makanan->nama_makanan = $request->nama_makanan;
        $slug =  Str::slug($request->nama_makanan);
        $makanan->slug =  $slug ;
        $makanan->asal_daerah = $request->asal_daerah;
        $image = $request->foto_makanan->store('public/makanan');
        $url = app('bitly')->getUrl('http://127.0.0.1:8000/makanan/details/'.$slug); 
        $makanan->bitly = $url;
        $makanan->foto_makanan = basename($image);
        $makanan->deskripsi = $request->deskripsi;
        $makanan->save();
        return redirect('/admin/makanan/home');
    }
    public function delete($id)
    {
        $makanan = MakananIndonesia::find($id);
        $makanan->delete();
        return redirect('/admin/makanan/home');
    }
    public function home()
    {
        $makanan = MakananIndonesia::orderBy('id', 'DESC')->paginate(10);
        return view('makanan.makanan', ['makanan' => $makanan]);
    }
    public function details($slug)
    {
        $now = Carbon::now()->format('H:i');
        $makanan = MakananIndonesia::where('slug',$slug)->first();
        return view('makanan.detailsmakanan', ['makanan'=>$makanan,'tanggal'=>$now]);
    }
    public function edit($id)
    {
        $makanan = MakananIndonesia::find($id);
        $makanan->nama_makanan = $request->nama_makanan;
        $slug =  Str::slug($request->nama_makanan);
        $makanan->slug =  $slug ;
        $makanan->asal_daerah = $request->asal_daerah;
        $image = $request->foto_makanan->store('public/makanan');
        $makanan->foto_makanan = basename($image);
        $makanan->deskripsi = $request->deskripsi;
        $makanan->save();
        return redirect('/admin/makanan/home');
    }
    public function viewEdit($id)
    {
        $makanan = MakananIndonesia::find($id);
        return view('admin.makanan.edit', ['makanan'=>$makanan]);
    }
     public function search(Request $request)
    {
        $search = $request->get('search');
        $makana = MakananIndonesia::where('nama_makanan','like','%'.$search.'%')->paginate(5);
           if(count($makana) > 0)
            return view('admin.makanan.allMakanan', ['makanan'=>$makana]);
          else 
        return view('admin.makanan.allMakanan',  ['makanan'=>$makana]);

    }
    public function api()
    {
        $makanan = MakananIndonesia::all();
        return $makanan;
    }
     public function detailsapi($slug)
    {
        $makanan = MakananIndonesia::where('slug',$slug)->first();
        return $makanan;
    }
    public function allMakanan()
    {
        $makanan = MakananIndonesia::paginate(6);
        return view('admin.makanan.allMakanan', ["makanan"=> $makanan]);
    }
    
}
