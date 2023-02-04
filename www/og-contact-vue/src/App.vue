<script setup>

import ContactForm from "@/components/ContactForm/ContactForm.vue";
import ContactBanner from "@/components/ContactBanner.vue";
import Menu from "@/components/Menu.vue";
</script>

<template>
  <header class="header">
    <div class="container">
      <div class="logo">THAYNARA OG</div>
    </div>
  </header>
  <div class="container main-content">
    <main>
      <ContactBanner/>
      <ContactForm/>
    </main>
    <aside class="aside">
      <Menu/>
    </aside>
  </div>
</template>

<style scoped>
.main-content {
  display: flex;
  justify-content: flex-end;
  gap: 10px
}

main {
  display: flex;
  width: 85%;
  justify-content: flex-end;
  gap: 10px
}

.header {
  height: 80px;
  display: flex;
  align-items: center;
  width: 100%;
}

.logo {
  color: #FF8585;
  font-weight: 900;
}

.aside {
  width: 15%;
}
</style>
