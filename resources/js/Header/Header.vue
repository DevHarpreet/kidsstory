<template>
    <header class="header">
        <div class="container nav">
           <Logo></Logo>
            <NavBar></NavBar>
            <SeachBar></SeachBar>
        </div>
    </header>
</template>

<script setup>
import NavBar from './NavBar.vue';
import Logo from '../Common/Logo.vue';
import SeachBar from './SearchBar.vue';
</script>