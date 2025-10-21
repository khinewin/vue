<template>
    <h1>Welcome {{message}} {{info}}</h1>
    <button @click="doShare">Share Data to Parent</button>
</template>
<script>
    export default{
        props:["message", "info"],
        data(){
            return{
                cData: "I am data from child"
            }
        },
        methods:{
            doShare(){
                this.$emit("makeShare", this.cData);
            }
        }
    }
</script>