<template>
    <div :class="cnIndexScreen('description')">
        <div :class="cnIndexScreen('description-bigtext')">- Про нас -</div>

        <div :class="cnIndexScreen('description-container')">
            <div>
                <div :class="cnIndexScreen('description-container-background')">
                    <div :class="cnIndexScreen('description-container-background_text')">
                        Парк PA - це зразок<br>пейзажного паркового<br>мистецтва - композиції води,<br>землі, каменів,
                        рослин,<br>архітектурних споруд і<br>скульптур.
                    </div>
                </div>
                <div :class="cnIndexScreen('description-container-background_photo')">
                    <img src="@/assets/images/mid-left.jpg" alt="mid-left.jpg">
                </div>
            </div>

            <div :class="cnIndexScreen('description-container_center')">
                <div :class="cnIndexScreen('description-container-background_photo')">
                    <img src="@/assets/images/mid-center.jpg" alt="mid-center.jpg">
                </div>
                <div :class="cnIndexScreen('description-container-background_exception')">
                    <div :class="cnIndexScreen('description-container-background_text')">
                        Парк заснований у 1796 році<br>польським магнатом<br>Станіславом Щенсним<br>Потоцьким на честь
                        дружини<br>Софії, і подарований їй до дня<br>іменин в травні 1802 року.
                    </div>
                </div>
            </div>

            <div>
                <div :class="cnIndexScreen('description-container-background')">
                    <div :class="cnIndexScreen('description-container-background_text')">
                        Нині «PA» - найбільший<br>центр з інтродукції та<br>акліматизації рослин, де<br>нараховується
                        понад 3 тисячі<br>таксонів різноманітних<br>рослин.
                    </div>
                </div>
                <div :class="cnIndexScreen('description-container-background_photo')">
                    <img src="@/assets/images/mid-right.jpg" alt="mid-right.jpg">
                </div>
            </div>
        </div>
        <div :class="cnIndexScreen('description-line')"></div>
    </div>
</template>

<script setup>
import { cnIndexScreen } from "./index-screen.const.js";
</script>

<style lang="scss" scoped>
.index-screen__description {
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

    &-container {
        display: flex;
        justify-content: center;

        &-background {
            width: 368px;
            height: 200px;
            display: flex;

            background: rgba(255, 255, 255, 0.6);

            margin-bottom: 30px;

            &_exception {
                width: 368px;
                height: 200px;
                display: flex;

                background: rgba(255, 255, 255, 0.6);

                margin-top: 27px;
            }

            &_text {
                font-family: 'Gabriela', serif;
                font-style: normal;
                width: 100%;
                font-weight: 700;
                font-size: 22px;
                line-height: 29px;
                display: flex;
                align-items: center;
                text-align: center;
                justify-content: center;
                color: #395167;
            }

            &_photo img {
                width: 368px;
                height: 276px;
            }
        }

        &_center {
            margin: 0 30px;
        }
    }

    &-line {
        width: 100%;
        height: 4px;
        background-color: #FFFFFF;
        margin-top: 75px;
        margin-bottom: 75px;
    }
}
</style>