<template>
    <Navbar />

    <div class="grid grid-cols-4">
        <div class="col-start-1">
            <Sidebar />
        </div>

        <div class="col-start-2 col-span-2 bg-gray-50">
            <Activities title="Project Activities" />
        </div>
        <div class="col-start-4 bg-gray-50">
         
                <h1>Lorem, ipsum dolor.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit doloribus quasi unde ipsa vitae numquam velit adipisci tempore, tenetur magnam.</p>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto commodi, quae blanditiis sed suscipit illum.</p>
           
            <!-- <Activities title="Project Activities" /> -->
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