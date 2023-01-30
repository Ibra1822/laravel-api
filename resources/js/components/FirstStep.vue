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
    <div class="first-step">
        <div class="first-left debug">
            <img
                src="https://cdn-icons-png.flaticon.com/512/1532/1532556.png"
                alt=""
            />
        </div>
        <div class="first-right debug">
            <div>
                <h2>Html</h2>
                <p>La struttura di ogni pagina Web</p>
                <div class="links">
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
.first-step {
    height: 500px;
    margin: auto;
    display: flex;
    border-radius: 20px;
    background-color: #f6f6f6;
    .first-left {
        height: 100%;
        padding: 30px;
        width: 50%;
        img {
            height: 100%;
            object-fit: cover;
        }
    }
    .first-right {
        width: 50%;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        h2 {
            font-size: 2.6rem;
            color: #fe641a;
        }
        p {
            font-size: 1.5rem;
            color: #ff9202;
        }
        ul {
            list-style: none;
            li {
                margin: 20px;
                a {
                    text-decoration: none;
                    font-size: 1.3rem;
                    color: #fe641a;
                    padding: 10px 20px;
                    margin: 5px 0px;
                    &:hover {
                        border: 1px solid #fe641a;
                        border-radius: 5px;
                    }
                }
            }
        }
    }
}
</style>
