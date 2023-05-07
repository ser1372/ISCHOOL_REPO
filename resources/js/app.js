import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import axios from 'axios';
import '../css/app.css';
import '../css/font.css';
import i18n from "./Includes/i18n/i18n";
import MasterLayout from '@/Layouts/MasterLayout.vue';
import freelesson from '@/Pages/Public/freelesson/freelesson.vue';
import advantages from '@/Pages/Public/advantages/advantages.vue';
import video from '@/Pages/Public/video/video.vue';
import club from '@/Pages/Public/speakingClub/club.vue';
import Loader from '@/Components/Loader/Loader.vue';


const app = createApp({});

app.component('master-layout', MasterLayout);
app.component('freelesson-component', freelesson);
app.component('advantages-component', advantages);
app.component('loader-component', Loader);
app.component('video-component',video);
app.component('club-component',club);

app.use(i18n);
app.mount('#app');

