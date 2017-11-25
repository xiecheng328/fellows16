<template>
    <ul class="list">
        <li v-for="music in musicList" :key="music.id">
            <router-link :to="'/music/musicAlbums/' + music.id">
                <img :src="music.bg" alt="">
            </router-link>
        </li>
    </ul>
</template>

<script>
import Axios from "axios";
export default {
  data() {
    return {
      musicList: []
    };
  },
  mounted() {
    Axios.get("/static/data/musiclist.json").then(res => {
      this.musicList = res.data.albums;
    });
  }
};
</script>

<style scoped>
.list {
  margin: 1rem 0;
}
.list li {
  float: left;
  width: 50%;
}
.list li img {
  width: 100%;
}
</style>
