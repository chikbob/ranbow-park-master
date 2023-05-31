<template>
    <div :class="cnIndexScreen('links')">
        <img src="@/assets/images/rainbow-park.png" alt="rainbow-park.png">
        <div :class="cnIndexScreen('links-request')">
            <div :class="cnIndexScreen('links-request-window')">
                <div :class="cnIndexScreen('links-request-window_hightext')">Про нас</div>
                <div :class="cnIndexScreen('links-request-window_text')">
                    Парк PA - це
                    <br>розважальний парк для
                    <br>дітей
                    та
                    дорослих
                </div>
            </div>
            <div :class="cnIndexScreen('links-request-window')">
                <div :class="cnIndexScreen('links-request-window_hightext')">Ціни</div>
                <div :class="cnIndexScreen('links-request-window_text')">Інформація про білети знаходиться нижче</div>
            </div>
            <div :class="cnIndexScreen('links-request-window')">
                <div :class="cnIndexScreen('links-request-window_hightext')">Як нас знайти?</div>
                <div :class="cnIndexScreen('links-request-window_text')">Адреса парку та <br>google мапа</div>
            </div>
        </div>

        <div :class="cnIndexScreen('links-line')"></div>
    </div>
</template>

<script setup>
import { cnIndexScreen } from "./index-screen.const.js";
</script>

<style lang="scss" scoped>
.index-screen__links {
    &-line {
        width: 100%;
        height: 4px;
        background-color: #FFFFFF;
        margin-top: 75px;
        margin-bottom: 75px;
    }

    & img {
        width: 100%;
        height: 600px;
    }

    &-request {
        width: 100%;
        display: flex;
        justify-content: space-around;
        margin-top: -150px;

        &-window {
            width: 320px;
            height: 200px;
            background: #F9E9E0;
            border: 2px solid #000000;
            display: flex;
            align-items: center;
            flex-direction: column;

            &:nth-child(1) {
                margin-left: 100px;
            }

            &:nth-child(3) {
                margin-right: 100px;
            }

            &_hightext {
                font-family: 'Gabriela', serif;
                font-style: normal;
                font-weight: 700;
                font-size: 32px;
                line-height: 38px;
                align-items: center;
                text-align: center;
                justify-content: center;
                margin-top: 23px;
                color: #395167;

                display: flex;
            }

            &_text {
                font-family: 'Gabriela', serif;
                font-style: normal;
                font-weight: 700;
                font-size: 24px;
                line-height: 29px;
                display: flex;
                align-items: center;
                text-align: center;
                margin-top: 20px;
                justify-content: center;
                color: #395167;

                height: 100%;
                align-items: center;

                display: flex;
            }
        }
    }
}
</style>