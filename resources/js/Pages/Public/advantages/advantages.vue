<!-- AdvantagesComponent.vue -->
<script setup>
import {defineProps} from 'vue';
import ItemAdvantages from './ItemAdvantages.vue';

//Пропсы передаються в основном шаблоне blade master.blade.php
const props = defineProps({
    advantages: {
        type: Object,
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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 items-center justify-center md:gap-9"
             v-if="state.length">
            <!-- Repeat this block for each item -->
            <div v-for="item in state" :key="item.advantages_en" class="mt-[2.5rem]">
                <ItemAdvantages :item="item"/>
            </div>
            <!-- End of the block -->
        </div>
    </div>
</template>
