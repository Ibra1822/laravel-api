<script>
import { store } from "../data/store";
export default {
    name: "Fourthstep",
    data() {
        return {
            store,
        };
    },
};
</script>
<template>
    <div class="fourth-step">
        <div class="step-left">
            <img
                src="https://1000logos.net/wp-content/uploads/2020/09/JavaScript-Logo.png"
                alt=""
            />
        </div>
        <div class="step-right">
            <div>
                <h2>Javascript</h2>
                <p>Funzionamento della Pagina</p>
                <ul>
                    <li v-for="item in store.Javascript_fourth" :key="item">
                        <a :href="item.href">{{ item.name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.fourth-step {
    display: flex;
    margin-top: 50px;
    .step-left {
        width: 50%;
        img {
            width: 100%;
        }
    }
    .step-right {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        text-align: center;
        h2 {
            font-size: 2.4rem;
            color: #e5a127;
        }
        p {
            font-size: 1.6rem;
            color: #f1be27;
        }
        ul {
            list-style: none;
            li {
                margin: 20px 10px;
            }
            a {
                text-decoration: none;
                padding: 15px 20px;
                font-size: 1.3rem;
                color: #e5a127;
                border: 1px solid transparent;
                &:hover {
                    border: 1px solid #f1be27;
                    border-radius: 5px;
                }
            }
        }
    }
}
</style>
