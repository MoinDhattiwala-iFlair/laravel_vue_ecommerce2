import Vue from 'vue'
import Vuex from 'vuex'
import auth from './modules/auth'
import banner from './modules/banner'
import category from './modules/category'
import product from './modules/product'
import post from './modules/post'
import settings from './modules/settings'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        auth,
        banner,
        category,
        product,
        post,
        settings,
    }
});