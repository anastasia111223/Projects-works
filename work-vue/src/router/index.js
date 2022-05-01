import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'

const routes = [
  {
    path: '/',
    component: Home
  },
  {
    path: '/goods',
    component: () => import('../views/allgoods.vue') 
  },
  {
    path: '/goods/:id',
    component: () => import('../views/Aboutgood.vue')
  },
  {
    path: '/busket',
    component: () => import('../views/Busket.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
