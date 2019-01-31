@extends('layouts.app')

@section('content')
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:-24px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.indonesiakaya.com/uploads/_images_home_big_banner/1349-x-450-barapan-kebo---sumbawa-barat-okjpg.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.indonesiakaya.com/uploads/_images_home_big_banner/1349-x-450-barapan-kebo---sumbawa-barat-okjpg.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.indonesiakaya.com/uploads/_images_home_big_banner/1349-x-450-barapan-kebo---sumbawa-barat-okjpg.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div>
  <div class="container">

    <h1 class="text-center mt-5">Artikel Budaya </h1>
    <div class="row  justify-content-center ">
      @foreach ($blog as $blog)
      <div class="col-md-4 mt-5 " >
        <div class="card">
            <a href="{{route('details',$blog->slug)}}" class=" text-dark">
          <img class="card-img-top" src="/storage/img/{{$blog->img}}" alt="" style="width:100%;height:200px;">
         </a>
          <div class="card-head">
            <h2 class="text-center mt-4">
            <a href="{{route('details',$blog->slug)}}" class=" text-dark">{{$blog->title}}</a>
            </h2>
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>

@endsection
