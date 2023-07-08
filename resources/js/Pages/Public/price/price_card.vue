<script setup>
import {defineProps, ref} from "vue";
import Button from '../../../../js/Components/Button.vue';
import Modal from '../../../../js/Components/Modal/Modal.vue';

let modalRef = ref(null);
const openModalHandler = () => {
	if (modalRef.value) {
		modalRef.value.openModal();
	}
};

const props = defineProps({
	price: {
		type: String,
		default: '0',
	},
	itemsLevel: {
		type: Array,
		default: '',
	},
	itemsLevelEnglish: {
		type: Array,
		default: '',
	},
	itemsLessons: {
		type: Array,
		default: '',
	},
	itemsDescription: {
		type: Array,
		default: '',
	}
});
</script>
<template>
	<Modal ref="modalRef"/>
	<h3 class="text-2xl mb-[9px] text-black font-[500] text-center" v-for="item in props.itemsLessons">{{ item }}</h3>
	<hr/>
	<p class="text-[50px] text-[#814AF1]  text-center font-semibold">{{ props.price }} <span
			class="text-[#969696] text-[40px] font-semibold">/{{ $t("prices.min") }}</span></p>
	<hr/>
	<h3 class="text-2xl font-[500] mt-[14px]">{{ $t("prices.lvl") }}</h3>
	<p class="text-base text-[#969696]" v-for="englishLvl in props.itemsLevelEnglish">{{ englishLvl }}</p>
	<div class="text-sm text-gray-600 mt-4" v-for="level in props.itemsLevel ">
		<p class="my-2 text-base"><i class="fa-regular fa-square-check fa-lg mr-[12px]"
																 style="color: #814af1;"></i>{{ level }}</p>
	</div>
	<ul class="list-disc ml-[27px] text-base font-normal marker:mr-[22px] marker:text-2xl">
		<li class="mb-[16.5px] item" v-for="item in props.itemsDescription">{{ item }}</li>
	</ul>
	<div class="flex justify-center sub">
		<Button type="button" @click="openModalHandler" class="m-[37px] absolute bottom-[-20px] w-[80%] lg:m-[55px]">
			{{ $t("prices.subscribe") }}
		</Button>
	</div>
</template>


<style scoped>
.item:last-child {
	padding-bottom: 26px;
}

.sub {
	margin: 20px;
}

.sub:nth-child(3n) {
	margin: 0px;
}
</style>
