<template>
    <div>
        <h1>About</h1>
        <router-link to="/">Home</router-link>
        <br>
        <router-link to="/contact">Contact</router-link>
        <br>
        <router-link :to="{name : 'home'}">Home</router-link>
        <br>
        <router-link :to="{name: 'contact'}">Contact</router-link>
    </div>
</template>
<script>
    export default {
        
    }
</script>