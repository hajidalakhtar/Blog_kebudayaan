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
<a href="{{route('admin.index')}}" class="btn btn-primary mb-3">BACK</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Create post </h1>
            <form action="{{ route('admin.store') }}" method="Post" enctype="multipart/form-data">
                  @csrf
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
                <label for="isi">Isi</label>
                <textarea name="isi" id="mytextarea" cols="30" rows="10" class="form-control">


                </textarea>
                <br>
                <label for="isi">Thumbnail</label><br>
                <input type="file" name="image" >
                <br>        
         
            
                <input type="submit" value="POST" class="btn btn-primary mt-4">
                </div>
            </form>
        </div>
    </div>
</div>
 </div>


@endsection
