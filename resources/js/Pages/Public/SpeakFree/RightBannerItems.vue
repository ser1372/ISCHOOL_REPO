<script setup>
import Button from '../../../Components/Button.vue';
import Arrow from './Arrow.vue';
import Modal from '../../../../js/Components/Modal/Modal.vue';
import {ref} from "vue";

let modalRef = ref(null);
const openModalHandler = () => {
	if (modalRef.value) {
		modalRef.value.openModal();
	}
};
</script>

<template>
	<Modal ref="modalRef"/>
	<div class="flex justify-around">
		<Arrow/>
	</div>
	<p class="mb-[32px] text-xl font-normal">{{ $t("speakFree.p_title") }}</p>
	<Button @click="openModalHandler" class="w-full">{{ $t("under_items_price.trial") }}</Button>
</template>