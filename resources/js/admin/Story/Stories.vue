<template>
    <div style="max-width: 640px; margin: 40px auto; padding: 0 20px; font-family: ui-rounded, 'Trebuchet MS', system-ui, sans-serif;">
        <h1 style="font-size: 26px; margin-bottom: 4px;">Add a New Story</h1>
        <p style="color: #666; margin-bottom: 24px;">Fill in the details below to publish a new story.</p>

        <div v-if="message" :style="{
            padding: '12px 16px',
            borderRadius: '8px',
            marginBottom: '20px',
            background: status === 'success' ? '#e6f7ee' : '#fdecea',
            color: status === 'success' ? '#1a7f4b' : '#b3261e',
        }">
            {{ message }}
        </div>

        <form @submit.prevent="submitStory" style="display: flex; flex-direction: column; gap: 16px;">
            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 6px;">Title</label>
                <input v-model="storyForm.title" placeholder="e.g. The Hare and Tortoise" style="width: 100%; padding: 10px 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box;" />
            </div>

            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 6px;">Slug</label>
                <input v-model="storyForm.slug" placeholder="e.g. hare-and-tortoise" style="width: 100%; padding: 10px 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box;" />
            </div>

            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 6px;">Summary</label>
                <textarea v-model="storyForm.summary" rows="2" placeholder="Short one-line summary" style="width: 100%; padding: 10px 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; font-family: inherit;"></textarea>
            </div>

            <div>
                <label style="display: block; font-weight: 600; margin-bottom: 6px;">Description</label>
                <textarea v-model="storyForm.description" rows="5" placeholder="Full story description" style="width: 100%; padding: 10px 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; font-family: inherit;"></textarea>
            </div>

            <div style="display: flex; gap: 16px;">
                <div style="flex: 1;">
                    <label style="display: block; font-weight: 600; margin-bottom: 6px;">Placeholder image filename</label>
                    <input v-model="storyForm.placeholder_image" placeholder="placeholder.jpg" style="width: 100%; padding: 10px 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box;" />
                </div>
                <div style="flex: 1;">
                    <label style="display: block; font-weight: 600; margin-bottom: 6px;">Banner image filename</label>
                    <input v-model="storyForm.banner_image" placeholder="banner.jpg" style="width: 100%; padding: 10px 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box;" />
                </div>
            </div>

            <button type="submit" style="margin-top: 8px; padding: 12px 20px; border: none; border-radius: 999px; background: #f0784b; color: white; font-weight: 700; font-size: 15px; cursor: pointer;">
                Create Story
            </button>
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

const message = ref('');
const status = ref('');

async function submitStory(){
    try {
        const response = await axios.post('/api/admin/stories/store', storyForm.value);
        message.value = response.data.msg;
        status.value = response.data.status;
    } catch (e) {
        message.value = 'Something went wrong. Check the fields and try again.';
        status.value = 'error';
    }
}

</script>
