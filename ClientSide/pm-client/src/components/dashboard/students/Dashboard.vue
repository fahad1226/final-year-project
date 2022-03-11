<template>
    <Navbar />

    <Dashboard />

    <Pagination />
</template>


<script>
import Dashboard from '@/views/dashboard/students/Dashboard.vue';
import Pagination from '@/views/footer/Pagination.vue';
import Navbar from '@/views/header/Navbar.vue';
export default {
    name: 'StudentDashboard',
    components: { Dashboard, Navbar, Pagination }
}
</script>