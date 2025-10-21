<template>
    <h1>Welcome {{message}} {{info}}</h1>
</template>
<script>
    export default{
        props:["message", "info"]
    }
</script>