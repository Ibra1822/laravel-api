<script>
export default {
    name: "Appheader",
};
</script>

<template>
    <header>
        <ul>
            <li>
                <router-link :to="{ name: 'home' }">Home</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'projects' }">Progetti</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'msg' }">Contact Us</router-link>
            </li>
        </ul>
    </header>
</template>

<style lang="scss" scoped>
header {
    height: 100px;
    padding: 0px 70px;
    background-color: cadetblue;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    border-bottom: 1px solid #fff;
    ul {
        display: flex;
        list-style: none;
        li {
            font-size: 1.3rem;
            cursor: pointer;
            margin: 0px 10px;
            a {
                border: 1px solid transparent;
                border-radius: 5px;
                padding: 10px 20px;
                text-decoration: none;
                color: #fff;
                &:hover,
                &.router-link-exact-active {
                    border: 1px solid #fff;
                }
            }
        }
    }
}
</style>
