<template>
    <div>
        <h1>User {{user_id}}</h1>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                user_id: this.$route.params.id,
            }
        }
    }
</script>