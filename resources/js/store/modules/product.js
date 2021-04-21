import axios from '../../plugins/axios';
const state = {
    products: {},
    featuredProducts: {},
    hotProducts: {},
    latestProducts: {},
};
const getters = {
    get(state, getters) {
        return state.products;
    },
    getFeaturedProducts(state, getters) {
        return state.featuredProducts;
    },
    getHotProducts(state, getters) {
        return state.hotProducts;
    },
    getLatestProducts(state, getters) {
        return state.latestProducts;
    },
};
const actions = {
    fetch(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('product/all', params).then((result) => {
                context.commit('set', result.data);
                resolve();
            }).catch((err) => {
                console.log('p err', err.response);
                reject(err.response)
            });
        });
    },
    fetchFeaturedProducts(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('product/featured', params).then((result) => {
                context.commit('setFeaturedProducts', result.data);
                resolve();
            }).catch((err) => {
                console.log('fp err', err.response);
                reject(err.response)
            });
        });
    },
    fetchHotProducts(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('product/all', params).then((result) => {
                context.commit('setHotProducts', result.data);
                resolve();
            }).catch((err) => {
                console.log('fp err', err.response);
                reject(err.response)
            });
        });
    },
    fetchLatestProducts(context, params) {
        return new Promise((resolve, reject) => {
            axios.get('product/all', params).then((result) => {
                context.commit('setLatestProducts', result.data);
                resolve();
            }).catch((err) => {
                console.log('fp err', err.response);
                reject(err.response)
            });
        });
    },
};
const mutations = {
    set(state, products) {
        state.products = products;
    },
    setFeaturedProducts(state, featuredProducts) {
        state.featuredProducts = featuredProducts;
    },
    setHotProducts(state, hotProducts) {
        state.hotProducts = hotProducts;
    },
    setLatestProducts(state, latestProducts) {
        state.latestProducts = latestProducts;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}