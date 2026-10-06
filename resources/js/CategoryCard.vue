<template>
    <a class="category" :href="card.link" :data-category="card.category"><span class="emoji">{{ card.emoji }}</span><strong>{{ card.title }}</strong></a>
</template>

<script setup>

  defineProps(['card']);

</script>