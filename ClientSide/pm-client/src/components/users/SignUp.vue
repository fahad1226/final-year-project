<template>
    <Navbar />
    <Registration />
</template>


<script>
import Registration from "@/views/accounts/Registration.vue";
import Navbar from "@/views/landings/Navbar.vue";
export default {
    name: "SignUp",
    components: { Registration, Navbar }
}
</script>