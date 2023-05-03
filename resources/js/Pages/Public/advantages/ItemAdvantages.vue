<script setup>
import {defineProps} from 'vue';

const props = defineProps({
    item: {
        type: Object,
        default: () => [],
    },
});

const currentUrl = () => {
    return window.location.href;
}

const lang = localStorage.getItem('selectedLanguage');
</script>

<template>
    <div class="lg:flex lg:justify-end block">
        <div
            class="flex items-center whitespace-wrap lg:w-[18.75rem] lg:h-[9.375rem] lg:block sm:w-full sm:h-full">
            <img
                class="object-cover mr-[32px] w-[3.125rem] h-[3.125rem] lg:w-[5.625rem] lg:h-[5.625rem] lg:m-0"
                :src="/storage/ + item.img + '.png'"
                :alt="item.img">
            <div class="p-0 lg:pt-[2rem]">
                <h2 v-if="lang == 'en' || currentUrl().includes('/en')"
                    class="whitespace-pre-wrap xl:text-2xl text-xl lg:text-lg  lg:whitespace-nowrap font-semibold">
                    {{
                        item.advantages_en
                    }}
                </h2>
                <h2 v-else
                    class="whitespace-pre-wrap xl:text-2xl text-xl lg:text-lg   lg:whitespace-nowrap font-semibold">
                    {{
                        item.advantages_ua
                    }}
                </h2>
            </div>
        </div>
    </div>
</template>
