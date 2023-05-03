import { createStore } from 'vuex';

export default createStore({
    state: {
        user: null,
        isAuthenticated: false
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
            state.isAuthenticated = !!user;
        }
    },
    actions: {
        async login({ commit }, credentials) {
            // Выполните ваш запрос авторизации здесь
            const response = await axios.post('/api/login', credentials);

            // После успешной авторизации, сохраните пользователя в store
            commit('setUser', response.data.user);
        },
        async logout({ commit }) {
            // Выполните ваш запрос на выход здесь
            await axios.post('/api/logout');

            // После выхода из системы, очистите пользователя и состояние аутентификации
            commit('setUser', null);
        }
    }
});
