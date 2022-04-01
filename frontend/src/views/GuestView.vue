import { RouterLink, RouterView } from 'vue-router'
<template>
  <div class="container">
    <H3>CADASTRO DE CONVIDADOS</H3>

    <a class="waves-effect waves-light btn-small blue" href="/registerGuest">
      Incluir um novo convidado
    </a>

    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="guest of guests" :key="guest.id">
          <td>{{ guest.name }}</td>
          <td>{{ guest.email }}</td>
          <td class="buttons">
            <button
              @click="remover(guest)"
              class="waves-effect btn-small red darken-1"
            >
              <i class="material-icons">Deletar</i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import Guest from "../services/guests";

export default {
  data() {
    return {
      guests: [],
    };
  },

  mounted() {
    Guest.guestList().then((resposta) => {
      this.guests = resposta.data;
    });
  },

  methods: {
    
    
  }
};
</script>

<style>
.buttons {
  display: flex;
  width: 20vw;
  justify-content: space-around;
  margin-top: 20px;
}
</style>
