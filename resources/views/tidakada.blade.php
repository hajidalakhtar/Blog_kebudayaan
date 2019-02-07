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

  <div class="container  ">
   
  <h1 class="mt-5 text-center mb-5 mt-5">Data Tidak Ada </h1>
      <br>
       <form class="form-inline my-2 my-lg-0 " method="GET" action="/search/{{$data}}">
          <input class="form-control mr-sm-2" type="search" placeholder="Cari Artikel" name="search" aria-label="Search" style="width:100%">
      </form>
   <br class="mb-5">
   
</div>
</div class="mb-5">
<br class="mb-5">
<br class="mb-5">
<br class="mb-5">
<br class="mb-5">
@endsection
