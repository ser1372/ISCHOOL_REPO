<script setup>
import Header from '@/Components/Header/Header.vue';
import Footer from '@/Components/Footer/footer.vue';
import {defineProps} from 'vue';

const props = defineProps({
	email: {
		type: Object,
		default: [],
	},
	telephone: {
		type: Object,
		default: [],
	},
	telegram: {
		type: Object,
		default: [],
	}
});

</script>

<template>
	<Header/>
	<main id="main" class="max-w-7xl mx-auto pt-[4rem] md:pt-[4rem] px-3 h-full">
		<slot></slot>
	</main>
	<Footer :telephone="props.telephone" :email="props.email" :telegram="props.telegram"/>
</template>
