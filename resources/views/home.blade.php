@extends('layouts.app')

@section('content')
<style>
.text-concat {
  position: relative;
  display: inline-block;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 3.6em; 
  line-height: 1.2em;
  text-align:justify;
  word-spacing:-3px;
}

.text.ellipsis::after {
  position: absolute;
  right: -12px; 
  bottom: 4px;
}

</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
      <img class="d-block w-100" src="https://www.indonesiakaya.com/uploads/_images_home_big_banner/1349-x-450-gunung-colo---sulawesi-tengah-okjpg.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.indonesiakaya.com/uploads/_images_gallery/cover/soto_gerabah_1290.jpg" alt="Third slide">
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
    <h1 class="text-center mt-5">Budaya Indonesia</h1>
    <div class="row mt-3">
      <div class="col-md-6  col-sm-12">
        <img src="storage/img/Contoh Keragaman Budaya Indonesia.jpg" alt="" srcset="" width="100%" height='80%' class="mt-4">
        
      </div>
      <div class="col-md-6 mt-5  col-sm-12">
        Budaya atau kebudayaan berasal dari bahasa sansakerta adalah buddhi yg artinya akal. Budaya merupakan aspek – elemen yg berkenaan bersama budi and akal manusia. Indonesia yakni salah satu negeri yg mempunyai kebudayaan yg amat bermacam macam. Karena keanekaragaman budaya and keunikan yg dipunyai, Indonesia jadi daya tarik bangsa lain dari belahan dunia yg mau mengetahuinya bahkan mereka pula ikut mempelajarinya. 

Indonesia ialah suatu negeri di Asia Tenggara di mana membentang hamparan alam hijau yg indah permai, birunya laut yg luas, dgn beraneka ragam tipe hayati yg mampu menciptakan tiap-tiap orang terkesima. Tanah yg subur bersama beraneka ragam sumber daya alam yg ada and nyaris seluruhnya bangsa di dunia membutuhkannya. Hal itu yg menjadikan sekian banyak negeri mau menguasainya dgn kiat menjajah 

Budaya adalah identitas bangsa yg mesti dihormati, dijaga, and butuh dilestarikan biar kebudayaan ini terus ada play on words sanggup jadi warisan anak cucu nanti. Budaya yg ada di Indonesia dinamakan bersama budaya nasional.
      </div>
    </div>
    <h1 class="text-center mt-5">Artikel Budaya </h1> 
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
              {!!$blogs->isi!!}
            </span>
          </div>
          </div>
        </div>
      </div>
      @endforeach
    <a href="{{route('allartikel')}}" class="btn mt-5 text-white" style="background-color:#ceae8a">Baca Selengkap </a>
      

    </div>
  </div>
</div>
@endsection
