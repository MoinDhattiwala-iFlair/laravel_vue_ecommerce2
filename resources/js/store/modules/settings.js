import axios from '../../plugins/axios'
const state = {
    setting: {},
};
const getters = {
    get(state, getters) {
        return state.setting;
    }
};
const actions = {
    fetch(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('/settings', params).then((result) => {
                context.commit('set', result.data);
                resolve();
            }).catch((err) => {
                console.log('settings err', err.response);
                reject(err.response);
            });
        });
    }
};
const mutations = {
    set(state, setting) {
        state.setting = setting;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}