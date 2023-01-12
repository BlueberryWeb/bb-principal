<template>
    <MenuView/>

     <!-- ==================== Start Slider ==================== -->

     <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="../img/index/slide-01-construyendo.jpg" data-overlay-dark="6">
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
                    <div class="bg-img valign" data-background="../img/index/slide-02-estetico.jpg" data-overlay-dark="6">
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
                    <div class="bg-img valign" data-background="../img/index/slide-03-intuitivo.jpg" data-overlay-dark="6">
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
                <a href="#https://www.tiktok.com/@blueberrymx1" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/blueberrymx" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://vimeo.com/blueberrymx" target="_blank"><i class="fab fa-vimeo-v"></i></a>

            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <div class="main-content">
        <!-- ==================== Start Services ==================== -->
        <ServicesView/>
        <!-- ==================== End Services ==================== -->


        <!-- ==================== Start Dinamic Text ==================== -->
         <TextDinamic/>
        <!-- ==================== End Dinamic Text ==================== -->


        <!-- ==================== Start Solutions ==================== -->
        <SolutionsView/>
        <!-- ==================== End Solutions ==================== -->

        <!-- ==================== Start Technologies ==================== -->
        <TechnologiesView/>
        <!-- ==================== End Technologies ==================== -->

        <!-- ==================== Start Optimize ==================== -->
        <OptimizeView/>
        <!-- ==================== End Optimize  ==================== -->

        <!-- ==================== Start call-to-action ==================== -->
        <CallToActionView/>
        <!-- ==================== End call-to-action ==================== -->


       <!-- ==================== Start Footer ==================== -->
       <FooterView/>
        <!-- ==================== End Footer ==================== -->
    </div>
    
</template>
<script>
    import { defineAsyncComponent } from 'vue';
import OptimizaView from '../../components/homeComponents/optimizaView.vue';

    export default{
        components: {
    MenuView: defineAsyncComponent(() => import("../../components/engComponents/universalComponents/menuWView.vue")),
    ServicesView: defineAsyncComponent(() => import("../../components/engComponents/homeComponents/servicesView.vue")),
    TextDinamic: defineAsyncComponent(() => import("../../components/engComponents/homeComponents/textDinamicView.vue")),
    SolutionsView: defineAsyncComponent(() => import("../../components/engComponents/homeComponents/solutionsView.vue")),
    TechnologiesView: defineAsyncComponent(() => import("../../components/engComponents/homeComponents/techonologiesView.vue")),
    DifferemceView: defineAsyncComponent(() => import("../../components/engComponents/homeComponents/diferenceView.vue")),
    OptimizeView: defineAsyncComponent(() => import("../../components/engComponents/homeComponents/optimizeView.vue")),
    CallToActionView: defineAsyncComponent(() => import("../../components/engComponents/universalComponents/callToActionView.vue")),
    FooterView: defineAsyncComponent(() => import("../../components/engComponents/universalComponents/footerView.vue")),
    OptimizaView
}
    }
</script>