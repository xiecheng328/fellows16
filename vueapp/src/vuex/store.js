import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

const state = {
  photoList: []
};

const mutations = {
  setPhotoList(state, status) {
    state.photoList = status;
  }
};

// 相当于computed
const getters = {

};

const actions = {
  setPhotoList({
    commit
  }, status) {
    commit('setPhotoList', status);
  }
};

export default new Vuex.Store({
  state,
  getters,
  mutations,
  actions
});
