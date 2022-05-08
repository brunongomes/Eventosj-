<template>
  <div class="container">
    <h3>Cadastro/Edição de eventos:</h3>
    <ul>
      <form @submit.prevent="registerEvent">
        <label>Descrição</label>
        <input
          type="text"
          placeholer="Digite a descrição."
          v-model="event.description"
        />
        <label>Data do evento</label>
        <input
          type="date"
          placeholer="Digite a data do evento."
          v-model="event.event_date"
        />

        <button
          @click="salvar(event)"
          class="waves-effect btn-small blue darken-1"
        >
          <i class="material-icons">Salvar</i>
        </button>
      </form>
    </ul>

    <H3>Lista de eventos:</H3>
    <table class="borda">
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

            <button
              class="waves-effect btn-small green darken-1"
              id="show-modal"
              @click="showModal = true, selectDesc(event)"
            >
              Convidados
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <Teleport to="body">
      <!-- use the modal component, pass in the prop -->
      <modal :show="showModal" @close="showModal = false">
        <template #header>
          <H3>Lista de convidados do evento: {{ event.description }}</H3>
        </template>
      </modal>
    </Teleport>
  </div>
</template>

<script>
import Event from "../services/events";
import Modal from "./GuestOfEvents.vue";

export default {
  components: {
    Modal,
  },
  data() {
    return {
      desc: "",
      showModal: false,
      event: {
        id: "",
        description: "",
        event_date: "",
      },
      events: [],
      errors: [],
    };
  },

  mounted() {
    this.list();
    this.activeSelect();
  },

  methods: {   
    selectDesc(event) {
      this.event = event;
      this.desc = event.description;
    },

    activeSelect() {
      $(document).ready(function () {
        $("select").material_select();
      });
    },

    list() {
      Event.eventList().then((resposta) => {
        this.events = resposta.data;
      });
    },

    registerEvent() {
      if (!this.event.id) {
        Event.registerEvent(this.event)
          .then((resposta) => {
            this.list();
            this.event = {};
            alert("Evento cadastrado com sucesso!");
          })
          .catch((e) => {
            this.errors = e.response.data.errors;
            alert(
              "Não é possível incluir o evento, já possui evento nessa data!"
            );
          });
      } else {
        Event.updateEvent(this.event)
          .then((resposta) => {
            this.list();
            this.event = {};
            alert("Evento atualizado com sucesso!");
          })
          .catch((e) => {
            this.errors = e.response.data.errors;
          });
      }
    },

    editar(event) {
      this.event = event;
    },

    remover(event) {
      if (confirm("Deseja excluir o convidado?")) {
        Event.deletEvent(event)
          .then((resposta) => {
            this.list();
            this.errors = [];
            alert("Evento excluído com sucesso.");
          })
          .catch((e) => {
            this.errors = e.response.data.errors;
            alert("Não é possível excluir. Esse evento possui convidados.");
          });
      }
    },
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

.borda {
  width: 800px;
  height: 400px;
  border: solid 1px;
  border-radius: 5px 5px 5px 5px;
}
</style>
