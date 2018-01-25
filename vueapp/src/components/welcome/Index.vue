<template>
<div>
    <common-header bg="rgb(63, 81, 181)">
        <span slot="title">Photo</span>
    </common-header>
    <div class='login'>
       <p>
            welcome {{username}}
       </p>
    </div> 
    <common-footer bg="rgb(63, 81, 181)"></common-footer>
</div>
</template>

<script>
import CommonHeader from '../common/Header'
import CommonFooter from '../common/Footer'
import Axios from 'axios'
Axios.defaults.withCredentials = true
export default {
    data(){
        return {
            username: '游客'
        }
    },
    mounted(){
         Axios.get('http://127.0.0.1:3000/users/vue_index').then((res)=>{
            // this.username = res.data.username;
            this.username = JSON.parse(res.data).username;
            });
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


