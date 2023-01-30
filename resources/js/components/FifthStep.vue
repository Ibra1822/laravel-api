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
    <div class="fifth-step">
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
.fifth-step {
    background-color: #f6f5f7;
    height: 600px;
    display: flex;
    .step-left {
        width: 50%;
        padding: 30px;
    }
    .step-right {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        h2 {
            font-size: 2.6rem;
            color: #41b783;
        }
        p {
            font-size: 1.5rem;
            color: #35495d;
        }
        ul {
            list-style: none;
            li {
                margin: 20px 0px;
                a {
                    text-decoration: none;
                    font-size: 1.3rem;
                    padding: 10px 20px;
                    color: #41b783;
                    border: 1px solid transparent;
                    &:hover {
                        border: 1px solid #41b783;
                        border-radius: 5px;
                    }
                }
            }
        }
    }
}
</style>
