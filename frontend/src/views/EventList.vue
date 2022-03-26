<template>
  <div class="EventList">
        <div>
            <h1>Lista de eventos</h1>
            <ul>
                <li>teste</li>
                <li>teste1</li>
                <li>teste2</li>
                <li>teste3</li>
                <li>teste4</li>
            </ul>
        </div>
        <div class="button">
            <button v-on:click="incluir">Incluir</button>
            <button>Editar</button>
            <button>Excluir</button>
            <button>Acessar</button>
        </div>
  </div>
</template>

methods: {
    incluir: function (event) {
      alert('Olá ' + this.name + '!')
      if (event) {
        alert(event.target.tagName)
      }
    }
  }
})

<style>
@media (min-width: 1024px) {
  .EventList {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }

   .button {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}
</style>