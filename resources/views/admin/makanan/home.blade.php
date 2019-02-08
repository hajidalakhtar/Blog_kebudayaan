@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{route('makanan.admin.create')}}" class="btn  mb-3 text-white" style='background-color:#ceae8a'>Create Post</a>
        <a href="{{route('tokoh.admin.home')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Tokoh indonesia</a>
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
                            <th scope="col">Nama Makanan</th>
                            <th scope="col">Asal Daerah</th>
                            <th scope="col">Bitly</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($makanan as $data)
                            <th scope="row">{{$data->id}}</th>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$data->slug}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$data->nama_makanan}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 30ch;">{{$data->asal_daerah}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 30ch;"><a href="{{$data->bitly}}"> {{$data->bitly}} </a></td>
                            <td><a href="{{route('makanan.edit',$data->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('makanan.admin.delete',$data->id)}}"class="btn btn-danger mr-1">Delete</a><a href="{{route('details.makanan',$data->slug)}}"class="btn btn-success">View</a> </td>
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
