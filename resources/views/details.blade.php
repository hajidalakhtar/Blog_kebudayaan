@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">{{$blog->title}}</h1> 

       &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span> {{$blog->isi}}</span>
        </div>    
    </div>    
</div>  


@endsection
