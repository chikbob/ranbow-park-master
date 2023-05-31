<template>
    <Link 
    :class="cnHeader('logo')" 
    href="/"
    >
    <img 
    :class="cnHeader('logo')" 
    src="@/assets/images/main-logo.png"
    >
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnHeader } from "@/shared/components/header/header.const.js";
</script>

<style>
.header__logo {
    position: absolute;

    margin-top: 10px;

    width: 125px;
    height: 125px;
}
</style>