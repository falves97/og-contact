<template>
  <nav>
    <ul>
      <li><a href="#">Sobre</a></li>
      <li><a href="#">Novidades</a></li>
      <li><a href="#">Agenda</a></li>
      <li><a href="#">Thay e Unicef</a></li>
      <li><a href="#">Galeria</a></li>
      <li><a href="#">São João da Thay</a></li>
      <li><a href="#">Contato</a></li>
      <li><div class="line"></div></li>
      <li class="menu-small"><a href="#">Imprensa</a></li>
      <li  class="menu-small"><a href="#">Fã-Clubes</a></li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "Menu"
}
</script>

<style scoped>
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  ul li {
    width: 100%;
    display: flex;
    justify-content: flex-end;
  }

  a {
    text-decoration: none;
    color: #333;
    display: block;
  }

  .line {
    width: 21px;
    height: 1px;
    background-color: #ff8585;
    margin: 5px 0;
  }

  li:not(li.menu-small) {
    font-size: 1.2rem;
  }
</style>