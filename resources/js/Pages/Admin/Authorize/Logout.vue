<template>
    <div>
        <button @click="logout">Logout</button>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    methods: {
        async logout() {
            try {
                const response = await axios.post('/api/logout');
                console.log(response.data);
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
