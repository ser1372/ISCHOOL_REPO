<!-- AdvantagesComponent.vue -->
<script setup>
import {defineProps} from 'vue';
import ItemAdvantages from './ItemAdvantages.vue';
import DescriptionMain from "../../../Components/DescriptionMain.vue";
//Пропсы передаються в основном шаблоне blade master.blade.php
const props = defineProps({
	advantages: {
		type: Object,
	},
});

const state = props.advantages
</script>

<template>
	<section id="advantages">
		<DescriptionMain class="mt-[2.75rem] md:mt-[9.5rem]" :titleH2="$t('advantages.h2title')"
										 :titleP="$t('advantages.ptitle')">
			<div class="container mx-auto px-4 py-8">
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 items-center justify-center md:gap-9"
						 v-if="state.length">
					<!-- Repeat this block for each item -->
					<div v-for="item in state" :key="item.advantages_en" class="mt-[2.5rem]">
						<ItemAdvantages :item="item"/>
					</div>
					<!-- End of the block -->
				</div>
			</div>
		</DescriptionMain>
	</section>
</template>

<style scoped>

</style>