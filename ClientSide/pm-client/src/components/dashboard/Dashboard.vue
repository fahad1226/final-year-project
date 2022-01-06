<template>
    <Navbar />

    <div class="grid grid-cols-6">
        <div class="col-start-1 col-span-1">
            <Sidebar />
        </div>

        <div class="col-start-2 col-span-5 bg-gray-50">
            <Tab />
        </div>
    </div>
</template>


<script>
import Navbar from '@/views/header/Navbar.vue'
import Sidebar from '@/views/header/Sidebar.vue'
import Tab from '@/views/header/Tab.vue'
export default {
    name: 'Dashboard',
    components: {
        Navbar,
        Sidebar,
        Tab
    }
}
</script>