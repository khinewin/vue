import { createRouter, createWebHistory } from 'vue-router'

import Home from "@/pages/Home.vue"
import About from "@/pages/About.vue"
import Contact  from '@/pages/Contact.vue'
import User from '@/pages/User.vue'
import Search from "@/pages/Search.vue"

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/search",
      component: Search,
      name: "search"
    },
    {
      path: '/user/:id',
      component: User,
      name: 'user'
    },
    {
      path: "/",
      component: Home,
      name: "home"
    },
    {
      path: "/about",
      component: About,
      name: "about"
    },
    {
      path: "/contact",
      component: Contact,
      name: "contact"
    }
  ],
})

export default router
