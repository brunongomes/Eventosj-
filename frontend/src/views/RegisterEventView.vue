<template>
  <div class="container">
    <h3>Cadastro de eventos:</h3>
    <ul>
    <form @submit.prevent="registerEvent">
      <label>Descrição</label>
      <input type="text" placeholer="Digite a descrição do evento." v-model="event.description" />
      <label>Data</label>
      <input type="date" placeholer="Digite a descrição do evento." v-model="event.event_date" />
      <button class="waves-effect waves-light btn-small">
        Salvar<i class="material-icons left"></i>
      </button>
      <button
        @click="remover(event)"
        class="waves-effect btn-small red darken-1"
      >
        <i class="material-icons">Cancelar</i>
      </button>
    </form>
    </ul>
  </div>
</template>

<script>
import { RouterLink, RouterView } from "vue-router";
import HelloWorld from "@/components/HelloWorld.vue";

import Event from "../services/guests";
export default {
  data() {
    return {
      event: {
        id: "",
        description: "",
        event_date: "",
      },
      events: [],
      errors: [],
    };
  },

  methods: {
    registerEvent() {
      Event.registerEvent(this.event)
        .then((resposta) => {
          this.event = {};
          alert("Salvo com sucesso!");
        })
        .catch((e) => {
          this.errors = e.response.data.errors;
        });
    },
  },
};
</script>



<style>
.container {
  width: 50vw;
  justify-content: space-around;
  margin-top: 30px;
}
</style>