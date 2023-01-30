<script>
import { store } from "../data/store";
export default {
    name: "FirstStep",
    data() {
        return {
            store,
        };
    },
};
</script>
<template>
    <div class="new-step">
        <div class="step-left debug">
            <img
                src="https://cdn-icons-png.flaticon.com/512/1532/1532556.png"
                alt=""
            />
        </div>
        <div class="step-right debug">
            <div>
                <h2>Html</h2>
                <p>La struttura di ogni pagina Web</p>
                <div>
                    <ul>
                        <li v-for="item in store.html_first" :key="item">
                            <a :href="item.href">{{ item.name }}</a>
                        </li>
                    </ul>
                </div>
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
        color: #ff641a;
    }
    p {
        color: #ff9200;
    }
    ul {
        li {
            a {
                color: #ff641a;
                &:hover {
                    border-color: #ff641a;
                }
            }
        }
    }
}
</style>
