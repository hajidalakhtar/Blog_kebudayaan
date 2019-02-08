@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{route('admin.create')}}" class="btn  mb-3 text-white" style='background-color:#ceae8a'>Create Post</a>
        <a href="{{route('tokoh.admin.home')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Tokoh indonesia</a>
        <a href="{{route('makanan.admin.home')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Makanan Indonesia</a>
        <div class="card">
                <div class="card-header text-center text-white"  style='background-color:#ceae8a' ><b> Artikel Budaya</b></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <table class="table mt-3">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Title</th>
                            <th scope="col">Bitly</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog as $blogs)
                                <tr>
                                    
                            <th scope="row">{{$blogs->id}}</th>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$blogs->slug}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$blogs->title}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 30ch;"> <a href="{{$blogs->bitly}}"> {{$blogs->bitly}}</a></td>
                            <td><a href="{{route('edit',$blogs->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('delete',$blogs->id)}}"class="btn btn-danger mr-1">Delete</a><a href="{{route('details',$blogs->slug)}}"class="btn btn-success">View</a> </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right">{{ $blog->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
