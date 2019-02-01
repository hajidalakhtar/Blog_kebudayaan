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

       &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p class="text-center"> {{$blog->isi}}</p>
        </div>    
    </div> 
        </div>
   <div class="col-md-3">
<div class="card">
    <div class="card-body">
        <h4>Shorter Url</h4>

        <a href="https://qr.johneletto.com/http://localhost:8000/blog/details/{{$blog->slug}}">
        <img src="https://qr.johneletto.com/http://localhost:8000/blog/details/{{$blog->slug}}" alt="" srcset="" width="100%" >  
        </a>
        <a href="{{$blog->bitly}}" class="text-center">{{$blog->bitly}}</a>

    </div>
</div>
   </div>
   <div class="row mt-5">
        @foreach ($allBlog as $allBlog)
        <div class="col-md-4">
    <a href="{{route('details',$allBlog->slug)}}">
           <div class="card">
               <div class="card-body" style="padding: 0">
                <img src="/storage/img/{{$allBlog->img}}" alt="" width="100%"  >
            </div>
           </div>
        </a>
    </div>
       @endforeach 
         
   </div>


    </div>  
 </div>



@endsection

@section('script')

@endsection