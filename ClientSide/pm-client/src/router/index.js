import Dashboard from "@/components/dashboard/Dashboard.vue";
import Landing from "@/components/landings/Landing.vue";
import { createRouter, createWebHistory } from "vue-router";
const routes = [
    {
        path: "/",
        name: "landings",
        component: Landing,
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: Dashboard,
    },
];

const router = createRouter({
    history: createWebHistory("/"),
    routes,
});

export default router;
