<script setup>
import {defineProps} from 'vue';

const props = defineProps({
	type: {
		type: String,
		default: 'text',
	},
	placeholder: {
		type: String,
		default: '',
	}
});

</script>
<template>
	<input :type="props.type"
				 class="rounded-[8px] border border-[#F2F4F5] bg-[#F2F4F5] w-full focus:ring-[#814AF1]"
				 :placeholder="props.placeholder" required>
</template>