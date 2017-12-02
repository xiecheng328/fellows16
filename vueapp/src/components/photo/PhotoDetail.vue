<template>
    <v-touch class="detail" :style="styleObj" @swipeleft="swipeleft" @swiperight="swiperight" @tap="tap"></v-touch>
</template>

<script>
export default {
  data() {
    return {
      nowIndex: 0 //保存当前显示图片的索引
    };
  },
  computed: {
    styleObj() {
      return {
        background: `#000 url(${this.$store.state.photoList[this.nowIndex]
          .src}) no-repeat center/contain`
      };
    }
  },
  mounted() {
    this.nowIndex = this.$route.params.index;
  },
  methods: {
    swipeleft() {
      this.nowIndex--;
      if (this.nowIndex == -1) {
        this.nowIndex = this.$store.state.photoList.length - 1;
      }
    },
    swiperight() {
      this.nowIndex++;
      if (this.nowIndex == this.$store.state.photoList.length) {
        this.nowIndex = 0;
      }
    },
    tap() {
      this.$router.go(-1);
    }
  }
};
</script>

<style scoped>
.detail {
  margin: 1rem 0;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
</style>

