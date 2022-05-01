<template>
    <h2>{{getgoodItem.title}}
    </h2>
    <img :src="require(`@/assets/${getgoodItem.image}`)" alt="Изображение товара"
        class="imggood">
    <span>{{getgoodItem.description}}</span>
    <span>{{getgoodItem.price}} руб.</span>
    <span v-if="getgoodItem.count>0">{{getgoodItem.count}} шт.</span>
    <span v-else>Товара нет в наличии.</span>
    <button v-if="getgoodItem.count>0" type="button" 
        @click="addGood(getgoodItem.id)">Добавить в коризну</button>
</template>
<script>
import { mapMutations } from 'vuex';
export default {
    computed: {
        getgoodItem() {
            return this.$store.getters.findGood(this.$route.params.id); 
            // parseInt(
        }
    },
    methods: {
    ...mapMutations(['addGood'])
    }
}
</script>
<style>
span {
    display: block;
    padding-bottom: 5px;
}
.imggood {
    width: 40%;
    height: auto;
    object-fit: cover;
    border-radius: 5px;
    display: block;
}
button{
    background-color: rgb(233, 248, 179);
    border-radius: 8px;
    display: block;
    text-align: center;
}
</style>