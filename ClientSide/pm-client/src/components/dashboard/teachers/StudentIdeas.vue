<template>
  <Navbar />
  <Ideas />
</template>

<script>
import Navbar from "@/views/header/Navbar.vue";
import Ideas from "@/views/dashboard/teachers/Ideas.vue";
export default {
  name: "StudentIdeas",
  components: {
    Ideas,
    Navbar,
  },
};
</script>