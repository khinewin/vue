<template>
  <UserList :usersList="users" @removeUser="deleteUser"></UserList>
</template>
<script>
  import UserList from "@/com/UserList.vue"
  export default{
    components: { UserList },
    methods:{
      deleteUser(id){
        let updateUsers=this.users.filter((f)=>f.id != id)
        this.users=updateUsers;
      }
    },
    data(){
        return{
            users:[
                {id: 1, name: "Mg Mg", phone:"230982034", gender: "Male"},
                {id: 2, name: "Hla Hla", phone:"235524234", gender: "Female"},
                {id: 3, name: "Tun Tun", phone:"021454515", gender: "Male"},
            ]
        }
    }
  }
</script>