<script setup>
import LogoWhite from '../LogoWhite.vue';
import ListFooter from './listFooter.vue';
</script>
<template>
	<footer class="bg-black">
		<div class="max-w-7xl mx-auto pt-[4rem] md:pt-[4rem] px-3 h-full min-h-[300px]">
			<div class="flex justify-between lg:items-center flex-col lg:flex-row">
				<div>
					<LogoWhite class="mb-[48px]"/>
					<p class="text-white max-w-[520px] mb-[38px]">{{ $t("footer.title") }}</p>
				</div>
				<div>
					<ListFooter/>
				</div>
			</div>
		</div>
	</footer>
</template>