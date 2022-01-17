import Activity from "@/components/dashboard/activities/Activity.vue";
import Overview from "@/components/dashboard/activities/Overview.vue";
import TeacherDashboard from "@/components/dashboard/teachers/Dashboard.vue";
import StudentDashboard from '@/components/dashboard/students/Dashboard.vue';
import About from "@/components/landings/About.vue";
import Feature from "@/components/landings/Feature.vue";
import Landing from "@/components/landings/Landing.vue";
import Pricing from "@/components/landings/Pricing.vue";
import Login from "@/components/users/SignIn.vue";
import SignUp from "@/components/users/SignUp.vue";
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
        path: "/teacher/dashboard",
        name: "teacherDashboard",
        component: TeacherDashboard,
    },
    {
        path: "/students/dashboard",
        name: 'studentDashboard',
        component: StudentDashboard,
    },
    {
        path: "/overview",
        name: "Overview",
        component: Overview,
    },
    {
        path: "/activity",
        name: "Activity",
        component: Activity,
    },
    
];

const router = createRouter({
    history: createWebHistory("/"),
    routes,
});

export default router;
