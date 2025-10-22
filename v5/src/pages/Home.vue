<template>
    <div>
        <h1>Home</h1>
        <router-link to="/about">About</router-link>
        <br>
        <router-link to="/user/5">User 5</router-link>
        <br>
        <router-link :to="{name: 'user', params : { id : 5 }}">User 5</router-link>
        <br>
        <input type="text" v-model="q" placeholder="Search...">
        <button @click="doSearch">Search</button>
    </div>
</template>
<script>
    export default {
        methods:{
            doSearch(){
                this.$router.push({name: "search", query : {q : this.q}});
            }
        },
        data(){
            return{
                q: "",
            }
        }
    }
</script>