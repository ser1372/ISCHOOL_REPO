/* ИМПОРТЫ */
import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import '../css/app.css';
import '../css/font.css';
import '@fortawesome/fontawesome-free/css/all.css';
import i18n from "./Includes/i18n/i18n";
import MasterLayout from '@/Layouts/MasterLayout.vue';
import freelesson from '@/Pages/Public/freelesson/freelesson.vue';
import advantages from '@/Pages/Public/advantages/advantages.vue';
import video from '@/Pages/Public/video/video.vue';
import club from '@/Pages/Public/speakingClub/club.vue';
import prices from '@/Pages/Public/price/prices.vue';
import Loader from '@/Components/Loader/Loader.vue';
import Reviews from '@/Pages/Public/reviews/reviews.vue';
import LearnEnglish from "@/Pages/Public/learnEnglish/learnEnglish.vue";
/* END ИМПОРТЫ */


const app = createApp({});
/* ГЛОБАЛЬНЫЕ ФУНКЦИИ */

/* END ГЛОБАЛЬНЫЕ ФУНКЦИИ */

/* ИНИЦИАЛИЗАЦИЯ КОМПОНЕНТОВ */
app.component('master-layout', MasterLayout);
app.component('freelesson-component', freelesson);
app.component('advantages-component', advantages);
app.component('loader-component', Loader);
app.component('video-component', video);
app.component('club-component', club);
app.component('price-component', prices);
app.component('reviews-component', Reviews);
app.component('learn-component', LearnEnglish);
/* END ИНИЦИАЛИЗАЦИЯ КОМПОНЕНТОВ */

/* ПРИВЯЗКИ ИСПОЛЬЗЫВАНИЕ УТИЛИТ */
app.use(i18n);
app.mount('#app');
/* END ПРИВЯЗКИ ИСПОЛЬЗЫВАНИЕ УТИЛИТ */

