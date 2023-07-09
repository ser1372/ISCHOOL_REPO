<script setup>
import {defineProps} from 'vue';

const props = defineProps({
	reviews: {
		type: Object,
		default: [],
	}
});

const getLang = () => {
	return window.location.href.includes('/en');
};

</script>

<template>
	<div class="bg-white shadow rounded-xl w-[370px]" v-for="review in props.reviews" :key="review.id">
		<div class="content">
			<div class="flex justify-between items-center">
				<div>
					<img class="rounded-[50%] m-[20px]"
							 :src=" '/storage/'+ review.img"
							 width="120" height="120"
							 :alt="review.name">
				</div>
				<div class="items-desk-time-name">
					<p class="mb-[48px] mr-[24px] text-xs">{{ review.date }}</p>
					<p v-if="getLang()"
						 class="text-2xl text-white bg-[#814AF1] border-l-1 border-t-1 border-b-1 border-purple-700 rounded-l-3xl py-[10px] pl-[20px]">
						{{ review.name_en }}</p>
					<p v-else
						 class="text-2xl text-white bg-[#814AF1] border-l-1 border-t-1 border-b-1 border-purple-700 rounded-l-3xl py-[10px] pl-[20px]">
						{{ review.name }}</p>
					<p></p>
				</div>
			</div>
			<p v-if="getLang()" class="text-base p-[30px] font-normal">
				{{ review.description_en }}</p>
			<p v-else class="text-base p-[30px] font-normal">
				{{ review.description }}</p>
		</div>
	</div>
</template>