@extends('layouts.app')

@section('content')
<h3 class="heading"><span>{{ __('Welcome to Mouctechy!') }}</span></h3>
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

@endsection