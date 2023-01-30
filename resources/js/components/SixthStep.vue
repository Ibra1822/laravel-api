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
    <div class="new-step">
        <div class="step-left">
            <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png"
                alt=""
            />
        </div>
        <div class="step-right">
            <div>
                <h2>PHP</h2>
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
.step-right {
    h2 {
        color: #787cb3;
    }
    p {
        color: #464b89;
    }
    ul {
        li {
            a {
                color: #787cb3;
                &:hover {
                    border-color: #787cb3;
                }
            }
        }
    }
}
</style>
