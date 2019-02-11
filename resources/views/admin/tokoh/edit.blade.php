@extends('layouts.app')

@section('content')
{{-- <create  v-model="model"></create> --}}
<script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=xq47pkcma5pd50cj6jpn1bhnmqshtwc6s9m95uagz0untgg3'></script>
 
 <script>
  tinymce.init({
    selector: 'textarea'
  });
  </script>

<div class="container mt-5">
<a href="{{route('tokoh.admin.home')}}" class="btn btn-primary mb-3">BACK</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Edit Tokoh </h1>
        <form action="{{route('tokoh.update',$tokoh->id)}}" method="Post" enctype="multipart/form-data">
                  @csrf
                <label for="title">Nama Tokoh</label>
        <input type="text" class="form-control" name="nama_tokoh" value="{{$tokoh->nama_tokoh}}">
                <br>

                  <div class="row">
                  <div class="col-md-6"> <label for="isi">Tgl Lahir</label></div>
                  <div class="col-md-6"> <label for="isi" >Tgl Wafat</label></div>
                </div>
               
                <div class="row">
                    <div class="col-md-6"><input type="number"  value="{{$tokoh->tgl_lahir}}" class="form-control" name="tgl_lahir"></div>
                    <div class="col-md-6"><input type="number" value="{{$tokoh->tgl_wafat}}" class="form-control" name="tgl_wafat"></div>
                </div>

                <label for="isi">Riwayat</label>
                <textarea name="riwayat" id="" cols="30" rows="10" class="form-control" > {!!$tokoh->riwayat!!}</textarea>
                <br>
                <label for="isi">Foto Tokoh</label><br>
                <input type="file" name="foto_tokoh" >
                <br>        
         
            
                <input type="submit" value="POST" class="btn btn-primary mt-4">
                </div>
            </form>
        </div>
    </div>
</div>
 </div>


@endsection
