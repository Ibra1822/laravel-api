<script>
import { store } from "../data/store";
export default {
    name: "SeventhStep",
    data() {
        return {
            store,
        };
    },
};
</script>
<template>
    <div class="seventh-step">
        <div class="step-left">
            <img
                src="https://www.geekandjob.com/uploads/wiki/eceb15684d4183c66f73c1a9bb777eef708b2b66.png"
                alt=""
            />
        </div>
        <div class="step-right">
            <div>
                <h2>MySql</h2>
                <p>DataBase</p>
                <ul>
                    <li v-for="item in store.mySql_seventh" :key="item">
                        <a :href="item.href">{{ item.name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.seventh-step {
    display: flex;
    background-color: #f6f5f7;
    .step-left {
        width: 50%;
        img {
            height: 300px;
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
            color: #e58e00;
        }
        p {
            font-size: 1.5rem;
            color: #01618b;
        }
        ul {
            list-style: none;
            li {
                margin: 20px 0px;
                a {
                    text-decoration: none;
                    font-size: 1.3rem;
                    padding: 10px 20px;
                    color: #e58e00;
                    border: 1px solid transparent;
                    &:hover {
                        border: 1px solid #e58e00;
                        border-radius: 5px;
                    }
                }
            }
        }
    }
}
</style>
