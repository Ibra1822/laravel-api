<script>
import { store } from "../data/store";
export default {
    name: "EighthStep",
    data() {
        return {
            store,
        };
    },
};
</script>
<template>
    <div class="new-step">
        <div class="step-left">
            <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                alt=""
            />
        </div>
        <div class="step-right">
            <div>
                <h2>Laravel</h2>
                <p>FrameWork su PHP</p>
                <ul>
                    <li v-for="item in store.laravel_eighth" :key="item">
                        <a :href="item.href">{{ item.name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.new-step{
    flex-direction: row-reverse;
    justify-content: space-around;
}
.step-left{
    display: flex;
    justify-content: center;
}
.step-right {
    h2 {
        color: #ff2919;
    }
    p {
        color: #354a5d;
    }
    ul {
        li {
            a {
                color: #ff2919;
                &:hover {
                    border-color: #ff2919;
                }
            }
        }
    }
}
</style>
