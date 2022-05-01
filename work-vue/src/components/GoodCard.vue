<template>
    <div>
    <h2>{{goodItem.title}}
    </h2>
    <img :src="require(`@/assets/${goodItem.image}`)" alt="Изображение товара">
    <span>{{goodItem.description.slice(0, 14)}}</span>
    <span>{{goodItem.price}} руб.</span>
    <span v-if="goodItem.count>0">{{goodItem.count}} шт.</span>
    <span v-else>Товара нет в наличии.</span>
    <router-link :to="'/goods/'+goodItem.id">Подробнее
    </router-link>
    <button v-if="goodItem.count>0" type="button" 
        @click="addGood(goodItem.id)">Добавить в корзину</button>
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
    ...mapMutations(['addGood'])
    }
}
</script>
<style>
.span {
    text-transform: uppercase;
    display: block;
    padding-bottom: 5px;
}
img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 5px;
    display: block;
}
button{
    background-color: rgb(233, 248, 179);
    border-radius: 10px;
    display: block;
    text-align: center;
}
</style>