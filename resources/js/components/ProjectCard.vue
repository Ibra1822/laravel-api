<script>
export default {
    name: "ProjectCard",
    props: {
        project: Array,
    },
};
</script>

<template>
    <div class="container">
        <div>
            <router-link
                :to="{ name: 'DetailProject', params: { slug: project.slug } }"
            >
                {{ project.name }}
            </router-link>
        </div>

        <h3>{{ project.client_name }}</h3>
        <p>{{ project.summary }}</p>
    </div>
</template>

<style lang="scss" scoped>
.container {
    width: 85%;
    margin: 35px auto;
    border: 2px solid cadetblue;
    border-radius: 10px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 5px #fff;
    h3,
    p {
        margin: 20px;
        font-style: italic;
    }
    p {
        color: cadetblue;
        cursor: default;
    }

    a {
        text-decoration: none;
        color: cadetblue;
        border: 1px solid transparent;
        padding: 10px 20px;
        &:hover {
            border: 1px solid cadetblue;
            border-radius: 10px;
        }
    }
}
</style>
