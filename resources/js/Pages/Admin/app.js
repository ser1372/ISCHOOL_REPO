import '../../bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import axios from 'axios';
import '../../../css/app.css';
import '../../../css/font.css';
import store from '/resources/js/Pages/Admin/store/store.js';
import Login from '@/Pages/Admin/Authorize/Login.vue';
import CurrentUser from '@/Pages/Admin/Authorize/CurrentUser.vue';
const app = createApp({});

app.component('login-component',Login);
app.component('current-user',CurrentUser);
app.use(store);

app.mount('#app');
