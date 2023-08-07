<script setup>
import Lang from './Lang.vue';
import Logo from './Logo.vue';
import {ref} from 'vue';
import BurgerButton from './BurgerButton.vue';

let showMenu = ref(false);
const toggleNav = () => {

	if (!showMenu.value) {
		document.body.classList.add('no-scroll');
	} else {
		document.body.classList.remove('no-scroll');
	}

	return showMenu.value = !showMenu.value;
}

const hideNav = () => {
	if (window.innerWidth <= 950) { // проверка ширины окна, скрытие меню для мобильных устройств
		document.body.classList.remove('no-scroll');
		return showMenu.value = false;
	}
}

</script>
<template>
	<header class="max-w-screen-6xl mx-auto bg-[#F4EFFF] pb-[1rem] z-[100] px-4 2xl:px-[370px] pt-4 fixed w-full">
		<div class="flex justify-between items-center">
			<Logo/>
			<nav>
				<ul :class="showMenu ? 'flex absolute h-[1500px]  w-full backdrop-blur-[18px] h-[80vh] top-0 left-0 z-10' : 'hidden'"
						class="
									flex-col
									pt-8
									lg:pt-0
									space-y-4
									lg:flex lg:space-y-0 lg:flex-row lg:items-center lg:space-x-10 lg:mt-0
								">
					<li>
						<a @click="hideNav"
							 class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#advantages">{{ $t('menu.advantages') }}</a>
					</li>
					<li>
						<a @click="hideNav" class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#speakingclub">{{ $t('menu.club') }}</a>
					</li>
					<li>
						<a @click="hideNav" class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#price">{{ $t('menu.price') }}</a>
					</li>
					<li>
						<a @click="hideNav" class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#reviews">{{ $t('menu.feedback') }}</a>
					</li>
					<li>
						<a @click="hideNav" class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#cooperation">{{ $t('menu.cooperation') }}</a>
					</li>
					<li>
						<a @click="hideNav" class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#contacts">{{ $t('menu.contacts') }}</a>
					</li>
				</ul>
			</nav>
			<Lang/>
			<div @click="toggleNav" class="flex lg:hidden">
				<BurgerButton/>
			</div>
		</div>
	</header>
</template>

