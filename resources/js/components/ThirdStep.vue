<script>
import { store } from "../data/store";
export default {
    name: "ThirdStem",
    data() {
        return {
            store,
        };
    },
};
</script>
<template>
    <div class="third-step">
        <div class="step-left">
            <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1200px-Bootstrap_logo.svg.png"
                alt=""
            />
        </div>
        <div class="step-right">
            <div>
                <h2>Bootstrap</h2>
                <p>Libreria di CSS</p>
                <ul>
                    <li v-for="item in store.Bootstrap_third" :key="item">
                        <a :href="item.href">{{ item.name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.third-step {
    height: 600px;
    background-color: #f6f5f7;
    display: flex;
    padding: 40px;
    margin: 0;
    .step-left {
        width: 50%;
        img {
            height: 80%;
        }
    }
    .step-right {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        h2 {
            font-size: 2.6rem;
            color: #7308f5;
        }
        p {
            font-size: 1.5rem;
            color: #8b0dfc;
        }
        ul {
            list-style: none;
            li {
                margin: 20px 0px;
            }
            a {
                text-decoration: none;
                color: #7308f5;
                padding: 10px 20px;
                font-size: 1.3rem;

                &:hover {
                    border: 1px solid #7308f5;
                    border-radius: 5px;
                }
            }
        }
    }
}
</style>
