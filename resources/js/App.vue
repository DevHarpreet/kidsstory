<template>
 
    
    <Header></Header>
    <HomePage :categoriesList="categoriesList" :StoryList="StoryList"></HomePage>
    <Footer></Footer>
    <div class="toast" id="toast" role="status" aria-live="polite"></div>
   
    
</template>

<script setup>
import { ref } from 'vue';
import Header from './Header/Header.vue';
import Footer from './Footer/Footer.vue';
import HomePage from './Pages/HomePage.vue';

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

const StoryList = [
    {
        'id': 1,
        'title': 'The Ant & The Grasshopper',
        'category': 'Panchatantra Moral Stories',
        'ageGroup': '4-6',
        'scene': '🐜🌿🦗',
        'rating': '4.8'
    },
    {
        'id': 2,
        'title': "Krishna's Butter Pot",
        'category': 'Moral Stories Ganesha Stories',
        'ageGroup': '3-5',
        'scene': '🧈🏺✨',
        'rating': '4.9'
    },
    {
        'id': 3,
        'title': 'The Enchanted Forest',
        'category': 'Panchatantra New Arrivals',
        'ageGroup': '4-6',
        'scene': '🐅🌳🦌',
        'rating': '4.8'
    },
    {
        'id': 4,
        'title': 'The Brave Prince',
        'category': 'New Arrivals Moral Stories',
        'ageGroup': '6-7',
        'scene': '🤴🏽🐎⭐',
        'rating': '5.0'
    }
]
</script>