@extends('layouts.app')

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

<div>
  <div class="container ">
   
      <h1 class="mt-5 text-center mb-4">Tokoh Indonesia</h1>
        <form class="form-inline my-2 my-lg-0 " method="GET" action="/search/tokoh">
          <input class="form-control mr-sm-2 mb-3" type="search" placeholder="Cari Artikel" name="search" aria-label="Search" style="width:100%">
      </form>
    <div class="row  justify-content-center ">
      @foreach ($tokoh as $data)
    <div class="col-md-3 mt-4" style="padding:1">
    <a href="{{Route('details.tokoh',$data->slug)}}">
      <div class="card" style="padding: 0">
        <div class="card-body" style="padding: 0">

      <div style="position:absolute; opacity:1 ;background-color: rgb(0, 0, 0,0.5); width:100%;height:100%" class="pb-2 hover1 ">
        <div class="text-center text-white atas-bawah">
               
        <h4 class="text-center text-white ">{{$data->nama_tokoh}}</h4>
                <p >{{$data->tgl_lahir}} - {{$data->tgl_wafat}}</p>
           </div> 
         </div>
        <img class="card-img-top img-thumbnail" src="/storage/tokoh/{{$data->foto_tokoh}}" alt="" style="width:100%;height:200px;">
      </div>
    </div>
  </a>
    </div>
    @endforeach
    
    
</div>
<div class="float-right mt-4 "> {{ $tokoh->links() }}</div>
  </div>
</div>
@endsection
