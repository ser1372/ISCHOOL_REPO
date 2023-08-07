<script setup>
import Textbanner from "../Components/textbanner.vue";
</script>
<template>
    <Textbanner reverse="right" id="index1" class="text-center absolute top-[10%] left-[5%] xl:left-[13%]">
        <p class="font-semibold">{{ $t("speakingClub.banners.index1") }}</p>
    </Textbanner>
    <Textbanner reverse="left" id="index2" class="text-center absolute top-[33%] left-[77%] xl:left-[73%]"><p
        class="font-semibold whitespace-nowrap">{{ $t("speakingClub.banners.index2") }}</p></Textbanner>
    <Textbanner reverse="left" id="index3" class="text-center absolute top-[80%] left-[77%] xl:left-[73%]">
        <p class="font-semibold whitespace-nowrap">{{ $t("speakingClub.banners.index3") }}</p>
    </Textbanner>
    <Textbanner reverse="right" id="index4" top="39.2px" class="absolute top-[80%] left-[1%] xl:left-[9%]">
        <p class="font-semibold">{{ $t("speakingClub.banners.index4") }}</p>
    </Textbanner>
    <slot></slot>
</template>
