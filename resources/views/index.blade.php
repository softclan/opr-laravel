@extends('layouts.master')

@section('title','Read, Share, Earn')



@section('content')
  
  <section style="background: url({{asset('frontend/img/hero.jpg')}} ); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1>Oprextra Income</h1>
            <br />
            <h3>Get in on latest updates</h3>
              <h3>Earn while reading and sharing posts!</h3>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="h3">Featured-Posts</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="featured-posts no-padding-top">
      <div class="container">
        
        @foreach($posts as $post)
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-12">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="#">{{$post->category}}</a><a href="#">Technology</a></div><a href="{{Request::url() . '/' . $post->title_slug}}">
                    <h2 class="h4">{{$post->title}}</h2></a>
                </header>
                <p>{{str_limit($post->content, 100)}}</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    
                    <div class="title"><span>{{$post->user->user_name}}</span></div></a>
                  <div class="date"><i class="icon-clock"></i>{{ $post->created_at->diffForHumans() }}</div>
                  <a href="http://example.com/article1.html#disqus_thread" data-disqus-identifier="{{$post->id}}">First article</a>
                  <div class="comments"><i class="icon-comment"></i></div>
                </footer>
              </div>
            </div>
          </div>
        </div>
        @endforeach
     </div>   
    </section>
    <!-- Divider Section-->
    <section style="background: url(img/divider-bg.jpg); background-size: cover; background-position: center bottom" class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2>Oprextra Income</h2><a href="#" class="hero-link">Know More</a>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- Gallery Section-->
    <section class="gallery no-padding">    
      <div class="row">
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-1.jpg" data-fancybox="gallery" class="image"><img src="{{asset('frontend/img/gallery-1.jpg')}} " alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-2.jpg" data-fancybox="gallery" class="image"><img src="{{asset('frontend/img/gallery-2.jpg')}} " alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-3.jpg" data-fancybox="gallery" class="image"><img src="{{asset('frontend/img/gallery-3.jpg')}} " alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-4.jpg" data-fancybox="gallery" class="image"><img src="{{asset('frontend/img/gallery-4.jpg')}} " alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
      </div>
    </section>
    <!-- Page Footer-->
<script id="dsq-count-scr" src="//oprextra-co.disqus.com/count.js" async></script>
@endsection