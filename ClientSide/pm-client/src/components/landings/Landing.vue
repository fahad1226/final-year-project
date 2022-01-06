<template>
    <div>
        <Navbar />
        <Landing />
        <Footer />
    </div>
</template>

<script>
import Footer from '@/views/footer/Footer.vue'
import Landing from '@/views/landings/Landing.vue'
import Navbar from '@/views/landings/Navbar.vue'
export default {
    name: 'LandingPage',
    components: {
        Navbar,
        Landing,
        Footer
    }
}
</script>