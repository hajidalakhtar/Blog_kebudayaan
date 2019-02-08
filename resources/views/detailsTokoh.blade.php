@extends('layouts.tokoh')

@section('content')


<div class="container mt-5">
    
    <div class="row">
        
        <div class="col-md-9">
  <div class="card">
        <div class="card-body">
            <h1 class="text-center">{{$tokoh->nama_tokoh}}</h1> 
            <br>

       <p class=""> {{$tokoh->riwayat}}</p>
        </div>    
    </div> 
    <div id="disqus_thread" class="mt-5"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{$tokoh->slug}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://budayaindonesia-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
 </div>


   <div class="col-md-3 " >
        <div>
            <div class="card">
                <div class="card-body" >
                   <p class="text-center h5 pt-1">Foto {{$tokoh->nama_tokoh}}</p> 
                    
    <img src="/storage/tokoh/{{$tokoh->foto_tokoh}}" alt="" srcset="" style="width: 100% ;">

   <p class="text-center h4 mt-3"> {{$tokoh->tgl_lahir}} - {{$tokoh->tgl_wafat}}</p>
                </div>
            </div>

<div class="card mt-5">
    <div class="card-body">
        <h4 class="text-center ">Shorter Url</h4>

        <div class="text-center">
            {!! QrCode::size(200)->generate(Request::url()); !!}    
            <p class="text-center"><a href="{{$tokoh->bitly}}" >{{$tokoh->bitly}}</a></p> 
        </div>

    </div>
</div>

</div>
    </div>  
        </div>

        </div>



@endsection

@section('script')

@endsection