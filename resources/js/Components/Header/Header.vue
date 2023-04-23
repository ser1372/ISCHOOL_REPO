
<script setup>
import Lang from './Lang.vue';
import Logo from './Logo.vue';
import { ref } from 'vue';

let showMenu = ref(false);
const toggleNav = () => {
    return showMenu.value = !showMenu.value;
}

</script>
<template>
    <header class="max-w-screen-2xl mx-auto px-3 mt-8">
        <div class="flex justify-between items-center">
            <Logo/>
            <nav>
                <ul :class="showMenu ? 'flex absolute' : 'hidden'"
                    class="
                         flex-col
                         mt-8
                         space-y-4
                         md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0
                        " >
                    <li>
                        <a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2" href="#">{{$t('menu.advantages')}}</a>
                    </li>
                    <li>
                        <a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2" href="#">{{$t('menu.club')}}</a>
                    </li>
                    <li>
                        <a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2" href="#">{{$t('menu.price')}}</a>
                    </li>
                    <li>
                        <a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2" href="#">{{$t('menu.feedback')}}</a>
                    </li>
                    <li>
                        <a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2" href="#">{{$t('menu.cooperation')}}</a>
                    </li>
                    <li>
                        <a class="font-medium whitespace-nowrap text-lg lg:text-base px-4 py-2" href="#">{{$t('menu.contacts')}}</a>
                    </li>
                </ul>
            </nav>
            <Lang/>
            <div @click="toggleNav" class="flex md:hidden">
                <button
                    type="button"
                    class="
                              text-gray-100
                              hover:text-gray-400
                              focus:outline-none focus:text-gray-400
                            "
                >
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-[#000000]">
                        <path
                            fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
</template>

