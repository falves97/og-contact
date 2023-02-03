<script setup>

import ContactForm from "@/components/ContactForm/ContactForm.vue";
import ContactBanner from "@/components/ContactBanner.vue";
</script>

<template>
  <main>
    <ContactBanner />
    <ContactForm/>
  </main>
</template>

<style scoped>
main {
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  align-items: center;
  width: 100%;
  max-width: 1200px;
  justify-content: space-between;
  margin: 0 auto;
}
</style>
