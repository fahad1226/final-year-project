<template>
    <Navbar />

    <div class="grid grid-cols-6">
        <div class="col-start-1 col-span-1">
            <Sidebar />
        </div>

        <div class="col-start-2 col-span-5 bg-gray-50">
            <Activities />
        </div>
    </div>
</template>


<script>
import Activities from '@/views/activities/Activities.vue';
import Navbar from '../../../views/header/Navbar.vue';
import Sidebar from '../../../views/header/Sidebar.vue';

export default {
    name: 'Activity',
    components: {
        Activities,
        Navbar,
        Sidebar
    }
}
</script>