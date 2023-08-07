<script setup>
import { reactive, defineEmits } from 'vue'

// Предоставляем доступ к $emit
const emit = defineEmits(['changeCurrency'])

// Создаем реактивный объект с полем currency
const state = reactive({ currency: 'UAH' })

const changeActiveCurrency = (currency) => {
    state.currency = currency
    emit('changeCurrency', currency)
}
</script>

<template>
    <div class="flex justify-center mt-[44px] mb-[44px]">
        <button
            @click="changeActiveCurrency('UAH')"
            :class="{ 'bg-[#906FD4] text-white': state.currency === 'UAH', 'bg-[#FFFFFF] text-[#814AF1]': state.currency !== 'UAH' }"
            class="py-[16px] px-[32px] text-xl rounded-l-lg rounded-tr-none rounded-br-none rounded-bl-lg"
        >
            UAH, ₴
        </button>
        <button
            @click="changeActiveCurrency('GBP')"
            :class="{ 'bg-[#906FD4] text-white': state.currency === 'GBP', 'bg-[#FFFFFF] text-[#814AF1]': state.currency !== 'GBP' }"
            class="text-xl py-[16px] px-[32px] rounded-tl-none rounded-tr-[16px] rounded-br-[16px] rounded-bl-none"
        >
            GBR, £
        </button>
    </div>
</template>
