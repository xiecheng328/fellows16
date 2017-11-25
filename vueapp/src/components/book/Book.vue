<template>
<div>
    <common-header bg="rgb(121, 85, 72)">
        <span slot="title">Book</span>
    </common-header>
    <common-footer bg="rgb(121, 85, 72)"></common-footer>
</div>
</template>

<script>
import CommonHeader from '../common/Header'
import CommonFooter from '../common/Footer'
export default {
  components: {
      CommonHeader,
      CommonFooter
  }
}
</script>

<style scoped>

</style>


