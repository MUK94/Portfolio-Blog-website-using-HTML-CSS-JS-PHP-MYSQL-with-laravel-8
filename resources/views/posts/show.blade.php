@extends('layouts.app')

@section('content')
    <main class="blog-row">
        <div class="blog-show">
            <button>
                <a href="/posts" class="btn-back">Go Back</a>
            </button>               
            <h1>{{$post->title}}</h1>
                
                <div class="small-tag">
                    <img class="img-tag-show" src="/public/images/mouctar.png" alt="thierno-amadou-mouctar-balde">
                    
                    <small>Updated on {{$post->created_at}}</small>
                </div>
                    <div class="share-btn">
                        <a class="twitter-share-button share-btn" href="https://twitter.com/intent/tweet" data-size="small">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js"></script>
                        <div class="fb-like" data-href="https://mouctechy.com/posts" 
                                data-width="" data-layout="button_count" data-action="like" 
                                data-size="small" data-share="true"></div>
                    </div>
                <div class="row-img-col">
                    <img src="/storage/app/public/cover_images/{{$post->cover_image}}" alt="{{$post->title}}">
                </div>
            <p>{!!$post->body!!}</p>                
            <hr>

            <!--Comment section   
            
            <div class="comment-section">
            </div>-->  
        </div>
    </main>
@endsection