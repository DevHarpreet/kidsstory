<template>
     <article class="story" :data-title="card.title" :data-category="card.category">
        <div class="story-image">
            <span class="pill age">Ages {{ card.ageGroup }}</span>
            <span class="scene">{{ card.scene }}</span>
        </div>
        <div class="story-body">
            <h3>{{ card.title }}</h3>
            <div class="story-meta">
                <span>⭐ {{ card.rating }}</span>
                <span class="rating">{{ card.ageGroup }} yrs</span>
            </div>
            <button class="read" :data-story="card.title">Read Story</button
            ><button class="read" :data-story="card.title">♡ Save story</button>
        </div>
    </article>
</template>

<script setup>

defineProps(['card']);

</script>