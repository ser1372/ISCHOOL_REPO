<!-- AdvantagesComponent.vue -->
<script setup>
import {defineProps} from 'vue';

const lang = localStorage.getItem('selectedLanguage');

//Пропсы передаються в основном шаблоне blade master.blade.php
const props = defineProps({
    advantages: {
        type: Array,
        default: () => [],
    },
});

const state = props.advantages
</script>

<template>
    <div class="mt-[2.75rem] md:mt-[9.5rem] flex justify-center">
        <div>
            <h2 class="text-center font-semibold text-4xl mb-[4.688rem]">{{ $t('advantages.h2title') }}</h2>
            <div class="max-w-[40.625rem]">
                <p class="text-center text-lg font-normal">{{ $t('advantages.ptitle') }}</p>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 items-center justify-center"
             v-if="state.length">
            <!-- Repeat this block for each item -->
            <div v-for="item in state" :key="item.id" class="rounded-md mt-[2.5rem] overflow-hidden">
                <img class="object-cover" :src="/storage/ + item.img + '.png'" :alt="item.img">
                <div class="pt-[2rem]">
                    <h2 v-if="lang == 'ua'" class="text-2xl font-semibold">{{ item.advantages_ua }}</h2>
                    <h2 v-else class="text-2xl font-semibold">{{ item.advantages_en }}</h2>
                </div>
            </div>
            <!-- End of the block -->
        </div>
    </div>
</template>
