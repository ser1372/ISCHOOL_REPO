<script setup>
import Header from '@/Components/Header/Header.vue';
import Footer from '@/Components/Footer/footer.vue';
</script>

<template>
	<Header/>
	<main class="max-w-7xl mx-auto pt-[4rem] md:pt-[4rem] px-3 h-full">
		<slot></slot>
	</main>
	<Footer/>
</template>
