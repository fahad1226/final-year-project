<template>
    <Navbar />
</template>

<script>
import OverviewPage from "@/views/activities/Overview.vue";
import Navbar from '@/views/header/Navbar.vue';
import Sidebar from '@/views/header/Sidebar.vue';
export default {
    name: "Overview",
    components: { OverviewPage, Navbar, Sidebar }
}
</script>