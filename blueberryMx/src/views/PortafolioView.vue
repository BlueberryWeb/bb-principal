<template>
    <HeaderView/>
    <!-- ==================== Start Slider ==================== -->

    <header class="slider showcase-full">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portafolio/amti.jpg" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000"></div> 
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="project-details2.html"><span>Ver <br> más</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portafolio/hyra.jpg" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="project-details2.html"><span>Ver <br> más</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portafolio/percapita.jpg" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="project-details2.html"><span>Ver <br> más</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portafolio/jeanswest.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="project-details2.html"><span>Ver <br> más</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portafolio/parvati.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="project-details2.html"><span>Ver <br> más</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portafolio/hispanocash.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="project-details2.html"><span>Ver <br> más</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portafolio/360.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000"></div>
                                            </a>
                                            <div class="bord"></div>
                                        </h1>
                                        <div class="discover">
                                            <a href="project-details2.html"><span>Ver <br> más</span></a>
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
                        <span>Siguiente</span>
                    </div>
                    <div><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <div><i class="fas fa-chevron-left"></i></div>
                    <div>
                        <span>Anterior</span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination dots"></div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
</template>
<script>
    import { defineAsyncComponent } from 'vue';

    export default{
        components:{
            HeaderView: defineAsyncComponent(() => import('../components/portafolioComponents/menuView.vue'))
        }
    }
</script>