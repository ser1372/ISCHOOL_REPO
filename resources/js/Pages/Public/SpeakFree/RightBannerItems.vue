<script setup>
import Button from '../../../Components/Button.vue';
import Arrow from './Arrow.vue';
</script>

<template>
	<div class="flex justify-around">
		<Arrow/>
	</div>
	<p class="mb-[32px] text-xl font-normal">{{ $t("speakFree.p_title") }}</p>
	<Button class="w-full">{{ $t("under_items_price.trial") }}</Button>
</template>