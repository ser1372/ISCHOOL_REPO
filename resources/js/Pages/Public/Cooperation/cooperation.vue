<script setup>
import DescriptionMain from "@/Components/DescriptionMain.vue";
import CooperationCard from "./cooperation_card.vue";
import {stateCoop} from './js/staticData';
import Button from '../../../Components/Button.vue';
</script>
<template>
	<section class="mt-[100px] mb-[42px]">
		<DescriptionMain :titleH2="$t('cooperation.titleH2')" :titleP="$t('cooperation.titleP')"></DescriptionMain>
		<div class="flex justify-between mt-[60px] flex-col md:flex-row">
			<CooperationCard v-for="item in stateCoop" :item="item" :key="item.img"></CooperationCard>
		</div>
		<div class="flex justify-center mt-[44px]">
			<Button class="w-full lg:w-[30%] mt-[44px]">{{ $t("cooperation.tutor") }}</Button>
		</div>
	</section>
</template>