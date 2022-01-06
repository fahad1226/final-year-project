<template>
    <Navbar />

    <div class="grid grid-cols-6">
        <div class="col-start-1 col-span-1">
            <Sidebar />
        </div>

        <div class="col-start-2 col-span-5 bg-gray-50">
            <OverviewPage />
        </div>
    </div>
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