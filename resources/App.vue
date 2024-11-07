<template>
    <h1>Mensaje: {{ msg }}</h1>
    <form @submit.prevent="callApi">
        <input v-model="message" type="text">
        <button class="border" type="submit">send</button>
    </form>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            message: '',
            msg: ''
        }
    },
    mounted() {
        window.Echo.channel('test')
            .listen('.notification', (e) => {
                console.log('hola');
                console.log(e);
                this.msg = e.message;
            });
    },
    methods: {
        async callApi() {
            try {
                const data = await axios.post('api/test', { message: this.message });
                console.log(data);
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>