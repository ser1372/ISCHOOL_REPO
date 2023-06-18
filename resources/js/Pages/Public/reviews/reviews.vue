<script setup>
import {defineProps} from 'vue';
import DescriptionMain from "@/Components/DescriptionMain.vue";
import ReviewCard from './reviewCard.vue';

const props = defineProps({
	reviews: {
		type: Object,
		default: [],
	}
});
</script>

<template>
	<section class="mt-[130px] h-full mb-[120px]">
		<DescriptionMain :titleH2="$t('reviews.title_h2')"
										 :titleP="$t('reviews.title_p')">
			<div class="flex lg:justify-between lg:flex-nowrap mt-[50px] flex-wrap gap-[20px] justify-center ">
				<ReviewCard :reviews="props.reviews"></ReviewCard>
			</div>
		</DescriptionMain>
	</section>
</template>