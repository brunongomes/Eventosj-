<template>
  <div class="container">
    <div>
      <h3>Cadastro/Edição de convidados:</h3>
    </div>
    <ul>
      <form @submit.prevent="registerGuest">
        <label>Nome</label>
        <input type="text" placeholer="Digite seu nome." v-model="guest.name" />
        <label>E-mail</label>
        <input
          id="email"
          type="text"
          placeholer="Digite seu e-mail."
          v-model="guest.email"
        />
        <label>Confirmação de e-mail</label>
        <input
          id="email_confirm"
          type="text"
          placeholer="Digite seu e-mail novamente."
          v-model="guest.email_confirm"
        />
        <div>
          <v-select>
            <option value="" disabled selected>Eventos disponíveis:</option>
            <option
              v-for="event in events"
              :key="event.id"
              :value="event.description"
            >
              {{ event.description }}
            </option>
          </v-select>
        </div>
        <label>Digite o evento para confirmar.</label>
        <input
          type="text"
          placeholer="Digite o evento."
          v-model="guest.description_event"
        />
        <button
          @click="salvar(guest)"
          class="waves-effect btn-small blue darken-1"
        >
          <i class="material-icons">Salvar</i>
        </button>
      </form>
    </ul>

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
          <td class="buttons">
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
import Event from "../services/events";

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
    this.getEvents();

    Guest.guestList().then((resposta) => {
      this.guests = resposta.data;
    });
  },

  updated() {
    this.activeSelect();
  },

  methods: {
    activeSelect() {
      $(document).ready(function () {
        $("select").material_select();
      });
    },

    getEvents() {
      Event.eventList().then((resposta) => {
        this.events = resposta.data;
      });
    },

    list() {
      Guest.guestList().then((resposta) => {
        this.guest = resposta.data;
      });
    },

    registerGuest() {
      if (email_confirm.value == email.value) {
        if (!this.guest.id) {
          Guest.registerGuest(this.guest)
            .then((resposta) => {
              Guest.guestList().then((resposta) => {
                this.guests = resposta.data;
              });
              this.guest = {};
              alert("Cadastro salvo com sucesso!");
            })
            .catch((e) => {
              this.errors = e.response.data.errors;
              alert(
                "Confira o evento digitado, se corresponde a um dos eventos existentes.(Não pode estar em branco.)"
              );
            });
        } else {
          Guest.updateGuest(this.guest)
            .then((resposta) => {
              this.list();
              this.guest = {};
              alert("Atualizado com sucesso!");
            })
            .catch((e) => {
              this.errors = e.response.data.errors;
            });
        }
      } else {
        alert("O e-mail digitado é diferente do e-mail de confirmação.");
      }
    },

    editar(guest) {
      this.guest = guest;
    },

    remover(guest) {
      if (confirm("Deseja excluir o convidado?")) {
        Guest.deletGuest(guest)
          .then((resposta) => {
            this.list();
            this.errors = [];
          })
          .catch((e) => {
            this.errors = e.response.data.errors;
          });
      }
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

.borda {
  width: 800px;
  height: 100px;
  border: solid 1px;
  border-radius: 5px 5px 5px 5px;
}
</style>
