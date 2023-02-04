<template>
  <div class="contact-title">
    <div class="contact__banner-img">
    </div>
    <ContactOutline class="contact-fill"/>
    <ContactOutline class="contact-outline"/>
  </div>
</template>

<script setup>

import ContactOutline from "@/components/ContactForm/ContactOutline.vue";
</script>

<style scoped>
  .contact-title {
    position: relative;
    width: 50%;
  }

  .contact__banner-img {
    position: absolute;
    top: -80px;
    width: 47%;
    height: 500px;
    background-image: url("../assets/images/contato-foto.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    left: 20%;
    z-index: 1;
  }

  .contact-fill,
  .contact-outline {
    width: 100%;
    position: absolute;
    stroke-width: 2px;
    stroke: #FFDADA;
  }

  .contact-fill {
    fill: #FFDADA;
  }

  .contact-outline {
    fill: transparent;
    z-index: 5;
  }

</style>