import axios from '../../plugins/axios';
const state = {
    banners: {}
};
const getters = {
    get(state, getters) {
        return state.banners;
    }
};
const actions = {
    fetch(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('banner/all', params).then((result) => {
                //console.log('banner rs', result.data);
                context.commit('set', result.data)
                resolve();
            }).catch((err) => {
                console.log('banner err', err);
                reject(err.response);
            });
        });
    }
};
const mutations = {
    set(state, banners) {
        state.banners = banners
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}