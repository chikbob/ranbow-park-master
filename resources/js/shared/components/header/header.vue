<template>
    <header :class="cnHeader()">
        <HeaderLogo/>
        <HeaderNav/>
    </header>
</template>

<script setup>
import {cnHeader} from "./header.const.js";
import HeaderLogo from './header__logo.vue';
import HeaderNav from './header__nav.vue';
</script>

<style>
.header {
    position: relative;

    display: flex;
    justify-content: center;
}
</style>
