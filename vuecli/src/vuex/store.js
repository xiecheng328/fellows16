import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
    count: 1
};

const mutations = {
    add(state, num){
        state.count += num;
    },
    reduce(state){
        state.count--;
    }
}

//相当于computed
const getters = {
    count1(state){
        return state.count += 100;
    }
}

const actions = {
    addAction({commit}, num){
        commit('add', num);
    },
    reduceAction({commit}){
        commit('reduce');
    }
}


export default new Vuex.Store({
    state,
    mutations,
    getters,
    actions
});

