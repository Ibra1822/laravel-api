<script>
import { store } from "../data/store";
export default {
    name: "FifthStep",
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
            <img src="https://vuejs.org/images/logo.png" alt="" />
        </div>
        <div class="step-right">
            <div>
                <h2>VueJS</h2>
                <p>FrameWork di Javascript</p>
                <ul>
                    <li v-for="item in store.Vue_fifth" :key="item">
                        <a :href="item.href">{{ item.name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.new-step {
    background-color: #f6f5f7;
}
.step-right {
    h2 {
        color: #42b883;
    }
    p {
        color: #354a5e;
    }
    ul {
        li {
            a {
                color: #42b883;
                &:hover {
                    border-color: #42b883;
                }
            }
        }
    }
}
</style>
