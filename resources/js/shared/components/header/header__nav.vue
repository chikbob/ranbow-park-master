<template>
    <nav :class="cnHeader('nav')">
   </nav>
</template>

<script setup>
import { cnHeader } from './header.const';
</script>

<style scoped>
.header__nav {
   width: 100%;
   height: 150px;
   background: #F9E9E0;

   display: flex;
   justify-content: center;
   align-items: center;
}
</style>