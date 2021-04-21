import axios from '../../plugins/axios'
const state = {
    smallBanners: {},
    parentCategories: {},
};
const getters = {
    getSmallBanners(state, getters) {
        return state.smallBanners;
    },
    getParentCategories(state, getters) {
        return state.parentCategories;
    },
};
const actions = {
    fetchSmallBanners(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('/category/all', params).then((result) => {
                //console.log('sb rs', result.data);
                context.commit('setSmallBanners', result.data);
                resolve();
            }).catch((err) => {
                console.log('sb err', err.response);
                reject(err.response)
            });
        });
    },
    fetchParentCategories(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('/category/parent', params).then((result) => {
                //console.log('sb rs', result.data);
                context.commit('setParentCategories', result.data);
                resolve();
            }).catch((err) => {
                console.log('pc err', err.response);
                reject(err.response)
            });
        });
    }
};
const mutations = {
    setSmallBanners(state, smallBanners) {
        state.smallBanners = smallBanners;
    },
    setParentCategories(state, parentCategories) {
        state.parentCategories = parentCategories;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}