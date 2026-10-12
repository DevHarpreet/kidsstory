<template>
    <div v-if="story">
        <div class="hero-wrap" style="padding-bottom: 18px;">
            <div class="container">
                <section class="hero" style="min-height: 220px;">
                    <div class="hero-copy">
                        <p class="eyebrow">
                            <span v-for="cat in story.categories" :key="cat.id">{{ cat.title }} </span>
                        </p>
                        <h1>{{ story.title }}</h1>
                        <p class="description">{{ story.summary }}</p>
                    </div>
                </section>
            </div>
        </div>

        <main class="container" style="padding: 32px 0 48px;">
            <p style="max-width: 680px; line-height: 1.7; margin-bottom: 32px;">
                {{ story.description }}
            </p>

            <h2 class="section-title">Chapters</h2>
            <div v-if="story.chapters && story.chapters.length" class="story-grid">
                <article v-for="chapter in story.chapters" :key="chapter.id" class="story">
                    <div class="story-image">
                        <img :src="chapter.placeholder_image" />
                    </div>
                    <div class="story-body">
                        <h3>{{ chapter.title }}</h3>
                        <p style="font-size: 13px; color: var(--muted); margin: 0 0 12px;">{{ chapter.summary }}</p>
                    </div>
                </article>
            </div>
            <p v-else style="color: var(--muted);">No chapters added yet.</p>
        </main>
    </div>
    <div v-else class="container" style="padding: 48px 0;">Loading story...</div>
</template>

<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const story = ref(null);

onMounted(async () => {
    const resp = await axios.get(`/api/story-detail/${route.params.slug}`);
    story.value = resp.data;
});
</script>
