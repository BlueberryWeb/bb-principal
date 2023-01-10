<template>
    <MenuView/>
   
    <div class="main-content">
        <!-- ==================== Start Header ==================== -->
        <HeaderView/>
        <!-- ==================== End Header ==================== -->

        <!-- ==================== Start Comparation ==================== -->
        <ComparationView/>
        <!-- ==================== End Comparation ==================== -->

        <!-- ==================== Start Call To Action ==================== -->
        <CallToAction/>
        <!-- ==================== End Call To Action ==================== -->

        <!-- ==================== Start Footer ==================== -->
        <FooterView/>
        <!-- ==================== End Footer ==================== -->
    </div>
</template>
<script>
    import { defineAsyncComponent } from 'vue';


    export default{
        components:{
            MenuView: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/menuBView.vue')),
            HeaderView: defineAsyncComponent(() => import('../../components/engComponents/webComponents/headerView.vue')),
            ComparationView: defineAsyncComponent(() => import('../../components/engComponents/webComponents/comparationView.vue')),
            CallToAction: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/callToActionView.vue')),
            FooterView: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/footerView.vue'))
        }
    }
</script>