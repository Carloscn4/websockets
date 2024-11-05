<template>
    Hola mundo {{ message }}
</template>
<script>

import axios from 'axios';

export default {
    data() {
        return {
            message: '',
        }
    },
    mounted() {
        this.listener();
        this.callApi();
    },
    methods: {
        listener() {
            window.Echo.channel('test')
            .listen('.notification', (e) => {
                console.log('escuchando');
                console.log(e);
            });
        },
        async callApi() {
            try {
                const { data } = await axios.get('api/test');
                console.log('llamando');
                console.log(data); 
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>