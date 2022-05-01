<template>
    <div>
    <h2>{{goodItem.good.title}}
    </h2>
    <router-link :to="'/goods/'+goodItem.good.id">Подробнее
    </router-link>
    <span>{{goodItem.good.price}} руб. - кол-во: {{goodItem.number}}  </span>
    <button v-if="goodItem.number>1" type="button" 
        @click="minusGood(goodItem.good.id)">-</button>
    <button v-if="goodItem.good.count>0" type="button" 
        @click="plusGood(goodItem.good.id)">+</button>
    <button v-if="goodItem.number>0" type="button" 
        @click="removeGood(goodItem.good.id)">Удалить из корзины</button>
    </div>
</template>

<script>
import { mapMutations } from 'vuex';
export default {
    props: {
        goodItem: {
            required: true,
            type: Object
        }
    },
    methods: {
    ...mapMutations(['plusGood','minusGood','removeGood'])
    }
}
</script>
<style scoped>
.span {
    text-transform: uppercase;
    display: block;
    padding: 5px;
}
button {
    background-color: rgb(233, 248, 179);
    border-radius: 10px;
    display: inline-block;
    text-align: center;
    margin: 5px;
}
</style>