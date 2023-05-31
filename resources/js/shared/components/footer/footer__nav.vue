<template>
    <nav :class="cnFooter('nav')">
        <div :class="cnFooter('nav-container')">
            <div :class="cnFooter('nav-name')">
                <div :class="cnFooter('nav-name_text')">© PA</div>
            </div>
            <div :class="cnFooter('nav-messengers')">
                <div :class="cnFooter('nav-messengers_text')" class="text-icons">Приєднуйтесь у наші соц. мережі</div>
                <div :class="cnFooter('nav-messengers_icons')" class="container-icons">
                    <a href="https://twitter.com/gillianpark17" target="_blank"><img
                            :class="cnFooter('nav-messengers_icon')" src="@/assets/images/twitter.png" alt="twitter.png"></a>
                    <a href="https://instagram.com/rainbow_park_yoga/" target="_blank"><img
                            :class="cnFooter('nav-messengers_icon')" src="@/assets/images/insta.png" alt="insta.png"></a>
                    <a href="https://facebook.com/RainbowParkYoga1" target="_blank"><img
                            :class="cnFooter('nav-messengers_icon')" src="@/assets/images/facebook.webp" alt="facebook.webp"></a>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { cnFooter } from './footer.const';
</script>

<style lang="scss" scoped>
.footer__nav {
    margin-top: -5px;
    height: 136px;
    width: 100%;
    background: url('@/assets/images/footer.png');

    &-messengers {
        display: flex;
        justify-content: space-around;
        flex-direction: column;

        &_text {
            font-family: 'Gabriela', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 29px;
            
            margin-right: 60px;

            display: flex;
            justify-content: center;

            color: #000000;
        }

        &_icons {
            margin-right: 60px;
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        &_icon {
            width: 50px;
            height: 50px;
        }
    }

    &-name {
        &_text {
            font-family: 'Gabriela', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 29px;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            max-width: auto;
            color: #000000;
            margin-left: 80px;
        }

        & img {
            width: 100%;
            height: 600px;
        }
    }

    &-container {
        display: flex;
        justify-content: space-between;
        align-items: center;

        height: 100%;
    }
}
</style>