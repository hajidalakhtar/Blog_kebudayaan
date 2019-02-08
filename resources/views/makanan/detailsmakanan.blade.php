@extends('layouts.makanan')

@section('content')


<div class="container mt-5">
    
    <div class="row">
        
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">{{$makanan->nama_makanan}}</h1> 
                        <p class="text-center" style="margin-top: -10px;">{{$makanan->asal_daerah}}</p>
                        <img  class="float-left mr-4" src="/storage/makanan/{{$makanan->foto_makanan}}" alt="" width="30%"  >
                        <p class=""> {{$makanan->deskripsi}}</p>
                 </div>    
             </div> 
        <div id="disqus_thread" class="mt-5"></div>
            <script>
            var disqus_config = function () {
            this.page.url = '{{ Request::url() }}';  
            this.page.identifier = {{$makanan->slug}}; 
            };
            (function() { 
            var d = document, s = d.createElement('script');
            s.src = 'https://budayaindonesia-1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                        
        </div>

            <div class="col-md-3">
            <div class="card ">
                <div class="card-body">
                    <h4>Shorter Url</h4>
                    <div class="text-center">

                        {!! QrCode::size(200)->generate(Request::url()); !!}    
                        <p class="text-center"><a href="{{$makanan->bitly}}" >{{$makanan->bitly}}</a></p> 
                    </div>
                    </div>
            </div>
            </div>
        </div>
        </div>



@endsection

@section('script')

@endsection