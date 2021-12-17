@extends('layouts.app')
@section('content')
        <main class="blog-row">
            <h1 class="heading"><span>Create Post</span></h1> 
            {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="create-post-input">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'edit-input', 'placeholder' => 'Title'])}}
                </div>
                <div class="create-post-body">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['class' => 'form-message', 'id'=>'editor', 'placeholder' => 'Body'])}}
                </div>

                <div class="form-file-upload">
                    {{Form::file('cover_image')}}
                    <small>(max 2Mo)</small>
                </div>
                {{Form::submit('Submit', ['class' => 'btn-submit'])}}                
            {!! Form::close() !!}           
        </main>
@endsection

@section('ck-editor')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection