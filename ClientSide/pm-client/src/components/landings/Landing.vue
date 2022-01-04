<template>
    <div>
        <Navbar />
        <Landing />
        <Footer />
    </div>
</template>

<script>
import Footer from '@/views/footer/Footer.vue'
import Navbar from '@/views/header/Navbar.vue'
import Landing from '@/views/landings/Landing.vue'
export default {
    name: 'LandingPage',
    components: {
        Navbar,
        Landing,
        Footer
    }
}
</script>