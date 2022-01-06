<template>
    <Navbar />

    <AboutPage />

    <Footer />
</template>


<script>
import Footer from '@/views/footer/Footer.vue'
import AboutPage from '@/views/landings/About.vue'
import Navbar from '@/views/landings/Navbar.vue'
export default {
    name: 'About',
    components: { AboutPage, Navbar, Footer }
}
</script>