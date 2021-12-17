@extends('layouts.app')
@section('content')
        <main class="blog-row">
            <div class="blog-header">
                <h1 class="heading"><span>Welcome to my Blog</span></h1>
                <p class="small-tag">If you can thing it, we can web it!</p>
            </div>
            @if(count($posts) > 0)
                <article>
                    @foreach ($posts as $post)                        
                        <div class="article-box">
                                <div class="blog-img-title">
                                    <div class="blog-img">
                                        <a href="/posts/{{$post->id}}" class="blog-box">
                                            <img src="/storage/app/public/cover_images/{{$post->cover_image}}" 
                                            alt="{{$post->title}}">
                                        </a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="/posts/{{$post->id}}" class="blog-box"><p>{{$post->title}}</p></a>
                                        <small>Written on {{$post->created_at}}</small>
                                    </div>
                                </div>
                                <div class="share-btn">
                                    <a class="twitter-share-button share-btn" href="https://twitter.com/intent/tweet" data-size="small">Tweet</a>
                                    <script async src="https://platform.twitter.com/widgets.js"></script>
                                    <div class="fb-like" data-href="https://mouctechy.com/posts" 
                                            data-width="" data-layout="button_count" data-action="like" 
                                            data-size="small" data-share="true"></div>
                                </div>
                            
                        </div>     
                    @endforeach
                </article> 
            @endif
        </main>
@endsection