<!-- navbar -->
<header>
    <a href="/" class="logo"><span>M</span>oucTechy<span>.</span></a>
    <div class="menuToggle" onclick="toggleMenu();">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul class="navigation1">
        <li><a href="https://twitter.com/MuktarBalde" class="new_Window" ><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCTJqEvE24klETyG6631IUSw" class="new_Window"><i class="fab fa-youtube"></i></a></li>
        <li><a href="https://www.linkedin.com/in/thierno-amadou-mouctar-balde-595578155/" class="new_Window"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="https://github.com/MUK94" class="new_Window"><i class="fab fa-github"></i></a></li>
        <li><a href="https://www.facebook.com/mklepanafricaniste/" class="new_Window"><i class="fab fa-facebook"></i></a></li>
    </ul>
    <ul class="navigation">
        <li><a href="/" onclick="toggleMenu();">Home</a></li>
        <li><a href="/about" onclick="toggleMenu();">About</a></li>
        <li><a href="/portfolio" onclick="toggleMenu();">Portfolio</a></li>
        <li><a href="/posts" onclick="toggleMenu();">Blog</a></li>
        <li><a href="/contact" onclick="toggleMenu();">Contact</a> </li>
    </ul>
            <!-- Authentication Links -->
    <div class="navigation2">
        @guest
            <div class="drop-inline">
                <li><a href="{{ route('login') }}"><i class="fa fa-user"></i></a></li>
                <li><a href="{{ route('register') }}"><i class="fa fa-lock"></i></a></li>
            </div>
            
        @else
            <li class="sign-out">
                <button class="dropbtn">
                    <i class="fa fa-user-circle">
                        <a href="#" role="button" style="display: none">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                    </i>
                </button>
                
                    <div class="dropdown">

                        @if (Auth::user()->name == "useradmin")
                            <a href="/home">Dashboard</a>
                        @endif
                        
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
            
                    </div>           
            </li>
        @endguest
        </div>
</header>




