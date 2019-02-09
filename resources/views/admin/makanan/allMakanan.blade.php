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
.center {
  display: block;
  margin-left: 37%;
  margin-right: 40%;
  width: 100%;
}

</style>

<div>
  <div class="container ">
   
      <h1 class="mt-5 text-center mb-5">Artikel Kebudayaan</h1>
       <form class="form-inline my-2 my-lg-0 " method="GET" action="/search/makanan">
          <input class="form-control mr-sm-2" type="search" placeholder="Cari Artikel" name="search" aria-label="Search" style="width:100%">
      </form>
    <div class="row  justify-content-center ">
      @foreach ($makanan as $data)
      <div class="col-md-4 mt-4 " >
        <div class="card">
            <a href="{{route('details',$data->slug)}}" class=" text-dark">
          <img class="card-img-top" src="/storage/makanan/{{$data->foto_makanan}}" alt="" style="width:100%;height:200px;">
         </a>
          <div class="card-head">
            <h4 class="text-center mt-4">
            <a href="{{route('details',$data->slug)}}" class="text-dark" style="overflow: hidden; text-overflow: ellipsis; max-width: 20ch; text-decoration:none">{{$data->nama_makanan}}</a>
            </h4>
          </div>
          <div class="card-body">
          <div class="text ellipsis">
            <span class="text-concat">
              {!!$data->deskripsi!!}

            </span>
          </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="mt-5">
      {{ $makanan->links() }}

    </div>
  </div>
</div>
@endsection
