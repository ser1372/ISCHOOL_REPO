<script setup>
import Banner from './Banner.vue';
import RightBannerItems from "./RightBannerItems.vue";
</script>
<template>
	<section class="mt-[88px] h-full">
		<div class="flex gap-[30px] flex-col lg:flex-row">
			<div class="flex-1">
				<Banner/>
			</div>
			<div class="flex-1">
				<RightBannerItems/>
			</div>
		</div>
	</section>
</template>
