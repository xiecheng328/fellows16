<template>
<div class="movie-list">
  <ul>
    <li @click="goDetail(movie.id)" v-for="movie in moveList" :key="movie.id" class="movie">
    <!-- <router-link to="/movie/movieDetail/"> -->
      <div class="movie-img">
        <img :src="movie.img" alt="">
      </div>
      <div class="movie-info">
        <p class="movie-name">{{movie.nm}}</p>
        <p>{{movie.ver}}</p>
        <p>主演：{{movie.star}}</p>
        <p>{{movie.showInfo}}</p>
      </div>
    <!-- </router-link> -->
      
    </li>
   
  </ul>
  <div class="loading" v-show="loadingShow">
    <img src="../../assets/img/loading.gif" alt="">
  </div>
  <div class="tip" v-show="tip">
    <h4>数据已经到底了</h4>
  </div>
</div>

</template>
<script>
/* 
npm install jquery --save
import $ from 'jquery'
$(window).on('scroll', function(){

}); 
*/
import Axios from "axios";
export default {
  data() {
    return {
      moveList: [],
      loadingShow: true,
      tip: false
    };
  },
  mounted() {
    this.loadData();
    // 监听滚动条事件
    window.onscroll = () => {
      let clientHeight = document.documentElement.clientHeight;
      let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      let scrollHeight = document.documentElement.scrollHeight;
      if (clientHeight + scrollTop == scrollHeight) {
        this.loadingShow = true;
        if (!this.tip) {
          this.loadData();
        } else {
          this.loadingShow = false;
        }
      }
    };
  },
  methods: {
    loadData() {
      // url1表示猫眼电影的远程服务接口
      let url1 =
        API_PROXY +
        "http://m.maoyan.com/movie/list.json?type=hot&limit=10&offset=" +
        this.moveList.length;
      // url2表示本地的电影数据json文件
      let url2 = "/static/data/moviedata.json";
      Axios.get(url2)
        .then(res => {
          this.loadingShow = false;
          // 由于猫眼接口用不了了，所以我们无奈采用假分页实现异步分页，但其实每次是返回所有数据，通过slice函数从所有数据中截取所需数据
          let list = res.data.data.movies;
          let data = list.slice(
            this.moveList.length,
            this.moveList.length + 10
          );
          if (data.length < 10) {
            this.tip = true;
          }
          this.moveList = this.moveList.concat(data);
        })
        .catch(() => {
          alert("获取数据失败");
        });
    },
    goDetail(movieId) {
      this.$router.push('/movie/movieDetail/'+ movieId);
    }
  }
};
</script>
<style scoped>
.movie-list {
  margin: 1rem 0;
}
.movie {
  display: flex;
  padding: 0.2rem;
  border-bottom: 1px solid #ccc;
}
.movie-img {
  flex-grow: 1;
  width: 0;
  margin-right: 0.2rem;
}
.movie-img img {
  width: 100%;
}
.movie-info {
  flex-grow: 2;
  width: 0;
}
.movie-name {
  font-weight: bolder;
}
.loading {
  text-align: center;
}
.tip {
  text-align: center;
}
</style>




