<template>
    <PageLayout>
        <main :class="cnIndexScreen()">
            <IndexScreenLinks />
            <IndexScreenDescription/>
            <IndexScreenModal />
            <IndexScreenMap />
        </main>
    </PageLayout>
</template>

<script setup>
import PageLayout from "@/shared/layouts/page-layout/page-layout.vue";
import { cnIndexScreen } from "./index-screen.const.js";
import IndexScreenModal from "./index-screen__modal.vue";
import IndexScreenLinks from "./index-screen__links.vue";
import IndexScreenDescription from "./index-screen__description.vue";
import IndexScreenMap from "./index-screen__map.vue";
</script>

<style scoped></style>
