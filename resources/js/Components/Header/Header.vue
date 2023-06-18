<script setup>
import Lang from './Lang.vue';
import Logo from './Logo.vue';
import {ref} from 'vue';
import BurgerButton from './BurgerButton.vue';

let showMenu = ref(false);
const toggleNav = () => {
	return showMenu.value = !showMenu.value;
}

</script>
<template>
	<header class="max-w-screen-2xl mx-auto px-4 mt-8">
		<div class="flex justify-between items-center">
			<Logo/>
			<nav>
				<ul :class="showMenu ? 'flex absolute  w-full h-screen bg-white top-0 left-0 z-10' : 'hidden'"
						class="
                            flex-col
                            pt-8
                            lg:pt-0
                            space-y-4
                            lg:flex lg:space-y-0 lg:flex-row lg:items-center lg:space-x-10 lg:mt-0
                          ">
					<li>
						<a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#">{{ $t('menu.advantages') }}</a>
					</li>
					<li>
						<a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#">{{ $t('menu.club') }}</a>
					</li>
					<li>
						<a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#">{{ $t('menu.price') }}</a>
					</li>
					<li>
						<a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#">{{ $t('menu.feedback') }}</a>
					</li>
					<li>
						<a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#">{{ $t('menu.cooperation') }}</a>
					</li>
					<li>
						<a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2"
							 href="#">{{ $t('menu.contacts') }}</a>
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

