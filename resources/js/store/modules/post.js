import axios from '../../plugins/axios'
const state = {
    posts: {},
};
const getters = {
    get(state, getters) {
        return state.posts;
    },
};
const actions = {
    fetch(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('post/all', params).then((result) => {
                context.commit('set', result.data);
                resolve();
            }).catch((err) => {
                console.log('blog err', err.response);
                reject(err.response);
            });
        });
    },
};
const mutations = {
    set(state, posts) {
        state.posts = posts;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};