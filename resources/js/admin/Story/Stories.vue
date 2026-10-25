<template>
    <div>
        <h1>admin story page</h1>
        <form @submit.prevent="submitStory">
            <input v-model="storyForm.title" placeholder="Title" />
            <input v-model="storyForm.slug" placeholder="Slug" />
            <textarea v-model="storyForm.summary" placeholder="Summary"></textarea>
            <textarea v-model="storyForm.description" placeholder="Description"></textarea>
            <input v-model="storyForm.placeholder_image" placeholder="Placeholder image filename" />
            <input v-model="storyForm.banner_image" placeholder="Banner image filename" />
            <button type="submit">Create Story</button>
        </form>
    </div>
</template>

<script setup>

import { ref } from 'vue';
import axios from 'axios';

const storyForm = ref({
    title: '',
    slug: '',
    summary: '',
    description: '',
    placeholder_image: '',
    banner_image: '',
});

async function submitStory(){
    const response = await axios.post('/api/admin/stories/store', storyForm.value);
    console.log(response.data);
}

</script>