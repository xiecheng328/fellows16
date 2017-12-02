<template>
  <ul class="list clearfix">
    <li v-for="(photo, index) in photoList" :key="index">
        <router-link :to="'/photo/photoDetail/'+index">
            <img :src="photo.src" alt="">
        </router-link>
    </li>
  </ul>
</template>

<script>
import Axios from "axios";
export default {
  data() {
    return {
      photoList: []
    };
  },
  mounted() {
    Axios.get("/static/data/photodata.json")
      .then(res => {
        this.photoList = res.data.photoData;
        //存到vuex
        this.$store.dispatch('setPhotoList', res.data.photoData);
      })
      .catch(err => {});
  }
};
</script>

<style scoped>
@import url("../../assets/css/common.css");
.list {
  margin: 1rem 0;
}
.list li {
  width: 50%;
  float: left;
}
.list img {
  width: 100%;
}
</style>
