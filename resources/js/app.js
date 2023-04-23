import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import axios from 'axios';
import '../css/app.css';
import '../css/font.css';
import MasterLayout from '@/Layouts/MasterLayout.vue';
import freelesson from '@/Pages/Public/freelesson/freelesson.vue';


import i18n from "./Includes/i18n/i18n";

const app = createApp({});

app.component('master-layout',MasterLayout);
app.component('freelesson-component',freelesson);

app.use(i18n);

app.mount('#app');

