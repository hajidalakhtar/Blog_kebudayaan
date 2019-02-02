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
            <br>

       <p class="text-center"> {{$blog->isi}}</p>
        </div>    
    </div> 
        </div>

   <div class="col-md-3 " >
        <div>

<div class="card">
    <div class="card-body">
        <h4>Shorter Url</h4>

        <a href="https://qr.johneletto.com/http://localhost:8000/blog/details/{{$blog->slug}}">
        <img src="https://qr.johneletto.com/http://localhost:8000/blog/details/{{$blog->slug}}" alt="" srcset="" width="100%" >  
        </a>
        <a href="{{$blog->bitly}}" class="text-center">{{$blog->bitly}}</a>

    </div>
</div>
<div class="card mt-5">
    <div class="card-body">
   <div class="row ">
       <h4 class="text-center">Random Artikel</h4>
        @foreach ($allBlog as $allBlog)
        <a href="{{route('details',$allBlog->slug)}}">
           <div class="card">
               <div class="card-body" style="padding: 0">
                <div style="position:absolute; opacity:1 ;background-color: rgb(0, 0, 0,0.8)" class="pb-2 hover1">
                <p class="text-center text-white pt-3">{{$allBlog->title}}</p>
                </div>
                <img src="/storage/img/{{$allBlog->img}}" alt="" width="100%"  >
            </div>
           </div>
        </a>
       @endforeach 
         
   </div>
   </div>

  </div>
</div>
    </div>  

        </div>

 </div>



@endsection

@section('script')

@endsection