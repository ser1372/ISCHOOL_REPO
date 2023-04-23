<script setup>
const appName = import.meta.env.VITE_APP_NAME;
</script>

<template>
    <picture>
        <source srcset="/storage/logo.webp" type="image/webp">
        <img src="/storage/logo.webp" :alt="appName">
    </picture>
</template>
