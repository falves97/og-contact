<template>

  <div class="form">
    <div v-if="hasAlert" :class="alertType">
      {{ alertMessage }}
    </div>

    <div class="form__subject">
      <label for="subject">Seu contato é relacionado a:</label>
      <select id="subject" v-model="subject">
        <option v-for="option in subjectTyes" :value="option">{{ option }}</option>
      </select>
    </div>

    <CustomInput type="text" v-model="name" placeholder="Nome"/>
    <CustomInput type="text" v-model="company" placeholder="Empresa"/>
    <CustomInput type="email" v-model="email" placeholder="E-mail"/>
    <CustomInput type="tel" v-model="phone" placeholder="Telefone"/>

    <div class="form__message">
      <label for="message">Mensagem</label>
      <textarea placeholder="Digite aqui..." v-model="message"></textarea>
    </div>

    <div class="form__btns">
        <label class="check-robot" for="is-robot">
          <CustomInput type="checkbox" id="is-robot"/>
          Não sou um robô
        </label>

      <div class="btn-send" @click.prevent="send">
        <span class="btn-send__text">Enviar</span>
        <SendIcon class="btn-send__icon"/>
      </div>
    </div>


  </div>

</template>

<script setup>

import {ref} from "vue";
import CustomInput from "@/components/ContactForm/CustomInput.vue";
import SendIcon from "@/components/icons/Send.vue";

const subjectTyes = ["Imprensa", "Comercial"]

const subject = ref("Imprensa")
const name = ref("");
const company = ref("");
const email = ref("");
const phone = ref("");
const message = ref("");

const hasAlert = ref(false);
const alertType = ref("");
const alertMessage = ref("");

function send() {

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
      .then(resp => {
        if(resp.status >= 400) {
          alertType.value = "alert-error"
          alertMessage.value = "Erro ao enviar e-mail. Por favor, preencha corretamente todos os campos."
        }
        else {
          alertType.value = "alert-success"
          alertMessage.value = "E-mail enviado com sucesso."
        }
      })


  hasAlert.value = true;
}


</script>

<style scoped>
.form {
  display: flex;
  flex-wrap: wrap;
  width: 45%;
  height: 500px;
  align-content: space-between;
  margin-top: 50px;
}

.form__subject select:focus {
  outline: none;
}

.form__subject,
.form__subject label {
  width: 100%;
}

.form__subject,
.form__message {
  display: flex;
  flex-wrap: wrap;
}

.form__subject label,
.form__message label {
  margin-bottom: 5px;
}

.form__subject select,
.form__message textarea {
  border-color: #ddd;
}

.form__subject select:focus {
  outline: none;
}

.form__message,
.form__subject select,
.form__message label,
.form__message textarea,
.form__btns {
  width: 100%;
}

.form__message textarea,
.form__subject select {
  padding: 1.2em 1em;
}

.form__subject select {
  appearance: none;
  background-color: transparent;
  border: 1px solid #ddd;
  border-radius: 6px;
  background-image: url("../../assets/icons/arrow-down.svg");
  background-repeat: no-repeat;
  background-size: 12px;
  background-position: 95% 50%;
}

.form__message textarea {
  box-sizing: border-box;
  resize: none;
  height: calc(7 * 1.2em);
  border-radius: 0;
}

.form__message textarea:focus {
  outline: none;
}

.form__btns {
  display: flex;
  justify-content: space-between;
}

.check-robot,
.btn-send {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  align-content: center;
  border: none;
  border-radius: 6px;
  height: 50px;
}

.check-robot {
  background-color: #f5f5f5;
  padding: 0 1rem;
}

.check-robot input {
  width: 24px;
  height: 24px;
  margin-right: 1rem;
}

.btn-send {
  background-color: #FF8585;
  color: white;
  width: 200px;
  cursor: pointer;
}

.btn-send:hover {
  background-color: #ff7575;
}

.btn-send__text {
  width: 80%;
  text-align: center;
}

.btn-send__icon {
  fill: white;
}

.alert-error,
.alert-success {
  width: 100%;
  padding: 20px;
  border-radius: 6px;
  border: 1px solid;
}

.alert-error {
  background-color: #ffebeb;
  border-color: #ffbebe;
}

.alert-success {
  background-color: #efffeb;
  border-color: #ccffc0;
}
</style>