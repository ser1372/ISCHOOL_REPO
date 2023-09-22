<script setup>
defineProps({
	type: {
		type: String,
		default: 'submit',
	},
	active: {
		type: Boolean,
		default: false,
	}
});

console.log(1);
</script>
<template>
	<button :type="type"
					class="
            rounded-xl
            text-lg
            text-[#FFFFFF]
            pt-[10px]
            pb-[10px]
            border-transparent
            transition-all
            duration-200
            ease-in-out
            border-[1px]
            hover:text-[#814AF1]
            hover:bg-[#FFFFFF]
            hover:border-[1px]
            hover:border-[#814AF1]
            active:bg-gradient-to-br
            active:from-purple-500
            active:to-purple-900
            active:text-[#FFFFFF]
        "
					:class="{
            'bg-[#814AF1]' : !active
        }"
	>
		<slot/>
	</button>
</template>
