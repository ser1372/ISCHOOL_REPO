<template>
    <header class="max-w-screen-2xl mx-auto px-3 mt-8">
        <div class="flex justify-between items-center flex-wrap">
            <Logo/>
            <nav class="w-full lg:w-auto mt-4 lg:mt-0">
                <ul class="flex flex-wrap lg:flex-row justify-center lg:justify-start">
                    <li v-for="(item, index) in menuItems" :key="index">
                        <a class="font-medium text-lg lg:text-base px-4 py-2" :href="item.url">{{ item.label }}</a>
                    </li>
                </ul>
            </nav>
            <Lang/>
        </div>
    </header>
</template>

<script setup>
import Lang from './Lang.vue';
import Logo from './Logo.vue';

const menuItems = [
    {label: 'Наші переваги', url: '#'},
    {label: 'Speaking club', url: '#'},
    {label: 'Ціни', url: '#'},
    {label: 'Відгуки', url: '#'},
    {label: 'Співпраця', url: '#'},
    {label: 'Контакти', url: '#'},
];
</script>
