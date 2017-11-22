<template>
<div>
  <ul class="movie-list">
    <li v-for="movie in moveList" :key="movie.id" class="movie">
      <div class="movie-img">
        <img :src="movie.img" alt="">
      </div>
      <div class="movie-info">
        <p class="movie-name">{{movie.nm}}</p>
        <p>{{movie.ver}}</p>
        <p>主演：{{movie.star}}</p>
        <p>{{movie.showInfo}}</p>
      </div>
    </li>
  </ul>
  <div class="loading" v-show="loadingShow">
    <img src="../../assets/img/loading.gif" alt="">
  </div>
</div>

</template>
<script>
import Axios from "axios";
export default {
  data() {
    return {
      moveList: [],
      loadingShow: true
    };
  },
  mounted() {
    Axios.get(API_PROXY + "http://m.maoyan.com/movie/list.json?type=hot&limit=10&offset=" + this.moveList.length
)
      .then(res => {
        // console.log(res);
        this.loadingShow = false;
        this.moveList = res.data.data.movies;
      })
      .catch(() => {});
  }
};
</script>
<style scoped>
.movie-list{
  margin: 1rem 0;
}
.movie{
  display: flex;
  padding: 0.2rem;
  border-bottom: 1px solid #ccc;
}
.movie-img{
  flex-grow: 1;
  width: 0;
  margin-right: .2rem;
}
.movie-img img{
  width: 100%;
}
.movie-info{
  flex-grow: 2;
  width: 0;
}
.movie-name{
  font-weight: bolder;
}
.loading{
  text-align: center;
}
</style>


