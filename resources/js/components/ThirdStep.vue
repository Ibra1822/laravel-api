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
    <div class="new-step">
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
.new-step {
    background-color: #f6f5f7;
}
.step-right {
    h2 {
        color: #7009f3;
    }
    p {
        color: #8f0dfe;
    }
    ul {
        li {
            a {
                color: #7009f3;
                &:hover {
                    border-color: #7009f3;
                }
            }
        }
    }
}
</style>
