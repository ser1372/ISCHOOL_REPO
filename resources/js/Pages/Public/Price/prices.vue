<script setup>
import {defineExpose, reactive} from 'vue';
import PriceCard from './price_card.vue';
import Switcher from './switcher.vue';
import UnderItems from '../itemsPrice/UnderItems.vue';
import {ItemsDescription, ItemsLessons, ItemsLevel, ItemsLevelEnglish} from './js/staticData.js';

const props = defineProps({
	prices: {
		type: String,
		required: true,
	}
});

let currency = reactive({value: 'UAH'});
let price = JSON.parse(props.prices);

const arrPriceUAH = price.map(price => price.price_uah);
const arrPriceGBP = price.map(price => price.price_gbp);

function chunkArray(array, chunkSize) {
	let results = [];

	while (array.length) {
		results.push(array.splice(0, chunkSize));
	}

	return results;
}

const chunkedItemsLevel = chunkArray(ItemsLevel, 3);
const chunkedItemsItemsLevelEnglish = chunkArray(ItemsLevelEnglish, 1);
const chunkedItemsLessons = chunkArray(ItemsLessons, 1);
const chunkedItemsDescription = chunkArray(ItemsDescription, 3);

const updateCurrency = (newCurrency) => {
	currency.value = newCurrency;
}

defineExpose({
	updateCurrency,
	currency
});
</script>

<template>
	<section class="w-full h-[100%] py-10" id="price">
		<div>
			<h2 class="text-center font-semibold text-4xl mb-[50px]">{{ $t("prices.name_block") }}</h2>
			<div class="max-w-[28.125rem] mx-auto">
				<p class="text-center  text-lg font-normal">{{ $t("prices.sub_title") }}</p>
			</div>
		</div>
		<Switcher @changeCurrency="updateCurrency"/>
		<div class="max-w-7xl mx-auto flex flex-col md:flex-row px-2 md:px-0">
			<div v-for="(item, index) in (currency.value === 'UAH' ? arrPriceUAH : arrPriceGBP)" :key="index"
					 class="relative w-full md:w-1/3 bg-white rounded-3xl shadow hover:shadow-xl transition duration-100 ease-in-out p-[16px] xl:p-[40px] md:mr-4 mb-10 md:mb-0">
				<PriceCard
						:itemsLevel="chunkedItemsLevel[index]"
						:itemsLessons="chunkedItemsLessons[index]"
						:itemsLevelEnglish="chunkedItemsItemsLevelEnglish[index]"
						:itemsDescription="chunkedItemsDescription[index]"
						:price="item"/>
			</div>
		</div>
		<UnderItems/>
	</section>
</template>
