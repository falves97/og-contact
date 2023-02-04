<template>
  <div class="login container d-flex justify-content-center align-items-center">
    <div class="row col-5 d-flex flex-wrap justify-content-center gy-3">
      <div class="col-12">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
      </div>
      <div class="col-12">
        <label for="password" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="password" placeholder="Senha">
      </div>
      <a href="#" class="btn btn-primary col-6" @click.prevent="login">Entrar</a>
    </div>

  </div>
</template>

<script setup>
function login() {

}
</script>

<style scoped>
.login {
  height: 100vh;
  background-color: lightgrey;
}

</style>