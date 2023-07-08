<script setup>
import {defineEmits, defineProps} from 'vue';

const props = defineProps({
	type: {
		type: String,
		default: 'text',
	},
	placeholder: {
		type: String,
		default: '',
	},
	modelValue: {
		type: String,
		default: '',
	}
});

const emit = defineEmits(['update:modelValue']);

const updateValue = (event) => {
	emit('update:modelValue', event.target.value);
};
</script>

<template>
	<input :type="props.type"
				 :value="props.modelValue"
				 @input="updateValue"
				 class="rounded-[8px] border border-[#F2F4F5] bg-[#F2F4F5] w-full focus:ring-[#814AF1]"
				 :placeholder="props.placeholder" required>
</template>
