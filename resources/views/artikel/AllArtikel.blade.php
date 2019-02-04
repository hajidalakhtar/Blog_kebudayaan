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

</style>

<div>
  <div class="container">
   
      <h1 class="mt-5 text-center">Artikel Kebudayaan</h1>
    <div class="row  justify-content-center ">
      @foreach ($blog as $blogs)
      <div class="col-md-4 mt-5 " >
        <div class="card">
            <a href="{{route('details',$blogs->slug)}}" class=" text-dark">
          <img class="card-img-top" src="/storage/img/{{$blogs->img}}" alt="" style="width:100%;height:200px;">
         </a>
          <div class="card-head">
            <h4 class="text-center mt-4">
            <a href="{{route('details',$blogs->slug)}}" class="text-dark" style="overflow: hidden; text-overflow: ellipsis; max-width: 20ch; text-decoration:none">{{$blogs->title}}</a>
            </h4>
          </div>
          <div class="card-body">
          <div class="text ellipsis">
            <span class="text-concat">
              {{$blogs->isi}}
            </span>
          </div>
          </div>
        </div>
      </div>
      @endforeach
      

    </div>
  </div>
</div>
@endsection
