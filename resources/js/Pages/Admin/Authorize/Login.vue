<template>
    <div>
        <h2>Login</h2>
        <form @submit.prevent="login">
            <div>
                <label>Email:</label>
                <input type="email" v-model="credentials.email" />
            </div>
            <div>
                <label>Password:</label>
                <input type="password" v-model="credentials.password" />
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            credentials: {
                email: '',
                password: '',
            },
        };
    },
    methods: {
        async login() {
            try {
                await axios.get('/sanctum/csrf-cookie');
                const response = await axios.post('/api/login', this.credentials);
                console.log(response.data);
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
