<script setup>
import { defineProps } from "vue";
const state = defineProps({
    reverse: {
        type: String,
    },
});

</script>
<template>
    <div class="flex float-left justify-end mt-[3.063rem] md:mt-0">
        <div v-if="state.reverse == 'right'" class=" tangleright
        relative border-[1px] w-[225px] bg-[#F4EFFF] border-[#814AF1] rounded-[1.875rem] p-[0.7rem]">
            <p class="z-10 relative text-base font-normal leading-[1.188rem]"><slot/></p>
        </div>
        <div v-else class="
        tangle
        relative border-[1px] w-[225px] bg-[#F4EFFF] border-[#814AF1] rounded-[1.875rem] p-[0.7rem]">
            <p class="z-10 relative text-base font-normal leading-[1.188rem]"><slot/></p>
        </div>
    </div>
</template>

<style>
.tangle::after {
    content: '';
    position: absolute;
    left: 8px;
    top: 44.2px;
    width: 17.56px;
    height: 22.56px;
    background: #F4EFFF;
    border: 1px solid transparent;
    border-top-color: #814AF1;
    border-left-color: #814AF1;
    transform: matrix(0.21, -1.62, 0.65, -0.76, -7, -4);
}

.tangleright::after{
    content: '';
    position: absolute;
    left: 213px;
    top: 39.2px;
    width: 10.56px;
    height: 20.56px;
    background: #F4EFFF;
    border: 1px solid transparent;
    border-top-color: #814AF1;
    border-left-color: #814AF1;
    transform: matrix(-1.8, -0.75, -0.60, -0.85, 0, 0);
}
</style>
