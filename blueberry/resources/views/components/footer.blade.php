
    <footer>
        <div class="container">
            <div class="row mb-100">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <div class="title">
                            <h5 class="fz-50">Contáctanos</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
                    
            </div>
            <div class="row mb-75">
                <div class="col-lg-4">
                    <div class="item">
                        <ul>
                            <li>
                                <span class="icon pe-7s-map-marker"></span>
                                <div class="cont">
                                    <h6 class="fz-20">Visitanos</h6>
                                    <a href="https://goo.gl/maps/F2yNKD5J9vNuA3xr8" target="_blank">
                                        <p class="fz-16">Av. Rubén Darío #586, <br/>
                                            Guadalajara, Jal. México</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <ul>
                            <li>
                                <span class="icon pe-7s-mail"></span>
                                <div class="cont">
                                    <h6 class="fz-20">Email</h6>
                                    <a href="mailto:hello@blueberry.mx?Subject=Solicitar%20Informes%20Blueberry">
                                        <p class="fz-16">hello@blueberry.mx</p>
                                    </a>
                                        
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item md-mb50">
                        <ul>
                            <li>
                                <span class="icon pe-7s-call"></span>
                                <div class="cont">
                                    <h6 class="fz-20">Llámanos</h6>
                                    <a href="https://api.whatsapp.com/send?phone=523313257156" target="_blank">
                                        <p class="fz-16">+52 (33) 1325 7256</p>
                                    </a> <br/>
                                    <a href="tel:+523331093636" target="_blank">
                                        <p class="fz-16">+52 (33) 3109 3636</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                    
            </div>
                
        </div>
        <div class="container-fluid no-padding">
            @php
                $url= $_SERVER["REQUEST_URI"];
            @endphp
            @if ($url === '/')
                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785641/bb-footer-rojo_ywt6ut.png" alt="Blueberry"/>                
            @elseif ($url == '/nosotros')
                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785642/bb-footer-verde_oc8wpc.png" alt="Blueberry"/>
            @elseif ($url == '/desarrollo')
                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785642/bb-footer-morado_m0ye2v.png" alt="desarrollo"/>
            @elseif ($url == '/ecommerce')
                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785642/bb-footer-azul_algn6r.png" alt="Blueberry"/>
            @elseif ($url == '/contacto')
                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785642/bb-footer-naranja_c0yty6.png" alt="Blueberry"/>
            @endif
        </div>
        <div class="container">
            <!--<div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="d-flex item">
                        <div class="sm-post padding5">
                            <a href="terminos.html">
                                <p class="fz-15">Terms and conditions</p>
                            </a>
                                
                        </div>
                        <div class="sm-post padding5">
                            <a href="privacidad.html">
                                <p class="fz-15">Privacy notice</p>
                            </a>
                                
                        </div>
                        <div class="sm-post padding5">
                            <a href="cookies.html">
                                <p class="fz-15">Cookies policity</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                    
            </div>-->
            <div class="row mt-50">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="item">
                        <div class="social justify-content-center">
                            <a style="visibility: hidden" href="https://www.tiktok.com/@blueberrymx1" target="_blank"><img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/icono-tiktok-white_rhipzq.png" alt="Tik Tok" class="icono-tiktok" /></a>
                            <a href="https://www.facebook.com/profile.php?id=100089242747257" target="_blank"><i class="fab fa-facebook-f fz-18"></i></a>
                            <a href="https://www.instagram.com/blueberrymx_/" target="_blank"><i class="fab fa-instagram fz-18"></i></a>
                            <a href="https://www.youtube.com/channel/UCCSwSHd-JKN08XtD0BQF1gQ" target="_blank"><i class="fab fa-youtube fz-18"></i></a>
                            <a href="https://www.linkedin.com/company/blueberrymx" class="icon"><i class="fab fa-linkedin-in fz-18"></i></a>
                            <a href="https://vimeo.com/blueberrymx" target="_blank"><i class="fab fa-vimeo-v fz-18"></i></a>
                            <a href="https://www.tiktok.com/@blueberrymx1" target="_blank"><img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/icono-tiktok-white_rhipzq.png" alt="Tik Tok" class="icono-tiktok"/></a>
                        </div>
                            
                    </div>
                </div>
                <div class="col-lg-2"></div>
                    
            </div>
            <div class="row mt-20">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <a href="{{ route('terminos') }}">Términos y Condiciones</a>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <div class="row mt-20">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="justify-content-center">
                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785642/we-materialize_xwuusu.gif" alt="Materialized by Blueberry"  class="bb-materialized"/>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </footer>