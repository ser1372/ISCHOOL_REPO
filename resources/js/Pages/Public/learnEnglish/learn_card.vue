<script setup>
import {defineProps} from 'vue';

const props = defineProps({
	item: {
		type: Object,
		default: () => [],
	},
	index: {
		type: Number,
		default: 0,
	}
});

const currentUrl = () => {
	return window.location.href;
}
</script>

<template>
	<div class="relative" v-if="props.item.id != 1">
		<div
				class=" p-[32px] mx-auto bg-white rounded-xl shadow-md overflow-hidden">
			<div
					class="w-[41px] absolute right-[-13px] top-[-12px] grid place-content-center h-[41px] bg-white rounded-[50%] border border-[#814AF1] text-2xl text-[#814AF1] font-semibold">
				{{ props.index }}
			</div>
			<div class="flex justify-center items-center gap-[16px]">
				<div class="self-center md:flex-shrink-0">
					<img class="" :src=" '/storage/learn/' + props.item.img + '.png'"
							 :alt="props.item.description">
				</div>
				<div class="flex items-center">
					<p class="block  font-semibold text-2xl lg:text-xl leading-tight text-black"
						 v-if="currentUrl().includes('/en')">{{
							props.item.description_en
						}}</p>
					<p class="block font-semibold text-2xl lg:text-xl leading-tight text-black" v-else>{{
							props.item.description
						}}</p>
				</div>
			</div>
		</div>
	</div>
</template>
