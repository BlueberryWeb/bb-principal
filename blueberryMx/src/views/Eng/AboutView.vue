<template>
    <MenuView/>
    <HeaderView/>
    <div class="main-content">
        <!-- ==================== Start Why Us ==================== -->
        <WhyView/>
        <!-- ==================== End Why Us ==================== -->

        <!-- ==================== Start clients Brands ==================== -->
        <BrandsView/>
        <!-- ==================== End clients Brands ==================== -->

        <!-- ==================== Start Lines ==================== -->
        <LinesView/>
        <!-- ==================== End Lines ==================== -->

        <!-- ==================== Start Advantages ==================== -->
        <AdvantagesView/>
        <!-- ==================== End Advantages ==================== -->

        <!-- ==================== Start Call To Action ==================== -->
        <CallToActionView/>
        <!-- ==================== End Call To Action ==================== -->

        <!-- ==================== Start Footer ==================== -->
        <FooterView/>
        <!-- ==================== End Footer ==================== -->
    </div>
    

</template>
<script>
    import { defineAsyncComponent } from 'vue';

    export default{
        components: {
            MenuView: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/menuBView.vue')),
            HeaderView: defineAsyncComponent(() => import('../../components/engComponents/aboutComponents/headerView.vue')),
            WhyView: defineAsyncComponent(() => import('../../components/engComponents/aboutComponents/whyUsView.vue')),
            BrandsView: defineAsyncComponent(() => import('../../components/engComponents/aboutComponents/brandsView.vue')),
            LinesView: defineAsyncComponent(() => import('../../components/engComponents/aboutComponents/linesView.vue')),
            AdvantagesView: defineAsyncComponent(() => import('../../components/engComponents/aboutComponents/advantagesView.vue')),
            CallToActionView: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/callToActionView.vue')),
            FooterView: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/footerView.vue'))
        }
    }
</script>