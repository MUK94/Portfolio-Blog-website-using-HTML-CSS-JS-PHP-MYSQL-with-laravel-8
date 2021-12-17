@extends('layouts.app')

@section('content')
    <div class="content-row">
        <div class="about-box">
            <div class="rowabout">
                <div class="col50about1">
                    <h2 class="titleText">Hey !</h2>
                    <h3>I'm Amadou Mouctar</h3>
                    <p>Telecom Research Engineer at PAUSTI/JKUAT and web developer. </p><p>  I like cooking
                        and writing blogs.
                    </p>
                    <a href="https://www.linkedin.com/in/thierno-amadou-mouctar-balde-595578155/" class="new_Window"
                        id="click" class="btn-link">read more</a>
                </div>
                <div class="col50about2">
                    <div class="imgBxabout">
                        <img src="public/images/mouctar.png" alt="thierno-amadou-mouctar-balde">
                    </div>
                </div>
            </div>
        </div>

         <!--======== SOCIAL-MEDIA =======-->

        <div class="wrapper">
            <div class="button">
                <div class="icon">
                    <a href="https://twitter.com/MuktarBalde" class="new_Window"><i class="fab fa-twitter"></i></a>
                </div>
                <a href="https://twitter.com/MuktarBalde" class="new_Window"><span>Twitter</span></a>
            </div>           
            <div class="button">
                <div class="icon">
                    <a href="https://github.com/MUK94" class="new_Window"><i
                            class="fab fa-github"></i></a>
                </div>
                <a href="https://github.com/MUK94" class="new_Window"><span>Github</span></a>
            </div>   
            <div class="button">
                <div class="icon">
                    <a href="https://www.linkedin.com/in/thierno-amadou-mouctar-balde-595578155/" class="new_Window"><i
                            class="fab fa-linkedin"></i></a>
                </div>
                <a href="https://www.linkedin.com/in/thierno-amadou-mouctar-balde-595578155/"
                    class="new_Window"><span>Linkedin</span></a>
            </div>   
            <div class="button">
                <div class="icon">
                    <a href="https://www.youtube.com/channel/UCTJqEvE24klETyG6631IUSw" class="new_Window"><i
                            class="fab fa-youtube"></i></a>
                </div>
                <a href="https://www.youtube.com/channel/UCTJqEvE24klETyG6631IUSw"
                    class="new_Window"><span>Youtube</span></a>
            </div>    
            <div class="button">
                <div class="icon">
                    <a href="https://www.facebook.com/mklepanafricaniste/" class="new_Window"><i
                            class="fab fa-facebook"></i></a>
                </div>
                <a href="https://www.facebook.com/mklepanafricaniste/" class="new_Window"><span>Facebook</span></a>
            </div>
        </div>
    </div>
    
@endsection