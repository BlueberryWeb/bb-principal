
<template>
  <HeaderView/>

   <!-- ==================== Start Slider ==================== -->

   <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/index/slide-01-construyendo.jpg" data-overlay-dark="6">
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
                    <div class="bg-img valign" data-background="img/index/slide-02-estetico.jpg" data-overlay-dark="6">
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
                    <div class="bg-img valign" data-background="img/index/slide-03-intuitivo.jpg" data-overlay-dark="6">
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
                <a href="#https://www.tiktok.com/@blueberrymx1" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/blueberrymx" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://vimeo.com/blueberrymx" target="_blank"><i class="fab fa-vimeo-v"></i></a>

            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->




    <div class="main-content">
      <FooterView/>
    </div>

</template>

<script>
  import { defineAsyncComponent } from 'vue';

  export default{
    components:{
      HeaderView: defineAsyncComponent(() => import('../components/homeComponents/headerView.vue')),
      FooterView: defineAsyncComponent(() => import('../components/homeComponents/footerView.vue')),
      LoadingView: defineAsyncComponent(() => import('../components/homeComponents/loaderView.vue'))
    }
  }
</script>

