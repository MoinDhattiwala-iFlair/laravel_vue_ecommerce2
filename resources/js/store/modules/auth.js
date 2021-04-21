import axios from '../../plugins/axios'
const state = {
    user: {},
};
const getters = {
    get(state, getters) {
        return state.user;
    },
};
const actions = {
    login(context, user) {
        return new Promise((resolve, reject) => {
            axios.post('/login', user).then((result) => {
                console.log('login rs', result.data);
                localStorage.setItem('auth_token', result.data.token)
                localStorage.setItem('auth_user', JSON.stringify(result.data.user));
                context.commit('set')
                resolve(result.data.message);
            }).catch((err) => {
                console.log('login err', err.response);
                reject(err.response);
            });
        });
    },
    register(context, user) {
        return new Promise((resolve, reject) => {
            axios.post('/register', user).then((result) => {
                console.log('register rs', result.data);
                localStorage.setItem('auth_token', result.data.token)
                localStorage.setItem('auth_user', JSON.stringify(result.data.user));
                context.commit('set')
                resolve(result.data.message);
            }).catch((err) => {
                console.log('register err', err.response);
                reject(err.response);
            });
        });
    },
    setAuthUser(context) {
        context.commit('set');
    },
    logout(context) {
        localStorage.clear();
        context.commit('set');
    }
};
const mutations = {
    set(state) {
        state.user = JSON.parse(localStorage.getItem('auth_user'));
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}