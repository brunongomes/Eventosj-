<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from '@/components/HelloWorld.vue'
</script>

<template>
  <nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo center">EVENTOSJÁ</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><RouterLink to="/">Home</RouterLink></li>
        <li><RouterLink to="/event">Eventos</RouterLink></li>
      </ul>
    </div>
  </nav>
  <RouterView />
</template>

<style>

</style>