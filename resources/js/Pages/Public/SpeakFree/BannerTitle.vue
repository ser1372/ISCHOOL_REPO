<script setup>
import {defineProps} from 'vue';

const props = defineProps({
	class: {
		type: String,
		default: '',
	}
})

</script>

<template>
	<p :class="props.class">
		<slot/>
	</p>
</template>