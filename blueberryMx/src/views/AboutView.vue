<template>
  <MenuView/>
    <LoadingView/>
     <!-- ==================== Start Slider ==================== -->
     <HeaderView/>
      <!-- ==================== End Slider ==================== -->

    <div class="main-content">

     
      <!-- ==================== Start Porque-Area ==================== -->
      <PorqueView/>
      <!-- ==================== End Porque-Area ==================== -->

      <!-- ==================== Start clients Brands ==================== -->
      <MarcasView/>
      <!-- ==================== End clients Brands ==================== -->

      <!-- ==================== Start Líneas ==================== -->
      <LineasView/>
      <!-- ==================== End Services ==================== -->

      <!-- ==================== Start Ventajas ==================== -->
      <VentajasView/>
      <!-- ==================== End Ventajas ==================== -->

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

  export default {
    components: {
      MenuView: defineAsyncComponent(() => import('../components/universalComponents/menuView.vue')),
      HeaderView: defineAsyncComponent(() => import('../components/somosComponents/headerView.vue')),
      LineasView: defineAsyncComponent(() => import('../components/somosComponents/lineasView.vue')),
      MarcasView: defineAsyncComponent(() => import('../components/somosComponents/marcasView.vue')),
      PorqueView: defineAsyncComponent(() => import('../components/somosComponents/porqueView.vue')),
      VentajasView: defineAsyncComponent(() => import('../components/somosComponents/ventajasView.vue')),
      CalltoAction: defineAsyncComponent(() => import('../components/universalComponents/callToAction.vue')),
      FooterView: defineAsyncComponent(() => import('../components/universalComponents/footerView.vue'))
    }
  }
</script>
