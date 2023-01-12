<!-- ==================== Start Loading ==================== --

    <div class="loading">
        <span>B</span>
        <span>l</span>
        <span>u</span>
        <span>e</span>
        <span>b</span>
        <span>e</span>
        <span>r</span>
        <span>r</span>
        <span>y</span>
        <span></span>
        <span>T</span>
        <span>e</span>
        <span>c</span>
        <span>h</span>
        <span>o</span>
        <span>l</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>

    </div>

    <div id="preloader">
    </div>

    <!-- ==================== End Loading ==================== -->



    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->

    <!-- ==================== Start Navbar ==================== -->
    <nav class="navbar navbar-expand-lg change">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="{{ route('home')}}">
                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1672696437/BlueberryMX/logo-light_mxvdxk.gif" alt="logo"/>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('development') }}">Web Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ecommerceEng') }}">E-commerce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Language</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/') }}">Spanish</a>
                            <a class="dropdown-item" href="{{ route('home') }}">English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->