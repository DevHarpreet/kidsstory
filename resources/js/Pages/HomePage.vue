<template>
    <!-- Hero banner -->
    <div class="hero-wrap" id="home">
        <div class="container">
            <section class="hero" aria-labelledby="hero-title">
                <div class="hero-copy">
                    <p class="eyebrow">Hero Banner</p>
                    <h1 id="hero-title">Adventures Await!</h1>
                    <p class="description">Discover the Magic of Indian Folk Tales and Legends.</p>
                    <a class="btn" href="#stories">READ NOW&nbsp; →</a>
                </div>
                <div class="hero-art" aria-hidden="true">
                    <span>🐘</span>
                    <span>🧒🏽</span>
                    <span>👧🏻</span>
                    <span>🦚</span>
                </div>
            </section>
        </div>
    </div>

    <main class="container">
        <section id="categories"><h2 class="section-title">Category Icons</h2>
        <div class="categories">
           <CategoryCard v-for="category in categoriesList" :card="category" :key="category.id" />
        </div>
        </section>
        <section id="stories"><h2 class="section-title">Recommended for You</h2>
        <div class="story-grid" id="storyGrid">
            <StoryCard v-for="story in storyList" :key="story.id" :card="story" />
        </div>
        <p id="noResults" hidden style="padding:20px 0;color:var(--muted)">No stories found. Try another search.</p>
        </section>
    </main>
</template>

<script setup>
    import { ref, onMounted } from 'vue';
    import CategoryCard from '../Common/CategoryCard.vue';
    import StoryCard from '../Common/StoryCard.vue';
    import axios from 'axios';

    const storyList = ref([]);

    onMounted(async () => {
        const resp = await axios.get(route('story.list'));
        storyList.value = resp.data;
    });

    

    const categoriesList = [
        {
            'id': 1,
            'title': 'Panchatantra',
            'link': '#stories',
            'emoji': '🦁',
            'category': 'Panchatantra'
        },
        {
            'id': 2,
            'title': 'Moral Stories',
            'link': '#stories',
            'emoji': '🦉',
            'category': 'Moral Stories'
        },
        {
            'id': 3,
            'title': 'Ganesha Stories',
            'link': '#stories',
            'emoji': '🐘',
            'category': 'Ganesha Stories'
        },
        {
            'id': 4,
            'title': 'The Talking',
            'link': '#stories',
            'emoji': '🏺',
            'category': 'The Talking'
        },
        {
            'id': 5,
            'title': 'Akbar &amp; Birbal',
            'link': '#stories',
            'emoji': '👑',
            'category': 'Akbar & Birbal'
        },
        {
            'id': 6,
            'title': 'Bedtime',
            'link': '#stories',
            'emoji': '🌙',
            'category': 'Bedtime'
        },
        {
            'id': 7,
            'title': 'New Arrivals',
            'link': '#stories',
            'emoji': '💃🏻',
            'category': 'New Arrivals'
        }
    ]

    
</script>