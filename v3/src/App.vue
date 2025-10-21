<template>
    <Welcome :message="msg" :info="moreInfo"></Welcome>
</template>
<script>
  import Welcome from "@/com/Welcome.vue"
  export default{
    components:{
        Welcome
    },
    data(){
      return{
          msg: "Message From APP",
          moreInfo: "Hello More Info from App",
      }
    }
  }
</script>