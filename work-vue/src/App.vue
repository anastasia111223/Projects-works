<template>
    <shop-menu :links="pages" class="shop-menu"></shop-menu>
    <router-view/>
    <div>
      <span>Корзина: {{summ}} </span>
    </div>
</template>

<script>
import ShopMenu from "@/components/ShopMenu";
export default {
 components: {ShopMenu},
  data(){
    return {
      pages: [
        {title: 'Главная', path: "/"},
        {title: 'Каталог товаров', path: "/goods"},
        {title: 'Корзина', path: "/busket"}
      ]
    }
    },
    computed: {
    busket(){ 
      return this.$store.state.inBusket; 
    },
    summ() {
      return this.$store.getters.totalSumm; 
    }
  }
}
// 1. Массив данных:
// 2. Необходимо вывести информацию о всех товарах (если значение свойства `count` равно 0, вывести `Товара нет в наличии`, 
// в значении свойства `description` вывести `первые 15 символов`).
// 3. Реализовать возможность перехода на страницу с подробным описанием товара (значение свойства `description` вывести полностью).
// 4. Реализовать возможность добавления товара в корзину (хранилище vuex).
// 5. На каждой странице отображать, сколько товаров добавлено в корзину.
// 6. Карточку товара реализовать как отдельный компонент.
// Реализовать корзину:
// 1. На отдельной странице (компоненте) отображать названия добавленных в корзину товаров.
// 2. Реализовать возможность увеличить/уменьшить количество товара в корзине.
// 3. Реализовать возможность удалить товар из корзины.
// 4. Отображать стоимость каждого товара и итоговую стоимость всех товаров в корзине.
</script>

<style>
.shop-menu {
    display: flex;
    flex-direction: row;
    justify-content: center;
    background-color: rgb(226, 134, 134);
}
</style>