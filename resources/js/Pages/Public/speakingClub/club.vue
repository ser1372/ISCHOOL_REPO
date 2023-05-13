<script setup>
import Textbanner from "../Components/textbanner.vue";
const arrClub = [
    'third',
    'second',
    'fourth',
    'first',
    'five',
];
</script>

<template>
    <div class="flex justify-center">
        <div>
            <h2 class="text-center font-semibold text-4xl mb-[50px]">Speaking Club</h2>
            <div class="max-w-[28.125rem]">
                <p class="text-center text-lg font-normal">{{ $t('speakingClub.ptitle') }}</p>
            </div>
        </div>
    </div>
    <section class="cards_wrapper mt-[100px] hidden lg:block">
        <div class="flex justify-center">
            <div class="circle">
                <div class="card" v-for="(club, index) in arrClub" :key="club"
                     :style="{ '--angle': index * (360 / arrClub.length) + 'deg' }">
                    <img class="w-[181px] h-[181px] dynamic-rotate" :src="`/storage/club/${club}.png`" :alt="club">
                </div>
            </div>
        </div>
    </section>
</template>

