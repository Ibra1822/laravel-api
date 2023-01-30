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
    <div class="new-step">
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
.new-step {
    background-color: #f6f5f7;
}
.step-right {
    h2 {
        color: #e58e00;
    }
    p {
        color: #00628a;
    }
    ul {
        li {
            a {
                color: #e58e00;
                &:hover {
                    border-color: #e58e00;
                }
            }
        }
    }
}
</style>
