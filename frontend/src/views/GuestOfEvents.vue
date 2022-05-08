<template>
  <Transition name="modal">
    <div v-if="show" class="modal-mask">
    <div class="container">
      <div class="scroller">
        <div class="modal-wrapper">
          <div class="modal-container">
            <div class="modal-header">
              <slot name="header">default header</slot>
            </div>

            <div class="modal-body">
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
            
            <div class="modal-footer">
              <slot name="footer">
                <button class="waves-effect btn-small red darken-1" @click="$emit('close')">
                  Fechar
                </button>
                <div>.</div>
                <div>.</div>
                <div>.</div>
              </slot>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </Transition>
</template>

<script>
import Guest from "../services/guests";
import Event from "./EventView.vue";

export default {
  guest: {
    id: "",
    name: "",
    email: "",
    description_event: "",
  },
  guests: [],
  errors: [],
  props: {
    show: Boolean,
    desc: String,
  },

  mounted() {
    this.selectGuests();

    console.log(Event.data().event.description);
    console.log(Event.data().desc);
  },

  methods: {
    selectGuests() {
      Guest.guestListEvent(Event.data().desc).then((resposta) => {
        this.guests = resposta.data;
      });
    },
  },
};
</script>

<style>
.scroller {
  width: 900px;
  height: 700px;
  overflow-y: scroll;
  scrollbar-width: thin;
}

.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 900px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
  transition: all 0.3s ease;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

.modal-enter-from {
  opacity: 0;
}

.modal-leave-to {
  opacity: 0;
}

.modal-enter-from .modal-container,
.modal-leave-to .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>