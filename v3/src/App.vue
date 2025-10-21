<template>
    <Welcome :message="msg" :info="moreInfo" @makeShare="getShare"></Welcome>

    {{parentData}}
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
          parentData:"",
      }
    },
    methods:{
      getShare(cData){
        console.log(cData)
        this.parentData=cData;
      }
    }
  }
</script>