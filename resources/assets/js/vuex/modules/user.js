import Vue from 'vue'

const state = {
    status: '',
    profile: {}
}

const getters = {
    getProfile: state => state.profile,
    isProfileLoaded: state => !!state.profile.name,
}

const actions = {
    userRequest: ({commit, dispatch}) => {
        commit('userRequest')
        axios.get('/api/user')
            .then((resp) => {
                commit('userSuccess', resp.data);
            })
            .catch((err) => {
                commit('userError');
                // if resp is unauthorized, logout, to
                dispatch('authLogout')
            })
    },
}

const mutations = {
    userRequest: (state) => {
        state.status = 'loading';
    },
    userSuccess: (state, resp) => {
        state.status = 'success';
        Vue.set(state, 'profile', resp);
    },
    userError: (state) => {
        state.status = 'error';
    }
}

export default {
    state,
    getters,
    actions,
    mutations,
}