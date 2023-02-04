<script setup>

import ContactForm from "@/components/ContactForm/ContactForm.vue";
import ContactBanner from "@/components/ContactBanner.vue";
import Menu from "@/components/Menu.vue";
import SocialMenu from "@/components/SocialMenu.vue";
</script>

<template>
  <div class="page">
    <div class="header-container">
      <header class="container header-content">
        <div class="logo">THAYNARA OG</div>
        <SocialMenu class="bg-icon-pink"/>
      </header>
    </div>
    <div class="container main-content">
      <main>
        <ContactBanner/>
        <ContactForm/>
      </main>
      <aside class="aside">
        <Menu/>
      </aside>
    </div>
    <div class="footer-bg">
      <footer class="container footer">
        <p>2022 &copy; THAYNARA OG. Todos os direitos reservados.</p>
        <SocialMenu class="bg-icon-grey"/>
      </footer>
    </div>
  </div>

</template>

<style scoped>
.main-content {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  height: calc(100% - 140px);
}

main {
  display: flex;
  flex-wrap: wrap;
  width: 85%;
  justify-content: flex-end;
  gap: 10px;
}

.header-container {
  width: 100%;
}

.header-content {
  height: 80px;
  display: flex;
  align-items: center;
  width: 100%;
  justify-content: space-between;
}


.logo {
  color: #FF8585;
  font-weight: 900;
}

.aside {
  width: 15%;
}

.footer-bg {
  background-color: black;
  width: 100%;
}

.footer {
  display: flex;
  height: 60px;
  align-items: center;
  justify-content: space-between;
  color: #bdbdbd;
}

.page {
  display: flex;
  flex-wrap: wrap;
  height: 100vh;
  align-content: space-between;
  min-height: 700px;
}
</style>
