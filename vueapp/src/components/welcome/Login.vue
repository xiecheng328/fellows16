<template>
<div>
    <common-header bg="rgb(63, 81, 181)">
        <span slot="title">Photo</span>
    </common-header>
    <div class='login'>
       <p>
        用户名：<input type="text" v-model='username'>
       </p>
        <p>
        密码：<input type="password"  v-model='pwd'>
       </p>
        <p>
        <input type="submit" @click='login'>
       </p>
    </div> 
    <common-footer bg="rgb(63, 81, 181)"></common-footer>
</div>
</template>

<script>
import CommonHeader from '../common/Header'
import CommonFooter from '../common/Footer'
import Axios from 'axios'
export default {
    data(){
        return {
            username: '',
            pwd     : ''
        }
    },
    methods   :{
        login(){
            Axios.get('http://127.0.0.1:3000/users/vue_login',{
                params:{
                    username: this.username,
                    pwd     : this.pwd
                }
            }).then((res)=>{
                // console.log(res.data);
                location.href = 'http://127.0.0.1:8080/#/index';
            });
        }
    },
    components: {
      CommonHeader,
      CommonFooter
  }
}
</script>

<style scoped>
    .login{
        margin-top: 1rem;
    }
</style>


