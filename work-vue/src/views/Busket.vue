<template>
    <span>КОРЗИНА: </span>
    <div v-if="busket.length>0" class="view">
        <busket-card v-for="good in busket"
        :goodItem="good" :key="good.good.id"
        class="card"/>
    </div>
    <span v-else>Корзина пуста</span>
    <span v-if="busket.length>0">Итоговая стоимость: {{cost}}</span>
</template>
<script>
import BusketCard from "@/components/BusketCard";
export default {
    components: {BusketCard},
    computed: {
        busket(){ 
            return this.$store.state.inBusket; 
        },
        cost() {
            return this.$store.getters.totalCost; 
        }
  }
}
</script>
<style scoped>
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
    align-items: center;
    justify-content: space-around;
    width: 100%;
    /* overflow: hidden; */
    flex-direction: row;
}
</style>