<!-- LazyLoader.vue -->
<script setup>
import { ref, onMounted } from 'vue';

const isLoading = ref(true);

onMounted(async () => {
    try {
        const masterLayoutModule = await import('@/Layouts/MasterLayout.vue');
        MasterLayout.value = masterLayoutModule.default;
    } finally {
        isLoading.value = false;
    }
});

const MasterLayout = ref(null);
</script>

<template>
    <div v-if="isLoading" class="h-[100vh] w-[100%] flex items-center justify-center">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div v-else>
            <slot></slot>
    </div>
</template>
