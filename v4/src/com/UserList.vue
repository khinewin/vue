<template>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <tr v-for="u in usersList" :key="u.id">
                <td>{{u.id}}</td>
                <td>{{u.name}}</td>
                <td>{{u.phone}}</td>
                <td>{{u.gender}}</td>
                <td>
                    <button @click="deleteUser(u.id)">Delete</button>
                </td>
            </tr>
        </table>
    </div>
</template>
<script>
    export default{
        props:["usersList"],
        methods:{
            deleteUser(id){
                this.$emit("removeUser", id);
            }
        }
    }
</script>