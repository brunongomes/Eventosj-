import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/Guestlist',
      name: 'Guestlist',
      component: () => import('../views/Guestlist.vue')
    },
    {
      path: '/EventList',
      name: 'EventList',
      component: () => import('../views/EventList.vue')
    },
    {
      path: '/EventInclusion',
      name: 'EventInclusion',
      component: () => import('../views/EventInclusion.vue')
    },
    {
      path: '/IncludeInvitation',
      name: 'IncludeInvitation',
      component: () => import('../views/IncludeInvitation.vue')
    }    
  ]
})

export default router
