@extends('layouts.makanan')

@section('content')
<style>
.text-concat {
  position: relative;
  display: inline-block;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 3.6em; /* (Number of lines you want visible) * (line-height) */
  line-height: 1.2em;
  text-align:justify;
}

.text.ellipsis::after {
  position: absolute;
  right: -12px; 
  bottom: 4px;
}

</style>

<div>
  <div class="container">
    <h1 class="text-center mt-5">Makanan Indonesia</h1>
    <div class="row mt-3">
      <div class="col-md-6  col-sm-12">
        <img src="storage/img/rendang.jpg" alt="" srcset="" width="100%" height='80%' class="mt-4">
        
      </div>
      <div class="col-md-6 mt-4  col-sm-12">
        Buat kalian yang suka dengan acara jalan2, pastinya kurang afdol jika kalian ga nyobain makanan khas di tempat yang kalian kunjungi. mungkin dari sekian banyak travelista yang sering jalan2 ada beberapa yang belum tau, mengenal, ataupun mencoba makanan khas dari tempat yang telah di kunjungi. untuk itu saya akan share sedikit pengetahuan tentang makanan khas yang nantinya bisa kalian coba jika kalian berkunjung ke tempat2 wisata di seluruh Indonesia.dan berikut ini 21 Makanan/Masakan Khas dari berbagai daerah di Indonesia:
      </div>
    </div>
    <h1 class="text-center mt-5">Makanan Indonesia </h1>
    <div class="row  justify-content-center ">
      @foreach ($makanan as $makanans)
      <div class="col-md-3 mt-5 " >
        <div class="card">
            <a href="{{route('details.makanan',$makanans->slug)}}" class=" text-dark">
          <img class="card-img-top" src="/storage/makanan/{{$makanans->foto_makanan}}" alt="" style="width:100%;height:200px;">
         </a>
          <div class="card-head">
            <h4 class="text-center mt-4">
            <a href="{{route('details',$makanans->slug)}}" class="text-dark" style="overflow: hidden; text-overflow: ellipsis; max-width: 20ch; text-decoration:none">{{$makanans->nama_makanan}}</a>
            </h4>
          </div>
          <div class="card-body">
          <div class="text ellipsis">
            <span class="text-concat">
              {{$makanan->deskripsi}}
            </span>
          </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
  <p class="text-center">  <a href="{{route('allartikel')}}" class="btn mt-5 text-white" style="background-color:#ceae8a">Baca Selengkap </a></p>
  </div>
</div>
@endsection
