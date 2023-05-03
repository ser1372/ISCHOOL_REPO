<template>
    <div v-if="isAuthenticated">
        <p>Привет, {{ user.name }}!</p>
        <button @click="logout">Выйти</button>
    </div>
</template>

<script>
import { mapState, mapActions } from 'vuex';

export default {
    computed: {
        ...mapState(['user', 'isAuthenticated'])
    },
    methods: {
        ...mapActions(['logout'])
    }
};
</script>
