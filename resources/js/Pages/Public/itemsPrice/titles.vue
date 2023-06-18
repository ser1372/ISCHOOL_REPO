<script setup>
import Button from '../../../Components/Button.vue';
</script>

<template>
	<div>
		<h2 class="text-[#FF6801] text-2xl font-semibold mb-[16px]">{{ $t("under_items_price.main_title") }}</h2>
		<p class="text-xl font-medium mb-[27px]">{{ $t("under_items_price.desc_title_first") }}<p
				class="text-[#814AF1]">{{ $t("under_items_price.desc_title_second") }}</p></p>
		<Button class="w-full">{{ $t("under_items_price.trial") }}</Button>
	</div>
</template>