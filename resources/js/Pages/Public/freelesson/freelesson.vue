<script setup>
import Button from '@/Components/Button.vue';
import Textbanner from "./textbanner.vue";
import Imagebanner from './imagebanner.vue';
import Arrowbanner from './arrowbanner.vue';
</script>

<template>
    <div class="flex justify-center">
        <div class="block flex-wrap md:flex-nowrap md:flex justify-between items-center max-[425px]:justify-end">
            <div class="flex flex-col gap-10 relative">
                <h1 class="text-6xl font-medium max-w-[650px]">
                    {{ $t('banner.h1title') }}
                    <span class="text-[#814AF1]">iSchool</span>
                </h1>
                <p class="font-medium text-[#000000] leading-5 text-lg max-w-[512px]">{{ $t('banner.ptitle') }}</p>
                <Button class="max-w-[433px]">{{ $t('banner.freelesson') }}</Button>
                <Arrowbanner/>
            </div>
            <div>
                <Textbanner/>
                <Imagebanner/>
            </div>
        </div>
    </div>
</template>
