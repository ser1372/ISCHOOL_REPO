<script setup>
import {defineProps} from 'vue';

const props = defineProps({
	item: {
		type: Object,
		default: '',
	},
})
</script>
<template>
	<div class="max-w-[25rem]">
		<div class="flex flex-row-reverse justify-end items-center gap-[24px] mb-[24px]">
			<h2 class="text-2xl font-semibold max-w-[254px]">{{ props.item.mainTitle }}</h2>
			<img :src="'/storage/cooperation/' + props.item.img +  '.png'" :alt="props.item.mainTitle">
		</div>
		<div>
			<p class="text-base">{{ props.item.description }}</p>
		</div>
	</div>
</template>