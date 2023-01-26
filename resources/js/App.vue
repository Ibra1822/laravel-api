<script>
import axios from "axios";

export default {
    name: "App",
    components: {},
    data() {
        return {
            api: "http://127.0.0.1:8000/api/posts",
        };
    },
    methods: {
        getApi() {
            axios.get(this.api).then((result) => {});
            console.log(result);
        },
    },
    mounted() {
        this.getApi();
    },
};
</script>

<template></template>

<style></style>
