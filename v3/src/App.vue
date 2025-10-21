<template>
    <Welcome :message="msg"></Welcome>
</template>
<script>
  import Welcome from "@/com/Welcome.vue"
  export default{
    components:{
        Welcome
    },
    data(){
      return{
          msg: "Message From APP"
      }
    }
  }
</script>