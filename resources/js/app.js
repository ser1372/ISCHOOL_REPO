import './bootstrap';
import Testim from '@/Components/Testim.vue';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import '../css/app.css';

const app = createApp({});

app.component('testim',Testim);

app.mount('#app');

