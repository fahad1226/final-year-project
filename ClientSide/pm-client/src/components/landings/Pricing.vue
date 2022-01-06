<template>
    <Navbar />

    <PricingPage />

    <Footer />
</template>


<script>
import Footer from "@/views/footer/Footer.vue";
import Navbar from "@/views/landings/Navbar.vue";
import PricingPage from "@/views/landings/Pricing.vue";
export default {
    name: "Pricing",
    components: { PricingPage, Navbar, Footer }
}
</script>