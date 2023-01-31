<script>
import { store } from "../data/store";
export default {
    name: "SecondStep",
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
                src="https://www.byte-post.com/wp-content/uploads/2019/04/download.png"
                alt=""
            />
        </div>
        <div class="step-right">
            <div>
                <h2>Css</h2>
                <p>Lo stile in ogni pagina Web</p>
                <ul>
                    <li v-for="item in store.css_second" :key="item">
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
        color: #0070bb;
    }
    p {
        color: #0470ba;
    }
    ul {
        li {
            a {
                color: #0070bb;
                &:hover {
                    border-color: #0070bb;
                }
            }
        }
    }
}
</style>
