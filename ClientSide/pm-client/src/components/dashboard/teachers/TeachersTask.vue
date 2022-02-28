<template>
  <Navbar />
  <Task />
</template>

<script>
import Task from "@/views/dashboard/teachers/Task.vue";
import Navbar from "@/views/header/Navbar.vue";
export default {
  name: "TeachersTask",
  components: { Navbar, Task },
};
</script>