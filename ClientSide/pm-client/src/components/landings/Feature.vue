<template>
    <Navbar />
    <FeaturePage />
    <Footer />
</template>

<script>
import Footer from '@/views/footer/Footer.vue';
import FeaturePage from '@/views/landings/Feature.vue';
import Navbar from '@/views/landings/Navbar.vue';
export default {
    name: 'Feature',
    components: { FeaturePage, Navbar, Footer },
}
</script>