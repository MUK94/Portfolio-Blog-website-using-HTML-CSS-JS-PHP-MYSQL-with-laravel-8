<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Free Web tutorials, programming Blogs">
    <meta name="keywords" content="HTML, CSS, JavaScript, web development and Business">
    <meta name="author" content="Mouctar">
    <link rel="shortcut icon" type="image/png" href="/public/images/logo02.png">
    <title>{{ config('app.name', 'Mouctechy') }}</title>

    <!-- External links -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/portfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/blogs.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/userLogin.css') }}" rel="stylesheet">
</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
    src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" 
    nonce="xfDkbYvc">
</script>
<body>
    
    @include('inc.navbar')
    @include('inc.wavy')
    <div class="page-content">
        @include('inc.messages')
        @yield('content')
        @yield('ck-editor') 
    </div>

    <!--//// section footer ////-->
    @include('inc.footer')
    
    <!-- Scripts -->

    <script src="{{ asset('public/js/app.js') }}"></script>
    <script>
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
        
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        // function for managing the opening window

        let links = document.querySelectorAll(".new_Window");
        links.forEach(function(link){
            link.setAttribute("target", "_blank");
        });


    </script>
    

</body>
</html>
