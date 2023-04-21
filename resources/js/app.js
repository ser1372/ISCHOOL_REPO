import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import axios from 'axios';
import '../css/app.css';
import '../css/font.css';
import Header from '@/Components/Header.vue';
import i18n from "./Includes/i18n/i18n";

const app = createApp({});

app.component('header-component',Header);
app.use(i18n);

app.mount('#app');

