<template>
    <Navbar />
</template>


<script>
import Activities from '@/views/activities/Activities.vue';
import Navbar from '@/views/header/Navbar.vue';
import Sidebar from '@/views/header/Sidebar.vue';
export default {
    name: 'Activity',
    components: {
        Activities,
        Navbar,
        Sidebar
    }
}
</script>