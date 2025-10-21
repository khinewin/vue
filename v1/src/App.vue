<template>
  <div>
    <h1>Hello</h1>
    <h3>Hello</h3>
    <MyHome></MyHome>
    <MyHome></MyHome>
    <About />
  </div>
</template>
<script>
  import Home from "@/com/Home.vue"
  import About from "@/com/About.vue"
  //ES Module , Node Module
  export default{
    components : {
        MyHome: Home,
        About,
    }
  }
</script>

<style>
  
</style>