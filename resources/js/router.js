import { createRouter, createWebHistory } from "vue-router";
import HomePage from "./Pages/HomePage.vue";
import AboutUs from "./Pages/AboutUs.vue";
import Categories from "./Pages/Categories.vue";
import StoryDetail from "./Pages/StoryDetail.vue";
import Stories from "./admin/Story/Stories.vue";
import addCategory from "./admin/Category/addCategory.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: HomePage },
        { path: '/about-us', component: AboutUs },
        { path: '/categories', component: Categories },
        { path: '/story-detail/:slug', component: StoryDetail },

        //Admin URL
        { path: '/admin/story', component: Stories },
        { path: '/admin/category', component: addCategory  }
    ],
});

export default router;