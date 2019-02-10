@extends('layouts.app')

@section('content')

<div class="jumbotron" style="padding:0; margin-top:-24px;">
    <img src="/storage/img/{{$blog->img}}" alt="" srcset="" style="width: 100% ;">
</div>
<div class="container">
    
    <div class="row">
        
        <div class="col-md-9">
  <div class="card">
        <div class="card-body">
            <h1 class="text-center">{{$blog->title}}</h1> 
            <br>

       <p class="text-center"> {!!$blog->isi!!}</p>
        </div>    
    </div> 
    <div id="disqus_thread" class="mt-5"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{$blog->slug}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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

    

   <div class="col-md-3" >
        <div>

<div class="card">
    <div class="card-body">
        <h4 class="text-center h1" >{{$tanggal}}</h4>

            <div class=" text-center" style=" margin-top:-18px; "> {!! QrCode::size(200)->generate(Request::url()); !!}  </div>  
      <p class="text-center"><a href="{{$blog->bitly}}" >{{$blog->bitly}}</a></p> 

    </div>
</div>
<div class="card mt-5">
    <div class="card-body">
   <div class="row ">
           <h4 class="">Random Artikel</h4>
        @foreach ($allBlog as $allBlog)
        <a href="{{route('details',$allBlog->slug)}}">
           <div class="card">
               <div class="card-body" style="padding: 0">
                <div style="position:absolute; opacity:1 ;background-color: rgb(0, 0, 0,0.8);width:100%;height:100%" class="pb-2 hover1">
                <p class="text-center text-white pt-3">{{$allBlog->title}}</p>
                </div>
                <img src="/storage/img/{{$allBlog->img}}" alt="" width="100%"  >
            </div>
           </div>
        </a>
       @endforeach 
       
   </div>
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