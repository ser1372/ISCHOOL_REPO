<script setup>
import {defineProps} from 'vue';

const props = defineProps({
	video: {
		type: Object,
		default: [],
	},
});
</script>
<template>
	<div v-if="props.video.value !=='' ">
		<video loop controls class="absolute left-0 w-full lg:h-[900px] object-cover">
			<source type="video/mp4" :src="props.video.value">
		</video>
		<div class="lg:h-[62.5rem] sm:h-[31.5rem] h-[16.5rem]"></div>
	</div>
</template>
