<script>
import Appheader from "./partials/Appheader.vue";
export default {
    name: "App",
    components: {
        Appheader,
    },
    data() {
        return {};
    },
};
</script>

<template>
    <Appheader />
    <router-view></router-view>
</template>

<style lang="scss"></style>
