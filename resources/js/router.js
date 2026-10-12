import { createRouter, createWebHistory } from "vue-router";
import HomePage from "./Pages/HomePage.vue";
import AboutUs from "./Pages/AboutUs.vue";
import Categories from "./Pages/Categories.vue";
import StoryDetail from "./Pages/StoryDetail.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: HomePage },
        { path: '/about-us', component: AboutUs },
        { path: '/categories', component: Categories },
        { path: '/story-detail/:slug', component: StoryDetail }
    ],
});

export default router;