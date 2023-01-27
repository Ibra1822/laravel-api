import { createRouter, createWebHistory } from "vue-router";
import home from "./pages/home.vue";
import about from "./pages/about.vue";
import projects from "./pages/projects.vue";
import DetailProject from "./pages/DetailProject.vue";
const router = createRouter({
    history: createWebHistory(),

    routes: [
        {
            path: "/",
            name: "home",
            component: home,
        },
        {
            path: "/chi-siamo",
            name: "about",
            component: about,
        },
        {
            path: "/progetti",
            name: "projects",
            component: projects,
        },
        {
            path: "/dettaglio-progetti/:slug",
            name: "DetailProject",
            component: DetailProject,
        },
    ],
});

export { router };
