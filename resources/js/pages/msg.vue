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
            is_load:false
        };
    },
    methods: {
        sendForm() {
            this.is_load = true
            const data = {
                name: this.name,
                email: this.email,
                message: this.message,
            };

            axios.post(this.api + "contact/", data).then((result) => {
                this.is_load = false
                if (!result.data.sucess) {
                    this.errors = result.data.errors;
                }else{
                    this.name = '';
                    this.email ='';
                    this.message ='';
                    this.errors = {}
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
            <button type="submit" :disabled="is_load">{{ is_load ? 'Sto inviando...': 'Invia' }}</button>
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
        width: 700px;
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
        padding: 15px 45px;
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
