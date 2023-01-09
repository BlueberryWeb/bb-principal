import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/DesarrolloWeb',
      name: 'DesarrolloWeb',
      component: () => import('../views/WebDevelopmentView.vue')
    },
    {
      path: '/Ecommerce',
      name: 'Ecommerce',
      component: () => import('../views/EcommerceView.vue')
    },
    {
      path: '/Portafolio',
      name: 'Portafolio',
      component: () => import('../views/PortafolioView.vue')
    },
    {
      path: '/Contacto',
      name: 'Contacto',
      component: () => import('../views/ContactoView.vue')
    },
    {
      path: '/Index',
      name: 'Index',
      component: () => import('../views/Eng/HomeView.vue')
    },
    {
      path: '/AboutUs',
      name: 'AboutUs',
      component: () => import('../views/Eng/AboutView.vue')
    },
    {
      path: '/Contact',
      name: 'Contact',
      component: () => import('../views/Eng/ContactView.vue')
    },
    {
      path: '/E-commerce',
      name: 'E-commerce',
      component: () => import('../views/Eng/EcommerceView.vue')
    },
    {
      path: '/Portfolio',
      name: 'Portfolio',
      component: () => import('../views/Eng/PortfolioView.vue')
    },
    {
      path: '/WebDevelopment',
      name: 'WebDevelopment',
      component: () => import('../views/Eng/WebDevelopmentView.vue')
    },
  ]
})

export default router
