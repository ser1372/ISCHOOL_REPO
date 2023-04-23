<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
    active: {
        type: Boolean,
        default: false,
    }
});
</script>
<template>
    <button :type="type"
            class="
            rounded-xl
            text-lg
            text-[#FFFFFF]
            pt-[10px]
            pb-[10px]
            active:bg-[#561CCF]
        "
            :class="{
            'outline-none border-gray-900 bg-gray-500' : active,
            'bg-[#814AF1] hover:bg-gradient-to-br from-purple-500 to-purple-900' : !active
        }"
    >
        <slot/>
    </button>
</template>
