<script setup>
import {defineProps} from 'vue';

const props = defineProps({
	titleH2: {
		type: String,
		default: '',
	},
	titleP: {
		type: String,
		default: '',
	},
	class: {
		type: String,
		default: '',
	}
});
</script>
<template>
	<div class="flex justify-center" :class="props.class">
		<div>
			<h2 class="text-center font-semibold text-4xl mb-[4.688rem]">{{ props.titleH2 }}</h2>
			<div class="max-w-[40.625rem]">
				<p class="text-center text-lg font-normal">{{ props.titleP }}</p>
			</div>
		</div>
	</div>
	<slot/>
</template>