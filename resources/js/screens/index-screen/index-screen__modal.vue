<template>
    <div :class="cnIndexScreen('modal')">
        <div :class="cnIndexScreen('modal-bigtext')">- Ціни -</div>
        <div :class="cnIndexScreen('modal-container')">
            <div v-for="ticket in tickets" :class="cnIndexScreen('modal-ticket')">
                <div :class="cnIndexScreen('modal-ticket-container')">
                    <div :class="cnIndexScreen('modal-ticket-container_photo')">
                        <img :src="`${ticket.poster}`" :alt="`${ticket.poster}`">
                    </div>
                    <div :class="cnIndexScreen('modal-ticket-container_textContainer')">
                        <div :class="cnIndexScreen('modal-ticket-container_text')">{{ ticket.title }}</div>
                        <div :class="cnIndexScreen('modal-ticket-container_subtext')">{{ ticket.subtitle }}</div>
                    </div>
                    <div>
                        <div :class="cnIndexScreen('modal-ticket-container_textPrice')">{{ ticket.price }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div :class="cnIndexScreen('modal-containerBuy')">
            <div :class="cnIndexScreen('modal-buy')">
                <form @submit.prevent="model.submit" :class="cnIndexScreen('modal-buy_list')">
                    <div :class="cnIndexScreen('modal-buy_content')">Є бажання забронювати білет?</div>
                    <input :class="cnIndexScreen('modal-buy_input')" placeholder="Email" id="first_name"
                        v-model="model.form.email" />
                    <div v-if="model.form.errors?.email">
                        {{ model.form.errors.email }}
                    </div>
                    <select v-model="model.form.ticket_id" :class="cnIndexScreen('modal-buy_text')">
                        <option v-for="ticket in tickets" :key="ticket.id" :value="ticket.id"
                            :class="cnIndexScreen('modal-buy_text')">
                            {{ ticket.title }}: {{ ticket.price }}
                        </option>
                    </select>
                    <button :class="cnIndexScreen('modal-buy_btn')" @click=success() type="submit">Забронювати</button>
                </form>
            </div>
        </div>
        <div :class="cnIndexScreen('modal-line')"></div>
    </div>
</template>

<script setup>
import { cnIndexScreen } from "./index-screen.const.js";
import { indexScreenModel } from "./index-screen.model.js";
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

function success() {
    Swal.fire({
        icon: 'success',
        title: 'Зроблено!',
        text: 'Ваш білет було відправлено на пошту!',
        border: '2px solid #000000',
        color: '#395167',
        background: '#F9E9E0',
        confirmButtonColor: '#5787BB'
    })
}


const model = indexScreenModel();
const tickets = model.tickets
</script>

<style lang="scss" scoped>
.index-screen__modal {
    display: flex;
    justify-content: space-around;

    flex-direction: column;

    &-ticket {
        display: flex;
        justify-content: space-around;
        flex-direction: row;

        width: 408px;
        height: 530px;
        background: #F9E9E0;
        border: 2px solid #000000;

        &-container {
            &_textContainer {
                height: 72px;
            }

            &_text {
                font-family: 'Gabriela', serif;
                font-style: normal;
                font-weight: 1000;
                font-size: 32px;
                line-height: 38px;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                margin-top: 10px;
                margin-bottom: 10px;

                color: #395167;
            }

            &_subtext {
                font-family: 'Gabriela', serif;
                font-style: normal;
                font-weight: 1000;
                font-size: 20px;
                line-height: 24px;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;

                color: #395167;
            }

            &_textPrice {
                font-family: 'Gabriela', serif;
                font-style: normal;
                font-weight: 1000;
                font-size: 128px;
                line-height: 154px;
                display: flex;
                align-items: center;
                text-align: center;
                justify-content: center;

                margin-top: 10px;

                color: #395167;
            }

            &_photo img {
                width: 408px;
                height: 276px;
            }
        }
    }

    &-container {
        display: flex;
        justify-content: space-around;
    }

    &-containerBuy {
        display: flex;
        justify-content: center;
    }

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

    &-buy {
        margin-top: 70px;

        width: 530px;
        height: 408px;
        background: #F9E9E0;
        border: 2px solid #000000;

        display: flex;
        justify-content: center;
        align-items: center;

        &_list {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        &_content {
            font-family: 'Gabriela', serif;
            font-style: normal;
            font-weight: 1000;
            font-size: 30px;
            line-height: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

            color: #395167;

            margin-bottom: 15%;
        }

        &_input {
            font-family: 'Gabriela', serif;
            font-style: normal;
            font-weight: 1000;
            font-size: 30px;
            line-height: 24px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

            color: #395167;

            margin-bottom: 20px;
        }

        &_text {
            font-family: 'Gabriela', serif;
            font-style: normal;
            font-weight: 1000;
            font-size: 20px;
            line-height: 24px;

            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

            color: #395167;
        }

        &_btn {
            box-sizing: border-box;
            width: 221px;
            height: 66px;
            background: #5787BB;
            border: 2px solid #395167;

            font-family: 'Gabriela', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 29px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #FFFFFF;

            margin-top: 40px;

            cursor: pointer;
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
