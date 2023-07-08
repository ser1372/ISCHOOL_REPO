<script setup>
import Button from '@/Components/Button.vue';
import {onMounted, onUnmounted, reactive, ref} from 'vue';
import Textbanner from "../Components/textbanner.vue";
import Imagebanner from './imagebanner.vue';
import Arrowbanner from './arrowbanner.vue';
import Modal from '@/Components/Modal/Modal.vue';

let modalRef = ref(null);

const openModalHandler = () => {
	if (modalRef.value) {
		modalRef.value.openModal();
	}
};


function getCurrentScreenWidth() {
	const screen = reactive({width: window.innerWidth});

	const updateWidth = () => {
		screen.width = window.innerWidth;
	};

	onMounted(() => {
		window.addEventListener('resize', updateWidth);
	});

	onUnmounted(() => {
		window.removeEventListener('resize', updateWidth);
	});

	return screen;
}

const currentScreen = getCurrentScreenWidth();
</script>

<template>
	<Modal ref="modalRef"/>
	<div class="flex justify-center">
		<div class="block flex-wrap md:flex-nowrap md:flex justify-between items-center max-[425px]:justify-end">
			<div class="flex flex-col gap-10 relative">
				<h1 class="text-6xl font-medium max-w-[650px]">
					{{ $t('banner.h1title') }}
					<span class="text-[#814AF1]">iSchool</span>
				</h1>
				<p class="font-medium text-[#000000] leading-5 text-lg max-w-[512px]">{{ $t('banner.ptitle') }}</p>
				<Button @click="openModalHandler" class="max-w-[433px]">
					{{ $t('banner.freelesson') }}
				</Button>
				<Arrowbanner/>
			</div>
			<div class="flex flex-wrap justify-end max-[425px]:block">
				<Textbanner v-if="currentScreen.width < 500" reverse="right" id="main">{{
						$t('banner.chatmessage')
					}}
				</Textbanner>
				<Textbanner v-else reverse="left">{{ $t('banner.chatmessage') }}</Textbanner>
				<Imagebanner/>
			</div>
		</div>
	</div>
</template>
