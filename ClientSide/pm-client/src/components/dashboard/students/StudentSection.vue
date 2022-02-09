<template>
    <Navbar />

    <SectionTemplate />
</template>


<script>

import SectionTemplate from '@/views/dashboard/students/SectionTemplate.vue';
import Navbar from '@/views/header/Navbar.vue';
export default {
    name: 'StudentSection',
    components: { Navbar, SectionTemplate }
}
</script>