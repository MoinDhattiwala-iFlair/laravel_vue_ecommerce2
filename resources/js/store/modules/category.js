import axios from '../../plugins/axios'
const state = {
    categories: {},
    smallBanners: {},
    parentCategories: {},
};
const getters = {
    get(state, getters) {
        return state.categories;
    },
    getSmallBanners(state, getters) {
        return state.smallBanners;
    },
    getParentCategories(state, getters) {
        return state.parentCategories;
    },
};
const actions = {
    fetch(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('/category/all', params).then((result) => {
                //console.log('sb rs', result.data);
                context.commit('set', result.data);
                resolve();
            }).catch((err) => {
                console.log('sb err', err.response);
                reject(err.response)
            });
        });
    },
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
    set(state, categories) {
        state.categories = categories;
    },
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