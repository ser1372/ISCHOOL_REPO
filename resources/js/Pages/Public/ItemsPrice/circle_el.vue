<script setup>
const getLang = () => {
	return window.location.href.includes('/ua');
};

</script>
<template>
	<img class="object-contain" v-if="getLang()" src="/storage/underprice/circle.png" alt="english_about">
	<img class="object-contain" v-else src="/storage/underprice/circle_en.png" alt="english_about">
</template>