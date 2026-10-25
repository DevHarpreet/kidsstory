<template>
 
    <!-- Admin -->
     <div v-if="route.path.startsWith('/admin')">
        <router-view />
     </div>
    <div v-else>
        <Header></Header>
        <router-view />
        <Footer></Footer>
        <div class="toast" id="toast" role="status" aria-live="polite"></div>
   </div>
    
</template>

<script setup>

import { useRoute } from 'vue-router';

import Header from './Header/Header.vue';
import Footer from './Footer/Footer.vue';

const route = useRoute();

</script>