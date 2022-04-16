<template>
  <div class="container">
    <H3>Lista de convidados:</H3>
    <table class="borda">
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
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import Guest from "../services/guests";
import description from "./EventView.vue";

export default {
  data() {
    return {
      guest: {
        id: "",
        name: "",
        email: "",
        description_event: "",
      },
      guests: [],
      errors: [],
    };
  },

  mounted() {
    Guest.guestListEvent("Show").then((resposta) => {
      this.guests = resposta.data;
    });
  },
};
</script>

<style>
</style>