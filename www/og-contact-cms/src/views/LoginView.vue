<template>
  <div class="login container d-flex justify-content-center align-items-center">
    <div class="row col-5 d-flex flex-wrap justify-content-center gy-3">

      <div>{{ userInput.email }}<br/>{{ userInput.password }}</div>

      <div class="col-12">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" v-model="userInput.email">
      </div>
      <div class="col-12">
        <label for="password" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="password" placeholder="Senha" v-model="userInput.password">
      </div>
      <a href="#" class="btn btn-primary col-6" @click.prevent="login">Entrar</a>
    </div>

  </div>
</template>

<script setup>
import {useAuthStore} from "@/stores/auth";
import {ref} from "vue";
import {useRouter} from "vue-router";
import {storeToRefs} from "pinia";

const router = useRouter()

const auth = useAuthStore()
const userInput = ref({
  email: 'test@example.com ',
  password: 'pass'
})

async function login() {
  const {token, user} = storeToRefs(auth)
  await fetch("http://localhost:8001/api/login", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(userInput.value)
  })
      .then(resp => {
        if (!resp.ok) {
          return false
        } else {
          return resp.json()
        }
      })
      .then(resp => {
        if (resp) {
          token.value = resp.access_token
        }
      })

  if (token.value) {
    await fetch("http://localhost:8001/api/me", {
      method: "GET",
      headers: {
        "Authorization": "Bearer " + token.value
      }
    })
        .then(resp => {
          if (!resp.ok) {
            return false
          } else {
            return resp.json()
          }
        })
        .then(resp => {
          if (resp) {
            user.value = resp
          }
        })
  }
}
</script>

<style scoped>
.login {
  height: 100vh;
  background-color: lightgrey;
}

</style>