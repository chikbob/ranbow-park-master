<template>
    <IndexScreen />
</template>

<script setup>
import IndexScreen from "@/screens/index-screen/index-screen.vue";
import { indexScreenModel } from "@/screens/index-screen/index-screen.model.js";

const props = defineProps({
    tickets: Array
});

const model = indexScreenModel();
model.init(props.tickets);
</script>

<style>
body {
    margin: 0;
    border: 0;
    box-sizing: border-box;
    height: 100%;
    background-color: #F9E9E0;
}

.element::-webkit-scrollbar {
    width: 0;
  }
  
::-webkit-scrollbar {
    width: 0;
}
</style>
