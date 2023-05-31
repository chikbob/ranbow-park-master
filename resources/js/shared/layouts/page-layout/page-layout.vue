<template>
    <div :class="cnPageLayout()">
        <Header/>
        <slot/>
        <Footer/>
    </div>
</template>

<script setup>
import {cnPageLayout} from './page-layout.const.js'
import Header from "@/shared/components/header/header.vue";
import Footer from "@/shared/components/footer/footer.vue";
</script>

<style scoped>

</style>
