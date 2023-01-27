<script>
import axios from "axios";
export default {
    name: "DetailProject",
    data() {
        return {
            api: "http://127.0.0.1:8000/api/posts",
            detail: {},
        };
    },
    methods: {
        getApi() {
            axios
                .get(this.api + "/" + this.$route.params.slug)
                .then((result) => {
                    this.detail = result.data.detail;
                });
        },
    },

    mounted() {
        this.getApi();
    },
};
</script>
<template>
    <h1>{{ detail.name }}</h1>
    <div class="container">
        <div class="center">
            <h3>Nome cliente : {{ detail.client_name }}</h3>
            <div>
                <div v-if="detail.type" class="ty-badge">
                    {{ detail.type.name }}
                </div>
            </div>
            <div v-for="item in detail.tech" :key="item.id" class="te-badge">
                {{ item.name }}
            </div>

            <div>
                <img :src="detail.cover_image" alt="" />
            </div>

            <p>{{ detail.summary }}</p>
        </div>
    </div>
</template>

<style lang="scss" scoped>
h1 {
    text-align: center;
    margin: 20px 0px;
    color: #fff;
    text-shadow: 0px 0px 10px #000;
}
.container {
    width: 75%;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #000;
    border-radius: 10px;
    padding: 30px;
    box-shadow: inset 0px 0px 10px lightslategrey;
    text-align: center;
    padding: 60px;
    h3 {
        font-size: 1.8rem;
        margin-bottom: 15px;
        color: #fff;
        text-shadow: 0px 0px 10px #000;
    }
    .ty-badge {
        width: 100px;
        padding: 15px 0;
        background-color: gainsboro;
        color: #fff;
        font-weight: bold;
        display: inline-block;
        border-radius: 10px;
    }
    .te-badge {
        display: inline-block;
        width: 100px;
        padding: 15px 0;
        background-color: gainsboro;
        color: #fff;
        font-weight: bold;
        margin: 10px 20px;
        border-radius: 10px;
    }

    img {
        width: 300px;
    }

    p {
        margin: 20px 0;
        font-style: italic;
        color: #fff;
        text-shadow: 0px 0px 10px #000;
    }
}
</style>
