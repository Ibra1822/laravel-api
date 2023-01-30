<script>
import axios from "axios";
import ProjectCard from "../components/ProjectCard.vue";
export default {
    name: "projects",
    components: {
        ProjectCard,
    },
    data() {
        return {
            api: "http://127.0.0.1:8000/api/posts",
            projects: [],
        };
    },
    methods: {
        getApi() {
            axios.get(this.api).then((result) => {
                this.projects = result.data.projects;
            });
        },
    },
    mounted() {
        this.getApi();
    },
};
</script>
<template>
    <div class="all">
        <h1>Progetti</h1>
        <ProjectCard
            v-for="item in this.projects"
            :key="item.id"
            :project="item"
        />
    </div>
</template>

<style lang="scss" scoped>
.all {
    background-color: cadetblue;
    padding: 20px;
}
h1 {
    text-align: center;
    padding: 30px 0px;
    color: #fff;
    text-shadow: 0px 0px 1px #fff;
    cursor: default;
}
</style>
