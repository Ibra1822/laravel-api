<script>
import { store } from "../data/store";
export default {
    name: "SixthStep",
    data() {
        return {
            store,
        };
    },
};
</script>
<template>
    <div class="sixth-step">
        <div class="step-left">
            <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png"
                alt=""
            />
        </div>
        <div class="step-right">
            <div>
                <h2>Php</h2>
                <p>Linguaggio Back-End</p>
                <ul>
                    <li v-for="item in store.Php_sixth" :key="item">
                        <a :href="item.href">{{ item.name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.sixth-step {
    display: flex;
    .step-left {
        width: 50%;
        padding: 40px;
        img {
            height: 300px;
        }
    }

    .step-right {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        h2 {
            font-size: 2.6rem;
            color: #787cb4;
        }
        p {
            font-size: 1.5rem;
            color: #474b8a;
        }
        ul {
            list-style: none;
            li {
                margin: 20px 0px;
                a {
                    text-decoration: none;
                    font-size: 1.3rem;
                    padding: 10px 20px;
                    color: #787cb4;
                    border: 1px solid transparent;
                    &:hover {
                        border: 1px solid #787cb4;
                        border-radius: 5px;
                    }
                }
            }
        }
    }
}
</style>
