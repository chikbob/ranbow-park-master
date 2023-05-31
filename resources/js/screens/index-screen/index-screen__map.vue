<template>
    <div :class="cnIndexScreen('map')">
        <div :class="cnIndexScreen('map-bigtext')">- Як нас знайти? -</div>
        <div :class="cnIndexScreen('map-container')">
            <div :class="cnIndexScreen('map-container_googleMap')">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.224107617321!2d35.11298797084357!3d47.835251599999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc60cef5ff4d29%3A0x2e987ce8f98fc192!2z0JrQsNGB0LrQsNC0INGE0L7QvdGC0LDQvdC-0LIgItCg0LDQtNGD0LPQsCI!5e0!3m2!1sru!2sno!4v1673863522393!5m2!1sru!2sno"
                    width="100%" height="350" style="border:0;" allowfullscreen="1" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</template>

<script setup>
import { cnIndexScreen } from "./index-screen.const.js";
import { indexScreenModel } from "./index-screen.model.js";

const model = indexScreenModel();
</script>

<style lang="scss" scoped>
.index-screen__map {

    &-bigtext {
        font-family: 'Gabriela', serif;
        font-style: normal;
        font-weight: 700;
        font-size: 40px;
        line-height: 29px;
        display: flex;
        align-items: center;
        text-align: center;
        margin-top: 20px;
        justify-content: center;
        color: #395167;
        margin-bottom: 70px;
    }
}
</style>