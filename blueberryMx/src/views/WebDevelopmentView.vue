<template>
    <MenuView/>
    <LoadingView/>
    <div class="main-content">
        <HeaderView/>
        <!-- ==================== Start Comparación ==================== -->
        <ComparacionView/>
        <!-- ==================== End Comparación ==================== -->

        <!-- ==================== Start call-to-action ==================== -->
      <CalltoAction/>
      <!-- ==================== End call-to-action ==================== -->


      <!-- ==================== Start Footer ==================== -->
      <FooterView/>
      <!-- ==================== End Footer ==================== -->
    </div>
</template>
<script>
    import { defineAsyncComponent } from 'vue';

    export default{
        components:{
            MenuView: defineAsyncComponent(() => import('../components/universalComponents/menuView.vue')),
            LoadingView: defineAsyncComponent(() => import('../components/universalComponents/loaderView.vue')),
            HeaderView: defineAsyncComponent(() => import('../components/webComponents/headerView.vue')),
            ComparacionView: defineAsyncComponent(() => import('../components/webComponents/comparacionView.vue')),
            CalltoAction: defineAsyncComponent(() => import('../components/universalComponents/callToAction.vue')),
            FooterView: defineAsyncComponent(() => import('../components/universalComponents/footerView.vue'))
        }
    }
</script>