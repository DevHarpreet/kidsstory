import { createApp } from "vue";
import App from './App.vue';
import router from './router.js';
import { ZiggyVue } from 'ziggy-js';

createApp(App).use(router).use(ZiggyVue).mount('#app');
