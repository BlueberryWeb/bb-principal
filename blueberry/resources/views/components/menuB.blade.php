<!-- ==================== Start Loading ==================== -->

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
        <span>n</span>
        <span>o</span>
        <span>l</span>
        <span>o</span>
        <span>g</span>
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

     <nav class="navbar navbar-expand-lg change pRegular">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="{{ url('/') }}">
                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785564/logo-light_uijolx.gif" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('desarrollo') }}">Desarrollo Web</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('ecommerce') }}">E-commerce</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('portafolio') }}">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Lenguaje</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/') }}">Español</a>
                            <a class="dropdown-item" href="{{ route('home') }}">Inglés</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->
