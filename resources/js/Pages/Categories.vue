<template>
    <main class="container" style="padding: 36px 0;">
        <h2 class="section-title">All Categories</h2>
        <div class="categories">
            <CategoryCard v-for="category in categoriesList" :key="category.id" :card="category" />
        </div>
    </main>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import CategoryCard from '../Common/CategoryCard.vue';

const categoriesList = ref([]);

onMounted(async () => {
    const resp = await axios.get(route('category.list'));
    categoriesList.value = resp.data;
});
</script>