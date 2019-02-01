@extends('layouts.app')

@section('content')
{{-- <create  v-model="model"></create> --}}

<div class="container">
<a href="{{route('admin.index')}}" class="btn btn-primary mb-3">BACK</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Edit post </h1>
            <form action="{{ route('update',$blog->id) }}" method="Post" enctype="multipart/form-data">
                  @csrf
                <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                <label for="isi">Isi</label>
            <textarea name="isi" id="" cols="30" rows="10"  class="form-control">{{$blog->isi}}</textarea>
                <br>
                <label for="isi">Thumbnail</label><br>
                <input type="file" name="image" src="images/f.jpg" >
                {{-- <input type="image" src="/storage/img/{{$blog->img}}"> --}}
                <br>        
         
            
                <input type="submit"  value="POST" class="btn btn-primary mt-4">
                </div>
            </form>
        </div>
    </div>
</div>
 </div>


@endsection