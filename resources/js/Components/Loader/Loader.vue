<!-- LazyLoader.vue -->
<script setup>
import { ref, onMounted } from 'vue';

const isLoading = ref(true);
const isLoaded = ref(false);

onMounted(async () => {
    try {
        const masterLayoutModule = await import('@/Layouts/MasterLayout.vue');
        MasterLayout.value = masterLayoutModule.default;
    } finally {
        isLoading.value = false;
        isLoaded.value = true;
    }
})

const MasterLayout = ref(null);
</script>

<template>
    <div v-if="isLoading" class="h-[100vh] w-[100%] flex items-center justify-center">
        <div class="loader transition-opacity duration-500 ease-in" :class="{'opacity-0': isLoaded}">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div v-else>
        <slot></slot>
    </div>
</template>
