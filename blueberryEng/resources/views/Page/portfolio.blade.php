<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="blueberry.mx" />

    <!-- Title  -->
    <title>Agencia de publicidad | Blueberry </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/dej55trpk/image/upload/v1675785564/favicon_h7ecbp.png" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/css/intlTelInput.css'/>

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
</head>
<body>
    <!-- ==================== Start Navbar ==================== -->

    @include('components.menuW')

    <!-- ==================== End Navbar ==================== -->

    
    <!-- ==================== Start Slider ==================== -->

    <header class="slider showcase-full">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785619/portafolio/amti_vlzj6t.jpg" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="https://amti.mx/" target="_blank">
                                                <div class="stroke" data-swiper-parallax="-2000"></div> 
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="https://amti.mx/" target="_blank"><span>Visit <br> site</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              {{--   <div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785619/portafolio/hyra_navabj.jpg" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="#">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="#"><span>Visit <br> site</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785618/portafolio/percapita_sgrxcg.jpg" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="https://percapita.mx/" target="_blank">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="https://percapita.mx/" target="_blank"><span>Visit <br> site</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785623/portafolio/jeanswest_s1ov9c.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="https://tienda.jeanswest.mx/" target="_blank">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="https://tienda.jeanswest.mx/" target="_blank"><span>Visit <br> site</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--<div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785620/portafolio/parvati_dggnhk.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="https://parvati.global/" target="_blank">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="https://parvati.global/" target="_blank"><span>Visit <br> site</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--<div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785618/portafolio/hispanocash_wueg1u.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="https://hispanocash.com/" target="_blank">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="https://hispanocash.com/" target="_blank"><span>Visit <br> site</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1675785668/beirat-portfolio_wlggyo.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="https://beirat.mx/">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="https://beirat.mx/"><span>Visit <br> site</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- AGREGADOS -->
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667911/portafolio/tractobull_lu04i1.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://tractobull.mx/" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://tractobull.mx/" target="_blank"><span>Visit <br> site</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667908/portafolio/textron-aviation_trw3en.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://txtav.com/" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://txtav.com/" target="_blank"><span>Visit <br> site</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667908/portafolio/amti_dkz9gv.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://amti.uk/" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://amti.uk/" target="_blank"><span>Visit <br> site</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667907/portafolio/movalia_awlq8h.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://www.movalia.mx/" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://www.movalia.mx/" target="_blank"><span>Visit <br> site</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667907/portafolio/kluane_wozyli.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://kluanedrilling.ca/" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://kluanedrilling.ca/" target="_blank"><span>Visit <br> site</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667907/portafolio/remax_sfkeaz.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://www.youtube.com/watch?v=j_IBkP_NJ2s" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://www.youtube.com/watch?v=j_IBkP_NJ2s" target="_blank"><span>Visit <br> video</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667907/portafolio/stuen_nbmbzb.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://stuen.mx/" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://stuen.mx/" target="_blank"><span>Visit <br> site</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667905/portafolio/sbgroup_yib3fj.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://www.sbgroup.com.mx/eng/index.html" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://www.sbgroup.com.mx/eng/index.html" target="_blank"><span>Visit <br> site</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667902/portafolio/circo-dragon_xyafju.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://www.youtube.com/watch?v=J--WKXA0_w8" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://www.youtube.com/watch?v=J--WKXA0_w8" target="_blank"><span>Visit <br> video</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://res.cloudinary.com/dej55trpk/image/upload/v1683667902/portafolio/premier-nuts_l4zyaq.png" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="https://player.vimeo.com/video/637231043?h=fd15856a8d" target="_blank">
                                            <div class="stroke" data-swiper-parallax="-2000"></div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    <div class="discover">
                                        <a href="https://player.vimeo.com/video/637231043?h=fd15856a8d" target="_blank"><span>Visit <br> video</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- slider setting -->
            <div class="txt-botm">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <div>
                        <span>Next</span>
                    </div>
                    <div><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <div><i class="fas fa-chevron-left"></i></div>
                    <div>
                        <span>Prev</span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination dots"></div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    @include('components.scripts')
</body>
</html>