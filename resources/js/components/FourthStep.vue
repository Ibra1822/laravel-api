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
    <div class="new-step">
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
        color: #efbe25;
    }
    p {
        color: #e4a127;
    }
    ul {
        li {
            a {
                color: #efbe25;
                &:hover {
                    border-color: #efbe25;
                }
            }
        }
    }
}
</style>
