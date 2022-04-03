<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo center">EVENTOSJÁ</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><RouterLink to="/">Home</RouterLink></li>
        <li><RouterLink to="/event">Eventos</RouterLink></li>
        <li><RouterLink to="/guest">Convidados</RouterLink></li>
      </ul>
    </div>
  </nav>
  <RouterView />
</template>

<style>
</style>