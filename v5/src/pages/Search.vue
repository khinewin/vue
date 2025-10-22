<template>
    <div>
        <h1>Search Keywords is {{k}}</h1>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                k: this.$route.query.q,
            }
        }
    }
</script>