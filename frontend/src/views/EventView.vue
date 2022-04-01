<template>
  <div class="container">
    <H3>LISTA DE EVENTOS:</H3>

    <a class="waves-effect waves-light btn-small" href="/registerEvent">Cadastrar novo evento</a>

    <table>
      <thead>
        <tr>
          <th>Descrição</th>
          <th>Data</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="event of events" :key="event.id">
          <td>{{ event.description }}</td>
          <td>{{ event.event_date }}</td>
          <td class="buttonsConfig">
            <button
              @click="editar(event)"
              class="waves-effect btn-small blue darken-1"
            >
              <i class="material-icons">Editar</i>
            </button>
            <button
              @click="remover(event)"
              class="waves-effect btn-small red darken-1"
            >
              <i class="material-icons">Excluir</i>
            </button>
            <a class="waves-effect btn-small green darken-1" href="/guest">Convidados</a>
            
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import Event from "../services/guests";

import { RouterLink, RouterView } from "vue-router";

export default {
  data() {
    return {
      events: [],
    };
  },

  mounted() {
    Event.eventList().then((resposta) => {
      this.events = resposta.data;
    });
  },
};
</script>

<style>
.buttonsConfig {
  display: flex;
  width: 30vw;
  justify-content: space-around;
  margin-top: 20px;
}
</style>
