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
        <h3>{{ project.name }}</h3>
        <h3>{{ project.client_name }}</h3>
        <p>{{ project.summary }}</p>
    </div>
</template>

<style lang="scss" scoped>
.container {
    height: 300px;
    width: 85%;
    margin: 35px auto;
    border: 1px solid #000;
    border-radius: 10px;
    padding: 30px;
    box-shadow: inset 0px 0px 10px lightslategrey;
    h3,
    p {
        margin: 20px;
    }
}
</style>
