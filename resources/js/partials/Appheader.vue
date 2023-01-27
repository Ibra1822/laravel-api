<script>
export default {
    name: "Appheader",
};
</script>

<template>
    <header>
        <ul>
            <li><router-link :to="{ name: 'home' }">Home</router-link></li>
            <li>
                <router-link :to="{ name: 'about' }">Su di noi</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'projects' }">Progetti</router-link>
            </li>
        </ul>
    </header>
</template>

<style lang="scss" scoped>
header {
    height: 100px;
    background-color: lightslategrey;
    display: flex;
    justify-content: center;
    align-items: center;
    ul {
        display: flex;
        list-style: none;
        li {
            padding: 10px 20px;
            font-size: 1.3rem;
            border: 1px solid transparent;
            cursor: pointer;
            &:hover {
                border: 1px solid #fff;
            }
            a {
                text-decoration: none;
                color: #fff;
            }
        }
    }
}
</style>
