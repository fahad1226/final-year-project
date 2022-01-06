import Activity from "@/components/dashboard/activities/Activity.vue";
import Dashboard from "@/components/dashboard/Dashboard.vue";
import Todos from "@/components/dashboard/todos/TodoList.vue";
import About from "@/components/landings/About.vue";
import Feature from "@/components/landings/Feature.vue";
import Landing from "@/components/landings/Landing.vue";
import Login from "@/components/users/SignIn.vue";
import Pricing from '@/components/landings/Pricing.vue';
import SignUp from "@/components/users/SignUp.vue";
import Overview from '@/components/dashboard/activities/Overview.vue';
import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        name: "Landing",
        component: Landing,
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
    },
    {
        path: "/register",
        name: "SignUp",
        component: SignUp,
    },
    {
        path: "/about",
        name: "About",
        component: About,
    },
    {
        path: "/feature",
        name: "Feature",
        component: Feature,
    },
    {
        path: "/pricing",
        name: "Pricing",
        component: Pricing,
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: Dashboard,
    },
    {
        path: '/company/bigfat/overview',
        name: 'Overview',
        component: Overview,
    },
    {
        path: "/compnay/bigfat/project/activity",
        name: "Activity",
        component: Activity,
    },
    {
        path: "/compnay/bigfat/project/heyshot/my-todo",
        name: "Todos",
        component: Todos,
    },
];

const router = createRouter({
    history: createWebHistory("/"),
    routes,
});

export default router;
