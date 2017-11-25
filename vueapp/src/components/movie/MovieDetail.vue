<template>
    <div class="detail">
        <div class="detail-content">
            <div class="detail-img">
                <img :src="detail.img" alt="">
            </div>
            <div class="detail-info">
                <h3 v-text="detail.nm"></h3>
                <p v-text="detail.sc+'分'"></p>
                <p>{{detail.cat}}</p>
                <p>{{detail.src}} / {{detail.dur}}分钟</p>
                <p>{{detail.rt}}</p>
            </div>
        </div>
        <hr>
        <div>
            <h3>主演</h3>
            <p>{{detail.star}}</p>
        </div>
        <hr>
        <div>
            <h3>简介</h3>
            <p>{{detail.dra}}</p>
        </div>
        
    </div>

</template>
<script>
import Axios from "axios";

export default {
  data() {
    return {
      detail: {}
    };
  },
  mounted() {
    let url1 =
      API_PROXY +
      "http://m.maoyan.com/movie/" +
      this.$route.params.movieId +
      ".json";
    let url2 = "/static/data/moviedetail.json";
    Axios.get(url2).then(res => {
      this.detail = res.data.data.MovieDetailModel;
    });
  }
};
</script>
<style scoped>
.detail {
  margin: 1rem 0;
  padding: 0 0.2rem;
}
.detail-content {
  display: flex;
}
.detail-img {
  flex-grow: 1;
  width: 0;
}
.detail-info {
  flex-grow: 2;
  width: 0;
  margin-left: 0.2rem;
}
.detail h3 {
  font-weight: bolder;
  text-align: center;
}
</style>
