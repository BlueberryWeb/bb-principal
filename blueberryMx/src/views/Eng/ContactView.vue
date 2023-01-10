<template>
    <MenuView/>
    <div class="main-content">
        <!-- ==================== Start header ==================== -->
        <HeaderView/>
        <!-- ==================== End header ==================== -->

        <!-- ==================== Start Form ==================== -->
        <FormView/>
        <!-- ==================== End Form ==================== -->


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
            HeaderView: defineAsyncComponent(() => import('../../components/engComponents/contactComponents/headerView.vue')),
            FormView: defineAsyncComponent(() => import('../../components/engComponents/contactComponents/formView.vue')),
            FooterView: defineAsyncComponent(() => import('../../components/engComponents/universalComponents/footerView.vue'))
        }
    }
</script>