<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Metas -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Desarrollo web, E-commerce, Plataforma web, Agencia digital, Agencia creativa, Desarrollo de software, Marketing digital" />
    <meta name="description" content="Somos una agencia creativa especializada en el desarrollo web, nuestra pasión por la tecnología, nos permite crear proyectos y soluciones exitosos para nuestros clientes." />
    <meta name="author" content="blueberry.mx" />

    <!-- Title  -->
    <title>Blueberry | Agencia de publicidad </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/dej55trpk/image/upload/v1675785564/favicon_h7ecbp.png" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
</head>

<body>



    


    <!-- ==================== Start Navbar ==================== -->

    @include('components.menuB')

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Slider ==================== -->

    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785595/index/slide-01-construyendo_pqys19.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption center mt-30">
                                        <h1>Construyendo <span class="color-font">negocios</span> <br> 
                                            de <span class="color-font">valor </span> 
                                            a través de 
                                            <span class="color-font">productos</span>
                                            <span class="color-font">digitales</span>
                                            </h1>
                                        <a href="#servicios" class="butn bord curve mt-30 pLight">
                                            <span>Conocer más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785599/index/slide-02-estetico_mbrvi5.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center mt-30">
                                        <h1 class="">Funcionalmente <br> <b class="color-font">estético</b> </h1>
                                        <p>La perfecta combinación entre lo funcional y lo estético para tu E-commerce.</p>
                                        <a href="#servicios" class="butn bord curve mt-30">
                                            <span>Conocer más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/slide-03-intuitivo_xybchu.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center mt-30">
                                        <h1 class=""> <b class="color-font">Intuitivo,</b>  escalable y   <b class="color-font">personalizable </b></h1>
                                        <a href="#servicios" class="butn bord curve mt-30">
                                            <span>Conocer más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm "></div>

            <div class="social-icon">
                <a href="https://www.facebook.com/profile.php?id=100089242747257" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/blueberrymx_/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCCSwSHd-JKN08XtD0BQF1gQ" target="_blank"><i class="fab fa-youtube fz-14"></i></a>
                <a href="https://www.tiktok.com/@blueberrymx1" target="_blank"><img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/icono-tiktok-white_rhipzq.png" alt="Tik Tok" class="icono-tiktok"/></a>
                <a href="https://www.linkedin.com/company/blueberrymx" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://vimeo.com/blueberrymx" target="_blank"><i class="fab fa-vimeo-v"></i></a>

            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <div class="main-content">



        <!-- ==================== Start Servicios ==================== -->

        <section class="blog section-padding sub-bg" id="servicios">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h3 class="wow fadeInUp color-font semiBold fz-70" data-wow-delay=".3s">Servicios </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785596/index/plataforma-web-esp_ducrsk.jpg" alt="Platafromas web"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <div class="img">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785595/index/ecommerce-esp_iqakm6.jpg" alt="E-commerce"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/landing-pages-esp_z1mchi.jpg" alt="Landing pages"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <div class="img">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785596/index/integracion-digital-esp_lq4rhq.jpg" alt="Integración digital de negocios"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Servicios ==================== -->



        <!-- ==================== Start Texto que cambia ==================== -->

        <section class="valign mt-100 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 valign">
                        <div class="cont">
                            <h1 class="cd-headline clip">Desarrollamos soluciones para pequeñas y grandes marcas, construimos aunténticas identidades 
                                de negocio a través de <br/>
                                 <span class="cd-words-wrapper bold">
                                    <b class="is-visible color-font fw-600">E-commerce.</b>
                                    <b class="color-font fw-600">Desarrollo Web.</b>
                                    <b class="color-font fw-600">Plataformas autoadministrables.</b>
                                </span></h1>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==================== End Texto que cambia ==================== -->

        <!-- ==================== Start Soluciones ==================== -->

        <section class="blog section-padding sub-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h3 class="wow fadeIn color-font mb-10 semiBold fz-60" data-wow-delay=".4s">Soluciones</h3>
                            <h6 class="wow fadeIn fz-25" data-wow-delay=".5s">para cualquier modelo de negocio</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img">
                                <div class="img-soluciones">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/poder-increible_e5n9tt.jpg" alt="Poder increíble y diseño increíble"/>
                                    <div class="txt-soluciones">
                                        <h1 class="fz-25 semiBold">Poder increíble,</h1>
                                        <h1 class="fz-25">Diseño increíble</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <div class="img">
                                <div class="img-soluciones">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/experiencia_jj1hix.jpg" alt="Una experiencia de usuario increíble"/>
                                    <div class="txt-soluciones">
                                        <h1 class="fz-25 semiBold">Una experiencia de usuario</h1>
                                        <h1 class="fz-25"> increíble</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Soluciones ==================== -->

        <!-- ==================== Start Tecnologías usadas ==================== -->

        <section class="clients section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign md-mb50">
                        <div class="sec-head mb-0">
                            <h6 class="wow fadeIn fz-25" data-wow-delay=".4s">Nuestras</h6>
                            <h3 class="wow fadeIn mb-20 color-font semiBold fz-60" data-wow-delay=".5s">Tecnologías</h3>
                            <p class="wow fadeIn fz-18" data-wow-delay=".6s">Nuestra área de experiencia es bastante extensa desde:
                                uso de frameworks, diseño, animación y edición.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div class="row bord">
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img ">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/icono-laravel_int24u.png" alt="Laravel" class="sombra zoom"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".6s">
                                        <div class="img">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/icono-react_dmdoxv.png" alt="React Js" class="sombra zoom"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".8s">
                                        <div class="img">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/icono-vue_kcorlp.png" alt="Vue Js" class="sombra zoom"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/icono-mysql_ee0gci.png" alt="Mysql" class="sombra zoom"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-6 brands sm-mb30">
                                    <div class="item wow fadeIn" data-wow-delay=".4s">
                                        <div class="img">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785595/index/icono-firebase_hoggzk.png" alt="Firebase" class="sombra zoom"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands sm-mb30">
                                    <div class="item wow fadeIn" data-wow-delay=".7s">
                                        <div class="img">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785595/index/icono-after_ymygfk.png" alt="After Efects" class="sombra zoom"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".5s">
                                        <div class="img">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785597/index/icono-premier_fco7vx.png" alt="Premier" class="sombra zoom"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785596/index/icono-xd_ecvauv.png" alt="XD" class="sombra zoom"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Tecnologías usadas ==================== -->


        
        <!-- ==================== Start call-to-action ==================== -->

        <section class="app-action section-padding" data-overlay-dark="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box-gr">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="img">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/optimiza-cada-parte_pxvnnx.png" alt="Optimiza cada parte"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 valign">
                                    <div class="cont">
                                        <div class="s-head">
                                            <h2 class="semiBold">Optimiza cada parte de la experiencia del checkout para 
                                                convertir más clientes </h2>
                                            <span class="text-white fz-18">
                                                La solución para miles de negocios de todos los tamaños, desde startups pequeños hasta empresas grandes.
                                            </span>
                                        </div>
                                        <div class="butons mt-40">
                                            <a href="e-commerce.html" class="butn-bord-light rounded buton">
                                                <span>Conocer más</span>
                                            </a>
    
                                            <a href="contact.html" class="butn-bord-light rounded buton">
                                                <span>Contáctanos</span>
                                            </a>
                                        </div>
    
                                        <div class="shape-light">
                                            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785633/shape-light_tzum2u.png" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End call-to-action ==================== -->

        <!-- ==================== Start Diferenciador Blueberry ==================== -->

        <section class="app-services section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head">
                            <h6 class="wow fadeIn  fz-25" data-wow-delay=".5s">La diferencia con Blueberry</h6>
                            <h3 class="wow fadeIn color-font semiBold fz-60" data-wow-delay=".6s">Aún más razones para<br> colaborar con nosotros.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <section class="no-padding" data-scroll-index="1">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg col-md-6">
                            <div class="item mb-30 tam-cards-ch wow fadeIn" data-wow-delay=".3s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/icono-software_jyfsqe.png" alt="" class="icono-software"/>
                                    </div>
                                </div>
        
                                <p class="bold fz-16"> Somos una agencia <b class="color-font">creativa de software.</b></p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="item mb-30 tam-cards-ch wow fadeIn" data-wow-delay=".6s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785597/index/icono-alcance_xgm6rc.png" alt="" class="icono-alcance"/>
                                    </div>
                                </div>
        
                                <p class="bold fz-16"> Alcance de proyecto desarrollados de manera inteligente,
                                    logrando un proyecto <b class="color-font">innovador, estratégico y con comunicación precisa.</b> 
                                </p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="item mb-30 tam-cards-ch wow fadeIn" data-wow-delay=".8s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/icono-construccion_ddwwiu.png" alt="" class="icono-construccion"/>
                                    </div>
                                </div>
        
                                <p class="mb-25 bold fz-16"> Construcción del proyecto con <b class="color-font">alta tecnología.</b><br></p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="item sm-mb50 tam-cards-ch wow fadeIn" data-wow-delay="1s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/icono-esencia_nozgpk.png" alt="" class="icono-esencia"/>
                                    </div>
                                </div>
                                <p class="bold fz-16">Plasmamos la esencia, los ejes rectores y la filosofía de tu empresa 
                                    a través de diferentes <b class="color-font">recursos creativos.</b> 
                                </p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="item sm-mb50 tam-cards-ch wow fadeIn" data-wow-delay="1.3s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/icono-desarrollo_f8iru7.png" alt="" class="icono-desarrollo"/>
                                    </div>
                                </div>
        
                                <p class="mb-20 bold fz-16"> Desarrollamos sitios y herramientas con capacidad
                                    de <b class="color-font"> escalar tecnológicamente</b> a un sistema más robusto.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                
        </section>

        <!-- ==================== End Diferenciador Blueberry ==================== -->



        <!-- ==================== Start call-to-action ==================== -->

        @include('components.callToAction')

        <!-- ==================== End call-to-action ==================== -->



        <!-- ==================== Start Footer ==================== -->

        @include('components.footer')

        <!-- ==================== End Footer ==================== -->


    </div>






   @include('components.scripts')

</body>

</html>