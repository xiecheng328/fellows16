<template>
  <div id="app">
    <h1>hello</h1>
    <!-- <img src="./assets/logo.png"> -->
    <div>
      <router-link to="/">首页</router-link>
      <router-link to="/test">测试</router-link>
      <router-link :to="{name: 'test1', params: {name: 'xc', age: 30}}">测试子路由1</router-link>
      <router-link to="/test/test2">测试子路由2</router-link>
      <router-link to="/testurl/5/lisi">测试URL</router-link>
    </div>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
