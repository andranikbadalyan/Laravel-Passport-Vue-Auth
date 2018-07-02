import Vue from 'vue';
import Vuex from 'vuex';

import user from './modules/user'
import auth from './modules/auth'

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules: {
        user,
        auth,
    }
});