<template>
    <div>
        <h1 class="test">{{msg}}</h1>
        <router-view/>
    </div>
</template>

<script>
export default {
    data(){
        return {
            msg: '测试vue-router'
        }
    }
}
</script>

<style scoped>
.test{
    background: #ff0000;
}
</style>


