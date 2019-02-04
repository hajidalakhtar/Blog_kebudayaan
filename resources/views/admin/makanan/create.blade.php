@extends('layouts.app')

@section('content')
{{-- <create  v-model="model"></create> --}}

<div class="container mt-5">
<a href="{{route('makanan.admin.home')}}" class="btn btn-primary mb-3">BACK</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Upload Makanan </h1>
        <form action="{{route('makanan.admin.store')}}" method="Post" enctype="multipart/form-data">
                  @csrf
                <label for="title">Nama Makanan</label>
                <input type="text" class="form-control" name="nama_makanan">
                <br>

                  <div class="row">
                    <div class="col-md-6"> <label for="isi">Daerah Asal Makanan</label></div>
                </div>
               
                    <input type="text" class="form-control" name="asal_daerah">
<br>
                <label for="isi">Deskripsi Makanan</label>
                <textarea id="" cols="30" rows="10" class="form-control" name="deskripsi" ></textarea>
                <br>
                <label for="isi">Foto Makanan</label><br>
                <input type="file" name="foto_makanan" >
                <br>        
         
            
                <input type="submit" value="POST" class="btn btn-primary mt-4">
                </div>
            </form>
        </div>
    </div>
</div>
 </div>


@endsection
