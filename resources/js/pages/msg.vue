<script>
import axios from "axios";
export default {
    name: "msg",
    data() {
        return {
            api: "http://127.0.0.1:8000/api/",
            name: "",
            email: "",
            message: "",
        };
    },
    methods: {
        sendForm() {
            const data = {
                name: this.name,
                email: this.email,
                message: this.message,
            };

            axios.post(this.api + "contact/" + data).then((result) => {
                console.log(result);
            });
        },
    },
};
</script>
<template>
    <h1>Send</h1>

    <div class="cont-form">
        <form @submit.prevent="this.sendForm()">
            <div>
                <input
                    v-model="this.name"
                    type="text"
                    placeholder="Inserisci il tuo nome"
                />
            </div>
            <div>
                <input
                    v-model="this.email"
                    type="text"
                    placeholder="Inserisci la tua email "
                />
            </div>
            <div>
                <textarea
                    v-model="this.message"
                    name=""
                    id=""
                    rows="10"
                ></textarea>
            </div>
            <button type="submit">Invia</button>
        </form>
    </div>
</template>

<style lang="scss" scoped>
h1 {
    text-align: center;
    color: cadetblue;
}
.cont-form {
    text-align: center;
}
form {
    input,
    textarea {
        width: 500px;
        padding: 15px 20px;
        margin: 20px 0;
        border-radius: 10px;
        border: 1px solid cadetblue;
        resize: none;
    }
    button {
        display: block;
        margin: auto;
        padding: 10px 35px;
        background-color: cadetblue;
        border: none;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
    }
}
</style>
