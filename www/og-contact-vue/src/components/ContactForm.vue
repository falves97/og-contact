<template>

  <div>

    <div>
      <label for="subject">Seu contato é relacionado a:</label>
      <select id="subject" v-model="subject">
        <option v-for="option in subjectTyes" :value="option">{{ option }}</option>
      </select>
    </div>


    <input type="text" v-model="name" placeholder="Nome">
    <input type="text" v-model="company" placeholder="Empresa">
    <input type="text" v-model="email" placeholder="E-mail">
    <input type="text" v-model="phone" placeholder="Telefone">

    <div>
      <label for="message">Mensagem</label>
      <textarea placeholder="Digite aqui..." v-model="message"></textarea>
    </div>

    <div>
      <input type="submit" @click.prevent="send" value="Enviar">
    </div>
  </div>

</template>

<script setup>

import {ref} from "vue";

const subjectTyes = ["Imprensa", "Comercial"]

const subject = ref("Imprensa")
const name = ref("");
const company = ref("");
const email = ref("");
const phone = ref("");
const message = ref("");

function send() {
  console.log(JSON.stringify({
    subject: subject.value
  }))

 fetch('http://localhost:8001/api/mail', {
   method: 'POST',
   headers: {
     "Content-Type": "application/json"
   },
   body: JSON.stringify({
     subject: subject.value,
     name: name.value,
     company: company.value,
     email: email.value,
     phone: phone.value,
     message: message.value
   })
 })
     .then(resp => resp.json())
     .then(resp => console.log(resp))
}


</script>

<style scoped>

</style>