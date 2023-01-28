import { createRouter, createWebHistory } from "vue-router";
import home from "./pages/home.vue";
import about from "./pages/about.vue";
import projects from "./pages/projects.vue";
import DetailProject from "./pages/DetailProject.vue";
import errore404 from "./pages/errore404.vue";
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
        {
            path: "/:pathMatch(.*)*",
            component: errore404,
        },
    ],
});

export { router };
