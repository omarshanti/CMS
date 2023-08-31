@extends('layouts.app')
@section('header')
    <!-- Header -->
    <header class="header text-white h-fullscreen pb-80" style="background-image: url({{asset($post->photo)}});" data-overlay="9">
      <div class="container text-center">

        <div class="row h-100">
          <div class="col-lg-8 mx-auto align-self-center">

            <p class="opacity-70 text-uppercase small ls-1"></p>
            <h1 class="display-4 mt-7 mb-8">{{$post->title}}</h1>
            <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="{{route('single',$post->id)}}">{{$post->user->name}}</a></p>
            <p><img class="avatar avatar-sm" src="{{asset(Gravatar::src($post->user->email))}}" alt="{{$post->title}}"></p>

          </div>

          <div class="col-12 align-self-end text-center">
            <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
          </div>
        
        </div>
       
      </div>
    </header><!-- /.header -->
@endsection

    <!-- Main Content -->
    @section('content')
    <main class="main-content">


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section" id="section-content">
        
        <div class="text-center my-6">
          <img class="rounded-md" src="{{asset($post->photo)}}" width="900px" height="900px" alt="$post->title">
        </div>
        <div class="container">

          <div class="row">
            <div class="col-lg-8 mx-auto">

              <p class="lead">{!!$post->content!!}</p>

              <hr class="w-100px">

             
            </div>
          </div>
          <div class="gap-xy-2 mt-6">
            @foreach($post->tags as $tag)
            <a class="badge badge-pill badge-secondary" href="#">{{$tag->tag}}</a>
            @endforeach
          </div>
        </div>
      </div>
      <div id="disqus_thread"></div>
 </main>
@endsection
@section('scripts')
<script>
  /**
   *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
   *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
   *  PLATFORM OR CMS.
   *  
   *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
   *  https://disqus.com/admin/universalcode/#configuration-variables
   */
  
  var disqus_config = function () {
      // Replace PAGE_URL with your page's canonical URL variable
      this.page.url = "{{config('app.url')}}/blog/{{$post->id}}";  
      
      // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      this.page.identifier = "{{$post->id}}"; 
  };
 
  
  (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
      var d = document, s = d.createElement('script');
      
      // IMPORTANT: Replace EXAMPLE with your forum shortname!
      s.src = 'https://EXAMPLE.disqus.com/embed.js';
      
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
  })();
</script>
<noscript>
  Please enable JavaScript to view the 
  <a href="https://disqus.com/?ref_noscript" rel="nofollow">
      comments powered by Disqus.
  </a>
</noscript>
@endsection