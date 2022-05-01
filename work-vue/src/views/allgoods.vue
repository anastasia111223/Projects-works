<template>
    <div>Все товары</div>
    <div class="view">
        <good-card v-for="good in goods"
        :goodItem="good" :key="good.id"
        class="card"/>
    </div>
</template>
<script>
import GoodCard from "@/components/GoodCard";
export default {
    components: {GoodCard},
    computed: {
        goods(){ 
            return this.$store.state.goods; 
    }
  }
}
</script>
<style>
.view {
    margin: 5px;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
}
.card {
    display: flex;
    margin: 5px;
    padding: 5px;
    justify-content: space-between;
    width: 22.5%;
    overflow: hidden;
    flex-direction: column;
    background-color:  rgb(241, 243, 208);
    border-radius: 3px;
}
</style>