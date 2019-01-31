@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{route('admin.create')}}" class="btn  mb-3 text-white" style='background-color:#ceae8a'>Create Post</a>

            <div class="card">
                <div class="card-header text-center text-white"  style='background-color:#ceae8a' >Dashboard Admin</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    {{-- You are logged in! --}}

                    <table class="table mt-3">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Title</th>
                            <th scope="col">Descripsi</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($blog as $blog)
                                    
                            <th scope="row">{{$blog->id}}</th>
                            <td>{{$blog->slug}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->isi}}</td>
                            <td><a href="" class="btn btn-primary">Edit</a> <a href="{{route('delete',$blog->id)}}"class="btn btn-danger">Delete</a> </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
