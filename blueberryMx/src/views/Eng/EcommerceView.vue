<template>
    <MenuView/>
    <div class="main-content">
        <!-- ==================== Start Header ==================== -->
        <HeaderView/>
        <!-- ==================== End Header ==================== -->

        <!-- ==================== Start Pilar ==================== -->
        <PilarView/>
        <!-- ==================== End Pilar ==================== -->

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
            HeaderView: defineAsyncComponent(() => import('../../components/engComponents/ecommerceComponents/headerView.vue')),
            PilarView: defineAsyncComponent(() => import('../../components/engComponents/ecommerceComponents/pilarView.vue')),
            CallToAction: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/callToActionView.vue')),
            FooterView: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/footerView.vue'))
        }
    }
</script>