@extends('layouts.blog')


@section('title')

@endsection






<!-- Navbar -->
@section('navbar')

<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
  <div class="container">
    
    <div class="navbar-left">
      <button class="navbar-toggler" type="button">&#9776;</button>
    <a class="navbar-brand" href="{{route('welcome')}}">
        <img class="logo-dark" src="{{asset('img/logo-dark.png')}}" alt="logo">
        <img class="logo-light" src="{{asset('img/logo-light.png')}}" alt="logo">
      </a>
    </div>
    
    <section class="navbar-mobile">
      <span class="navbar-divider d-mobile-none"></span>
      
      <ul class="nav nav-navbar">
        
        
        
        
        
        
        
        
      </ul>
    </section>
    
    
    
  </div>
</nav>
@endsection


<!-- Header -->
@section('header')



<header class="header text-white h-fullscreen pb-80" style="background-image: url({{asset('/storage/'.$post->image)}});" data-overlay="9">
  <div class="container text-center">
    
    <div class="row h-100">
      <div class="col-lg-8 mx-auto align-self-center">
        
        <p class="opacity-70 text-uppercase small ls-1">Product</p>
        <h1 class="display-4 mt-7 mb-8">{{$post->title}}</h1>
        <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">{{$post->user->name}}</a></p>
        <p><img class="avatar avatar-sm" src="{{Gravatar::src($post->user->email)}}" alt="..."></p>
        
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
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 mx-auto">
            
            <p class="lead">{{$post->description}}.</p>
            
            <hr class="w-100px">
            
            {!!$post->content!!}
            
          </div>
          
          
          
          
          
          
          
        </div>
      </div>
      
      
      
      <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Comments
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="section bg-gray">
          <div class="container">
            
            <div class="row">
              <div class="col-lg-8 mx-auto">
                
                
                
                
                <hr>
                
                
                <div id="disqus_thread"></div>
                <script>
                  
                  /**
                  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                  *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                  
                  var disqus_config = function () {
                    this.page.url = "{{ config('app.url') }}/blog/posts/{{$post->id}}";  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = "{{$post->id}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                  };
                  
                  (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document, s = d.createElement('script');
                  s.src = 'https://saas-blog-jwtvez7atx.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
                })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              
              
            </div>
          </div>
          
        </div>
      </div>
      
      
      
    </main>
    
    @endsection
    
    
    
    