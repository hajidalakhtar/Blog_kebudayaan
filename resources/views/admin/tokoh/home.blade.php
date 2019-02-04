@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{route('tokoh.admin.create')}}" class="btn  mb-3 text-white" style='background-color:#ceae8a'>Create Post</a>
        <a href="{{route('makanan.admin.home')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Makanan Indonesia</a>
        <a href="{{route('admin.create')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Galeri</a>
        <a href="{{route('artikel.admin.home')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Artikel Budaya</a>
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
                            <th scope="col">Nama_tokoh</th>
                            <th scope="col">riwayat</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($tokoh as $tokoh)
                            <th scope="row">{{$tokoh->id}}</th>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$tokoh->slug}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$tokoh->nama_tokoh}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 30ch;">{{$tokoh->riwayat}}</td>
                            <td><a href="{{route('tokoh.edit',$tokoh->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('delete.tokoh',$tokoh->id)}}"class="btn btn-danger mr-1">Delete</a><a href="{{route('details.tokoh',$tokoh->slug)}}"class="btn btn-success">View</a> </td>
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
