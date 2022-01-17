<template>
    <Navbar />
    <Dashboard />
</template>

<script>
import Dashboard from '@/views/dashboard/teachers/Dashboard.vue'
import Navbar from '@/views/header/Navbar.vue';
export default {
    name: 'Dash',
    components: { Dashboard, Navbar },
}
</script>