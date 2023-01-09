<template>
    <MenuView/>
    <HeaderView/>
    <div class="main-content">
         <!-- ==================== Start Contact ==================== -->
         <FormView/>
         <!-- ==================== End Contact ==================== -->

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
            HeaderView: defineAsyncComponent(() => import('../components/contactoComponents/headerView.vue')),
            FormView: defineAsyncComponent(() => import('../components/contactoComponents/formView.vue')),
            FooterView: defineAsyncComponent(() => import('../components/universalComponents/footerView.vue'))
        }
    }
</script>