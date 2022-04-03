import { RouterLink, RouterView } from 'vue-router'
<template>
  <div class="container">
    <H3>LISTA DE CONVIDADOS</H3>

    <a class="waves-effect waves-light btn-small blue" href="/registerGuest">
      Incluir convidado
    </a>

    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Evento</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="guest of guests" :key="guest.id">
          <td>{{ guest.name }}</td>
          <td>{{ guest.email }}</td>
          <td>{{ guest.description_event }}</td>
          <td class="buttons">
            <a href="/registerGuest">Editar </a>
            <button
              @click="editar(guest)" 
              class="waves-effect btn-small blue darken-1"
            >
              <i class="material-icons">Editar</i>
            
            </button>
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
import description_event from "./EventView.vue";

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
    listar() {
      Guest.guestList(guest.description_event).then((resposta) => {
        this.guest = resposta.data;
      });
    },

    remover(guest) {
      if (confirm("Deseja excluir o convidado?")) {
        Guest.deletGuest(guest)
          .then((resposta) => {
            this.listar();
            this.errors = [];
          })
          .catch((e) => {
            this.errors = e.response.data.errors;
          });
      }
    },

    editar(guest) {
      console.log(guest.name)
      console.log(guest.email)
      console.log(guest.description_event)
      this.guest = guest;
    },
  },
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
