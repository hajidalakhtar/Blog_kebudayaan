@extends('layouts.tokoh')

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
.atas-bawah {
  position: absolute;
  top: 40%;
  left:10%;
  right:10%;
}
}


</style>
<div class="container mt-5">
  <h1 class="text-center">Sejarah Indonesia</h1>
  <div class="row mt-5">
    <div class="col-md-6">
      <img src="/storage/img/Proklamasi.jpg" alt="" srcset="" width="100%"  style="border-radius:10px;">
    </div>
    <div class="col-md-6 ">
      <p style="font-size:16px">Setelah indonesia terbebas dari belanda,indonesia menganggap bahwa jepang penyelamatnya,tetapi sebenarnya jepang malah berniat sm dengan belanda,jepang mulai menjajah rakyat indonesia dengan melakukan kerja paksa. Tetapi demi mengambil simpati rakyat indonesia,jepang membentuk Bpupki dan dilanjut oleh Ppki.Singkat cerita saat jepang kalah melawan sekutu kaum muda memanfaatkan kesempatan ini untuk memproklamasikan kemerdekaan indonesia tetapi kaum tua tidak menginginkannya,soekarno pun tidak setuju jika kemerdekaan dilakukan tanpa sepengetahuan jepang,akhirnya kaum muda mengasingkan ir soekarno diasingkan di rengasdengklok selama beberapa hari dengan tujuan agar ir soekarno tidak terhasut omongan sekutu.Setelah beberapa hari akhirnya ir soekarno setuju dan merekapun pergi kerumah laksamana muda maedah untuk menyusun naskah teks proklamasi lalu membacakannya didepan rumah ir soekarno di jalan pegansaan timur no 56 

    </div>
  </div>
</div>

<h1 class="text-center mt-5">Tokoh Indonesia</h1>
<div class="container">

<div class="row mt-3 justify-content-center">
    @foreach ($tokoh as $tokoh)
    <div class="col-md-3 mt-4" style="padding:1">
    <a href="{{Route('details.tokoh',$tokoh->slug)}}">
      <div class="card" style="padding: 0">
        <div class="card-body" style="padding: 0">

      <div style="position:absolute; opacity:1 ;background-color: rgb(0, 0, 0,0.5); width:100%;height:100%" class="pb-2 hover1 ">
        <div class="text-center text-white atas-bawah">
               
        <h4 class="text-center text-white ">{{$tokoh->nama_tokoh}}</h4>
                <p >{{$tokoh->tgl_lahir}} - {{$tokoh->tgl_wafat}}</p>
           </div> 
         </div>
        <img class="card-img-top img-thumbnail" src="/storage/tokoh/{{$tokoh->foto_tokoh}}" alt="" style="width:100%;height:200px;">
      </div>
    </div>
  </a>
    </div>
    @endforeach
     <a href="{{route('tokoh.home.all')}}" class="btn mt-5 text-white" style="background-color:#ceae8a">Baca Selengkap </a>
    </div>

</div>
</div>


@endsection