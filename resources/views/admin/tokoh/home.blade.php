@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{route('tokoh.admin.create')}}" class="btn  mb-3 text-white" style='background-color:#ceae8a'>Create Post</a>
        <a href="{{route('makanan.admin.home')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Makanan Indonesia</a>
        <a href="{{route('artikel.admin.home')}}" class="btn  mb-3 ml-3 text-white float-right" style='background-color:#ceae8a'>Artikel Budaya</a>
        <div class="card">
                <div class="card-header text-center text-white"  style='background-color:#ceae8a' ><b> Tokoh Indonesia</b></div>
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
                            <th scope="col">Bitly</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($tokoh as $data)
                            <th scope="row">{{$data->id}}</th>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$data->slug}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{$data->nama_tokoh}}</td>
                            <td  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 30ch;"><a href="{{$data->bitly}}"> {{$data->bitly}}</a></td>
                            <td><a href="{{route('tokoh.edit',$data->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('delete.tokoh',$data->id)}}"class="btn btn-danger mr-1">Delete</a><a href="{{route('details.tokoh',$data->slug)}}"class="btn btn-success">View</a> </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                        </table>
                        <div class="float-right">{{ $tokoh->links() }}</div>
                </div>
            </div>
        </div>
    </div>
       <div class="row mt-5 justify-content-center">
        <div class="col-md-4    ">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/2a78a615889749.56298364a7e09.png" class="ml-4" alt="" width="110px;">
                        </div>
                         <div class="col-md-6 text-center">
                            <h1 style="font-size:40px;" class="mr-4 ">{{$blogCount}}</h1>
                            <p class="mr-4  ">Artikels</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
            <div class="col-md-4    ">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://seeklogo.com/images/S/soekarno-logo-992C701F56-seeklogo.com.png" alt="" width="50px;" class="ml-5">
                        </div>
                         <div class="col-md-6 text-center">
                         <h1 style="font-size:40px;" class="mr-4 ">{{$tokohCount}}</h1>
                            <p class="mr-4  ">Artikels</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
            <div class="col-md-4    ">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://pngimage.net/wp-content/uploads/2018/06/nasi-uduk-png.png" alt="" width="110px;" class="ml-4">
                        </div>
                         <div class="col-md-6 text-center">
                            <h1 style="font-size:40px;" class="mr-4 ">{{$makananCount}}</h1>
                            <p class="mr-4  ">Artikels</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
</div>
@endsection
