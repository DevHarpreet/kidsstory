<template>
    <a class="category" :href="card.slug" :data-category="card.title">
      <span class="">
        <img :src="card.placeholder_image" /></span>
        <strong>{{ card.title }}</strong>
      </a>
</template>

<script setup>

  defineProps(['card']);

</script>