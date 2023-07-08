<script setup>
import {defineProps, ref, toRefs, watchEffect} from "vue";
import {footerDataList as staticFooterDataList} from "./js/staticData";

const props = defineProps({
	email: {
		type: Object,
		default: () => ({}),
	},
	telephone: {
		type: Object,
		default: () => ({}),
	},
	telegram: {
		type: Object,
		default: () => ({}),
	}
});

// Создаем реактивную копию данных из staticData
const footerDataList = ref([...staticFooterDataList]);

// Get reactive props
const {email, telephone, telegram} = toRefs(props);

watchEffect(() => {
	// Обновляем свойства 'attributes' для каждого элемента списка
	footerDataList.value = footerDataList.value.map(item => {
		if (item.icon === 'fa-solid fa-envelope' && email.value && email.value.value) {
			return {...item, attributes: email.value.value};
		} else if (item.icon === 'fa-solid fa-phone' && telephone.value && telephone.value.value) {
			return {...item, attributes: telephone.value.value};
		} else if (item.icon === 'fa-brands fa-telegram' && telegram.value && telegram.value.value) {
			return {...item, attributes: telegram.value.value};
		} else {
			return item;
		}
	});
});

</script>

<template>
	<ul class="grid grid-cols-1 lg:grid-cols-2 gap-4">
		<li v-for="item in footerDataList" class="flex gap-[24px]">
			<i :class="item.icon" style="color: #ffffff;"></i>
			<p class="text-white text-base">{{ item.attributes }}</p>
		</li>
	</ul>
</template>