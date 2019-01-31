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

    <div class="row mt-5 justify-content-center ">
      @foreach ($blog as $blog)
      <div class="col-md-3 " >
        <div class="card">
          <div class="card-head">
            <h2 class="text-center">
            <a href="{{route('details',$blog->slug)}}" class=" text-dark">{{$blog->title}}</a>
            </h2>
          </div>
          <div class="card-body">
          <p>{{$blog->isi}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>

@endsection
