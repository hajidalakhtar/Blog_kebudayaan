@extends('layouts.makanan')

@section('content')


<div class="container mt-5">
    
    <div class="row">
        
        <div class="col-md-12">
  <div class="card">
        <div class="card-body">
            <h1 class="text-center">{{$makanan->nama_makanan}}</h1> 
            <br>
                <img  class="float-left mr-4" src="/storage/makanan/{{$makanan->foto_makanan}}" alt="" width="30%"  >

       <p class=""> {{$makanan->deskripsi}}</p>
        </div>    
    </div> 
    <div id="disqus_thread" class="mt-5"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{$makanan->slug}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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


   
        </div>

        </div>



@endsection

@section('script')

@endsection