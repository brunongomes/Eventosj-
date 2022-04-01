<template>
  <div class="container">
    <h3>Cadastro de convidados:</h3>
    <ul>
      <form @submit.prevent="registerGuest">
        <label>Nome</label>
        <input type="text" placeholer="Digite seu nome." v-model="guest.name" />
        <label>E-mail</label>
        <input id="email"
          type="text"
          placeholer="Digite seu e-mail."
          v-model="guest.email"
        />
        <label>Confirmação de e-mail</label>
        <input id="email_confirm" type="text" placeholer="Digite seu e-mail novamente." v-model="guest.confirm"/>
        <button class="waves-effect waves-light btn-small">
          Salvar<i class="material-icons left"></i>
        </button>
        <button class="waves-effect waves-light btn-small red">
          Cancelar<i class="material-icons left"></i>
        </button>
      </form>
    </ul>
  </div>
</template>

<script>
import { RouterLink, RouterView } from "vue-router";
import HelloWorld from "@/components/HelloWorld.vue";

import Guest from "../services/guests";
export default {
  data() {
    return {
      guest: {
        id: "",
        name: "",
        email: "",
        confirm: "",
      },
      guests: [],
      errors: [],
    };
  },

methods: {
  registerGuest() {
    if(email_confirm.value == email.value){
    Guest.registerGuest(this.guest)
      .then((resposta) => {
        this.guest = {};
        alert("Salvo com sucesso!");
      })
      .catch((e) => {
        this.errors = e.response.data.errors;
      });
  }else{
    alert("O e-mail digitado é diferente do e-mail de confirmação.");
  }
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