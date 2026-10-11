<template>
 
    
    <Header></Header>
    <router-view />
    <Footer></Footer>
    <div class="toast" id="toast" role="status" aria-live="polite"></div>
   
    
</template>

<script setup>
import Header from './Header/Header.vue';
import Footer from './Footer/Footer.vue';

</script>