<?php

namespace App\Http\Controllers;
use App\MakananIndonesia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $maknan = MakananIndonesia::all();
        return view('admin.makanan.home', ['maknan'=>$maknan]);
        
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
        $makanan = MakananIndonesia::all();
        return view('makanan.makanan', ['makanan' => $makanan]);
    }
    public function details($slug)
    {
        $makanan = MakananIndonesia::where('slug',$slug)->first();
        return view('makanan.detailsmakanan', ['makanan'=>$makanan]);
    }
}
