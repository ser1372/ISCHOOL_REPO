<script setup>
import {defineProps} from 'vue';

const props = defineProps({
	item: {
		type: Object,
		default: [],
	}
})
</script>

<template>
	<div v-if="props.item.id == 1">
		<div
				class="mb-[16px] max-w-md h-[340px]  bg-white rounded-xl items-center  shadow-md overflow-hidden md:max-w-2xl  flex flex-row-reverse">
			<div class="self-center md:flex-shrink-0 m-8">
				<img class="h-48 w-full object-contain md:w-48" :src="'/storage/learn/' + props.item.img + '.png'"
						 :alt="props.item.description">
			</div>
			<p class="ml-[48px] text-[37px] leading-tight font-semibold text-black" v-html="props.item.description"></p>
		</div>
	</div>
</template>