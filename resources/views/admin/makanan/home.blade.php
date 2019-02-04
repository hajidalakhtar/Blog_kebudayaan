@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{route('makanan.admin.create')}}" class="btn  mb-3 text-white" style='background-color:#ceae8a'>Create Post</a>
        <a href="{{route('admin.create')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Makanan Indonesia</a>
        <a href="{{route('admin.create')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Galeri</a>
        <a href="{{route('admin.create')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Artikel Budaya</a>
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
                            <th scope="col">Nama Makanan</th>
                            <th scope="col">Asal Daerah</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($maknan as $maknan)
                            <th scope="row">{{$maknan->id}}</th>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$maknan->slug}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$maknan->nama_makanan}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 30ch;">{{$maknan->asal_daerah}}</td>
                            <td><a href="{{route('tokoh.edit',$maknan->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('makanan.admin.delete',$maknan->id)}}"class="btn btn-danger mr-1">Delete</a><a href="{{route('details.tokoh',$maknan->slug)}}"class="btn btn-success">View</a> </td>
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
