require('./bootstrap');

import Vue from 'vue'
import router from './plugins/router'
import store from "./store"
import Vuelidate from 'vuelidate'
import Toasted from 'vue-toasted';
import App from './App'

Vue.use(Vuelidate)

Vue.use(Toasted, {
    duration: 800,
    keepOnHover: true
});

Vue.toasted.register('common_error_toast', 'Oops.. Something Went Wrong..', {
    type: 'error',
})

new Vue({
    el: '#root',
    components: { App },
    router,
    store
});