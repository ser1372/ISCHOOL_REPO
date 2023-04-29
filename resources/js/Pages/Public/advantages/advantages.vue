<!-- AdvantagesComponent.vue -->
<script setup>
import {defineProps} from 'vue';

const props = defineProps({
    advantages: {
        type: Array,
        default: () => [],
    },
});

console.log(props.advantages);
</script>


<template>
    <div>
        <div class="mt-[9.5rem] flex justify-center">
            <div>
                <h2 class="text-center font-semibold text-4xl mb-[4.688rem]">Наші переваги</h2>
                <div class="max-w-[40.625rem]">
                    <p class="text-center text-lg font-normal">Місія Ischool - це якісне навчання англійській мові, за
                        допомогою сильної команди
                        професіоналів і
                        сучасних
                        методик навчання спрямованих на отримання навичок для успішної роботи.</p>
                </div>
            </div>
        </div>
    </div>
</template>
