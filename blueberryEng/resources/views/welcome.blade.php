<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Metas -->
     <meta charset="utf-8"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
     <meta name="keywords" content="Web developmetnt, E-commerce, Web platform, Digital agency, Creative agency, Software deveolpment, Marketing digital" />
     <meta name="description" content="We are a creative agency specialized in web development, our passion for technology allows us to create successful projects and solutions for our clients." />
     <meta name="author" content="blueberry.mx" />
     <meta name="robots" content="index, follow"/>
 
     <!-- Title  -->
     <title>Blueberry | Software company in Mexico </title>
 
     <!-- Favicon -->
     <link rel="shortcut icon" href="https://res.cloudinary.com/dej55trpk/image/upload/v1675785564/favicon_h7ecbp.png" />
 
     <!-- Plugins -->
     <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}" />
 
     <!-- Core Style Css -->
     <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
</head>
<body>
    <!-- ==================== Start Navbar ==================== -->

    @include('components.menuw')

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
                                        <h1>Business <span class="color-font">value</span> <br> 
                                            <span class="color-font">through </span> 
                                            digital
                                            <span class="color-font">products</span>
                                            </h1>
                                        <a href="#services" class="butn bord curve mt-30">
                                            <span>Known more</span>
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
                                        <h1 class="">Functionally <br> <b class="color-font">aesthetic</b> </h1>
                                        <p>The perfect combination between the functional and the aesthetic for your E-commerce.</p>
                                        <a href="#services" class="butn bord curve mt-30">
                                            <span>Known more</span>
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
                                        <h1 class=""><b class="color-font">Intuitive,</b>  scalable and <b class="color-font">customizable</b> </h1>
                                        <a href="#services" class="butn bord curve mt-30">
                                            <span>Known more</span>
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



        <!-- ==================== Start Blog ==================== -->

        <section class="blog section-padding sub-bg" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h3 class="wow color-font semiBold fadeInUp fz-70" data-wow-delay=".3s">Services </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785595/index/plataform-web-en_diw3b4.jpg" alt="Platafromas web"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <div class="img">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785599/index/ecommerce-en_mitiob.jpg" alt="E-commerce"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/landing-pages-en_i6kx8g.jpg" alt="Landing pages"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <div class="img">
                                <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785597/index/digital-integration-en_kp9koa.jpg" alt="Integración digital de negocios"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Blog ==================== -->



        <!-- ==================== Start Slider ==================== -->

        <section class="valign mt-100 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 valign">
                        <div class="cont">
                            <h1 class="cd-headline clip">We develop creative solutions for small and big brands alike, we build authentic buisness identities through <br/>
                                 <span class="cd-words-wrapper bold">
                                    <b class="is-visible color-font fw-600">E-commerce.</b>
                                    <b class="color-font fw-600">Web development.</b>
                                    <b class="color-font fw-600">Web platforms.</b>
                                </span></h1>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==================== End Slider ==================== -->

        <!-- ==================== Start Blog ==================== -->

        <section class="blog section-padding sub-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h3 class="wow fadeIn color-font mb-10 semiBold fz-60" data-wow-delay=".4s">We build solutions</h3>
                            <h6 class="wow fadeIn fz-20" data-wow-delay=".5s">for any customers with any business model</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img">
                                <div class="img-soluciones">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/poder-increible_e5n9tt.jpg" alt="Incredible power	 and Incredible design"/>
                                    <div class="txt-soluciones">
                                        <h1 class="fz-25 semiBold">Incredible power	</h1>
                                        <h1 class="fz-25">Incredible design</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <div class="img">
                                <div class="img-soluciones">
                                    <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/experiencia_jj1hix.jpg" alt="One seamless consumer experience"/>
                                    <div class="txt-soluciones">
                                        <h1 class="fz-25 semiBold">One seamless</h1>
                                        <h1 class="fz-25"> consumer experience</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Blog ==================== -->

        <!-- ==================== Start clients Brands ==================== -->

        <section class="clients section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign md-mb50">
                        <div class="sec-head mb-0">
                            <h6 class="wow fadeIn fz-25" data-wow-delay=".4s">Our</h6>
                            <h3 class="wow fadeIn mb-20 color-font semiBold fz-60" data-wow-delay=".5s">Technologies</h3>
                            <p class="wow fadeIn fz-18" data-wow-delay=".6s">Our area of expertise is quite broad from: the use of 
                                frameworks, design, animation and video editing.
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

        <!-- ==================== End clients Brands ==================== -->


        
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
                                            <h2 class="semiBold">Optimize every part of the checkout experience to convert more customers. </h2>
                                            <span class="text-white fz-18">
                                                The solution for millions of buisnesses of all sizes-from startups to large enerprises.
                                            </span>
                                        </div>
                                        <div class="butons mt-40">
                                            <a href="{{ route('ecommerce') }}" class="butn-bord-light rounded buton">
                                                <span>Known more</span>
                                            </a>
    
                                            <a href="{{ route('contact') }}" class="butn-bord-light rounded buton">
                                                <span>Contact Us</span>
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
                            <h6 class="wow fadeIn fz-25" data-wow-delay=".5s">The Blueberry difference.</h6>
                            <h3 class="wow fadeIn color-font semiBold fz-60" data-wow-delay=".6s">Even more reasons to<br> collaborate with us.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <section class="no-padding" data-scroll-index="1">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg col-md-6">
                            <div class="item mb-30  tam-cards-ch wow fadeIn" data-wow-delay=".3s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785594/index/icono-software_jyfsqe.png" alt="" class="icono-software"/>
                                    </div>
                                </div>
        
                                <p class="bold fz-16"> We are a  <b class="color-font">creative software</b> agency.</p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="item mb-30  tam-cards-ch wow fadeIn" data-wow-delay=".6s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785597/index/icono-alcance_xgm6rc.png" alt="" class="icono-alcance"/>
                                    </div>
                                </div>
                                <p class="bold fz-16">
                                    Project scopes developed in an intelligent way,
                                        thus achieving an <b class="color-font">innovative and strategic project with precise communication.</b>  
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
        
                                <p class="mb-25 bold fz-16"> <b class="color-font">High-tech</b>  construction of the project.<br></p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="item sm-mb50 tam-cards-ch  wow fadeIn" data-wow-delay="1s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/icono-esencia_nozgpk.png" alt="" class="icono-esencia"/>
                                    </div>
                                </div>
                                <p class="bold fz-16">
                                    We capture the essence, the guiding principles and the philosophy of your company through different
                                    <b class="color-font">creative resources.</b>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="item sm-mb50 tam-cards-ch  wow fadeIn" data-wow-delay="1.3s">
                                <div class="item-tit mb-15">
                                    <div class="icon">
                                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785598/index/icono-desarrollo_f8iru7.png" alt="" class="icono-desarrollo"/>
                                    </div>
                                </div>
        
                                <p class="mb-20 bold fz-16">
                                    We develop sites and tools with the ability to <b class="color-font">scale technologically</b>  
                                    to a more robust system.
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