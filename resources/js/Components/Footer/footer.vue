<script setup>
import LogoWhite from '../LogoWhite.vue';
import ListFooter from './listFooter.vue';
import {defineProps} from "vue";

const props = defineProps({
	email: {
		type: Object,
		default: [],
	},
	telephone: {
		type: Object,
		default: [],
	},
	telegram: {
		type: Object,
		default: [],
	}
});

</script>
<template>
	<footer class="bg-black" id="contacts">
		<div class="max-w-7xl mx-auto pt-[4rem] md:pt-[4rem] px-3 h-full min-h-[300px]">
			<div class="flex justify-between lg:items-center flex-col lg:flex-row">
				<div>
					<LogoWhite class="mb-[48px]"/>
					<p class="text-white max-w-[520px] mb-[38px]">{{ $t("footer.title") }}</p>
				</div>
				<div>
					<ListFooter :telephone="props.telephone" :email="props.email" :telegram="props.telegram"/>
				</div>
			</div>
		</div>
	</footer>
</template>