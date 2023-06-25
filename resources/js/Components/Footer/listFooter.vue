<script setup>
import {footerDataList} from "./js/staticData";
</script>
<template>

	<ul class="grid grid-cols-1 lg:grid-cols-2 gap-4">
		<li v-for="item in footerDataList" class="flex gap-[24px]">
			<i :class="item.icon" style="color: #ffffff;"></i>
			<p class="text-white text-base">{{ item.attributes }}</p>
		</li>
	</ul>
</template>