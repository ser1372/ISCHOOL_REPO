<script setup>
import BannerTitle from "./BannerTitle.vue";
</script>

<template>
	<div class="relative">
		<BannerTitle
				class="right-[100px] lg:right-[-160px] text-base top-[26px] rotate-negative-3 absolute lg:text-2xl text-white bg-[#FF6801] rounded-[8px] px-[19px] py-[10px]">
			{{ $t('speakFree.title_banner_1') }}
		</BannerTitle>
		<img src="/storage/speak_free/banner.png" alt="NewLvl">
		<BannerTitle
				class="absolute left-[17px] top-[200px] 2xl:top-[330px] text-base lg:top-[305px] rotate-positive-3  lg:text-2xl text-[#FF6801] bg-white rounded-[8px] px-[19px] py-[10px]">
			{{ $t('speakFree.title_banner_2') }}
		</BannerTitle>
	</div>
</template>

<style scoped>
.rotate-negative-3 {
	transform: rotate(-3deg);
}

.rotate-positive-3 {
	transform: rotate(3deg);
}
</style>