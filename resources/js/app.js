import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import axios from 'axios';
import '../css/app.css';
import Header from '@/Components/Header.vue';

const app = createApp({});

app.component('header-component',Header);

app.mount('#app');

