@extends('layouts.app')

@section('content')
<div class="jumbotron" style="padding:0; margin-top:-24px;">
    <img src="/storage/img/{{$blog->img}}" alt="" srcset="" style="width: 100% ;">
</div>
<div class="container">
    
    <div class="row">
        
        <div class="col-md-9">
  <div class="card">
        <div class="card-body">
            <h1 class="text-center">{{$blog->title}}</h1> 

       &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span> {{$blog->isi}}</span>
        </div>    
    </div> 
        </div>
   <div class="col-md-3">
<div class="card">
    <div class="card-body">
        <h4>Artikel Terbaru</h4>

        <a href="https://qr.johneletto.com/http://localhost:8000/blog/details/{{$blog->slug}}">
        <img src="https://qr.johneletto.com/http://localhost:8000/blog/details/{{$blog->slug}}" alt="" srcset="" width="100%" >  
        </a>
    </div>
</div>
   </div>

    </div>  
 </div>



@endsection
