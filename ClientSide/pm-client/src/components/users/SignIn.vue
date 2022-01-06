<template>

    <Navbar />

    <Login />
</template>


<script>
import Login from '@/views/accounts/Login.vue'
import Navbar from '@/views/landings/Navbar.vue'
export default {
    name: 'SignIn',
    components: {
    Login,
    Navbar
}
}
</script>