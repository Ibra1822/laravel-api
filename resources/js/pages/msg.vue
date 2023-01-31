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
            errors: {},
        };
    },
    methods: {
        sendForm() {
            const data = {
                name: this.name,
                email: this.email,
                message: this.message,
            };

            axios.post(this.api + "contact/", data).then((result) => {
                if (!result.data.sucess) {
                    this.errors = result.data.errors;
                }
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
                    v-model.trim="name"
                    type="text"
                    :class="{ error: errors.name }"
                    placeholder="Inserisci il tuo nome"
                />
                <p v-for="(error, index) in errors.name" :key="'name' + index">
                    {{ error }}
                </p>
            </div>
            <div>
                <input
                    v-model.trim="email"
                    type="text"
                    :class="{ error: errors.email }"
                    placeholder="Inserisci la tua email "
                />
                <p
                    v-for="(error, index) in errors.email"
                    :key="'email' + index"
                >
                    {{ error }}
                </p>
            </div>
            <div>
                <textarea
                    v-model.trim="message"
                    :class="{ error: errors.message }"
                    name=""
                    id=""
                    rows="10"
                ></textarea>
                <p
                    v-for="(error, index) in errors.message"
                    :key="'message' + index"
                >
                    {{ error }}
                </p>
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
        border-radius: 10px;
        border: 1px solid cadetblue;
        resize: none;
        margin: 10px;
    }
    p {
        color: red;
    }
    button {
        display: block;
        margin: 20px auto;
        padding: 10px 35px;
        background-color: cadetblue;
        border: none;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
    }
}
.error {
    border: 1px solid red;
}
</style>
