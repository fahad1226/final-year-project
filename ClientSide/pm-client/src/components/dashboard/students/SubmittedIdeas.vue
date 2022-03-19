<template>
  <Navbar />
  <IdeaSubmitted />
</template>

<script>
import IdeaSubmitted from "@/views/dashboard/students/SubmittedIdeasTemplate.vue";
import Navbar from "@/views/header/Navbar.vue";
export default {
  name: "SubmittedIdeas",
  components: {
    IdeaSubmitted,
    Navbar,
  },
};
</script>