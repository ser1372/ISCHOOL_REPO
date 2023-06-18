<script setup>
import LearnCard from "./learn_card.vue";
import LearnCardMain from "./learn_card_main.vue";
import {defineProps} from 'vue';

const props = defineProps({
	learn: {
		type: Object,
		default: () => [],
	}
});
</script>

<template>
	<div class="flex flex-col md:flex-row md:gap-4">
		<LearnCardMain v-for="item in props.learn" :item="item" class="md:w-1/2"></LearnCardMain>
		<div class="grid md:grid-cols-2 gap-4 md:w-1/2">
			<LearnCard v-for="(item, index) in props.learn" :item="item" :index="index" :key="item.id"></LearnCard>
		</div>
	</div>
</template>