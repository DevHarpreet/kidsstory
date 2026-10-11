<template>
     <article class="story" :data-title="card.title" :data-category="card.categories[0]?.title">
        <div class="story-image">
            <img :src="card.placeholder_image" />
            <span class="pill age">Ages {{ card.age_groups[0]?.title }}</span>
        </div>
        <div class="story-body">
            <h3>{{ card.title }}</h3>
            <div class="story-meta">
                <span>⭐ 5</span><!-- will add it later -->
                <span class="rating">{{ card.age_groups[0]?.title }} yrs</span>
            </div>
            <button class="read" :data-story="card.title"><a :href='card.slug'>Read Story</a></button
            ><button class="read" :data-story="card.title">♡ Save story</button>
        </div>
    </article>
</template>

<script setup>

defineProps(['card']);

</script>