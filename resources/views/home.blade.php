@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="heading"><span>{{ __('Welcome to Mouctechy!') }}</span></h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--create post--> 
                     
                    <!--Only for admins-->
                    @if(Auth::user()->name == "#@m@dou20_22_!?#")
                        <div class="btn-edit-delete">
                            <button>
                                <a href="/posts/create" class="btn-add">Add Post</a>
                            </button>   
                        </div>
                        <div class="blog-row">
                            <h3>Your Blog Posts</h3>
                            @if (count($posts) > 0)
                                <table class="table-posts">
                                    <tr>
                                        <th class="title">Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach ($posts as $post)
                                        <tr class="btn">
                                            <th>{{$post->title}}</th>
                                            <th><a href="/posts/{{$post->id}}/edit">Edit</a></th>
                                            <th>
                                                <div class="btn-delete">
                                                    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                                        {{Form::hidden('_method', 'DELETE')}}
                                                        {{Form::submit('Delete', ['class' => 'btn-delete-right' ])}}
                                                    {!! Form::close() !!}
                                                </div>
                                            </th>
                                        </tr>
                                        <tr class="btn">
                                            <th>   
                                            </th>
                                        </tr>
                                    @endforeach                       
                                </table>                        
                            @else
                            <p>you have no posts.</p>
                            @endif
                        </div>
                        @else
                            <div class="welcome-section">
                                <img src="public/images/coding.gif" alt="mouctechy_git_madeby_storyset">
                                <div class="welcome-text">
                                    <h3>If you can think it, we can web it!</h3> 
                                    <p> I offer Web Development and Design Services. <br>
                                        My blog posts are all about Web Development, ICT, Programming, 
                                        Telecommunications, Project Management, Personal Development...</p>
                                    <a href="/posts"><span>Visit my Blogs</span></a>
                                </div>
                            </div>
                    @endif                   
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection
