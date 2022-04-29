<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <div>
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

    <div>
      <footer class="page-footer blue">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">EventosJá</h5>
              <p class="grey-text text-lighten-4">
                Página destinada ao cadastro de eventos e convidados.
              </p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Redes sociais</h5>
              <ul>
                <li>
                  <a
                    class="grey-text text-lighten-3"
                    href="https://www.instagram.com/"
                    >Instagram</a
                  >
                </li>
                <li>
                  <a
                    class="grey-text text-lighten-3"
                    href="https://pt-br.facebook.com/"
                    >Facebook</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="footer-copyright">
          <div class="container">
            © Copyright 2022 - Bruno Gomes
            <a
              class="grey-text text-lighten-4 right"
              href="https://policies.google.com/privacy?hl=pt-BR"
              >política de privacidade</a
            >
          </div>
        </div>
      </footer>
    </div>
  </div>
</template>