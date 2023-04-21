<script setup>
import { useI18n } from 'vue-i18n';

const { locale } = useI18n();

const switchLang = (lang) =>{
    locale.value = lang;
}

</script>

<template>
    <div>
        <ul class="flex gap-4">
            <li :class="{ 'text-purple-500': locale === 'ua' }" class="cursor-pointer" @click="switchLang('ua')">UA</li>
            <li :class="{ 'text-purple-500': locale === 'en' }" class="cursor-pointer" @click="switchLang('en')">EN</li>
        </ul>
    </div>
</template>
