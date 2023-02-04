<template>
  <div class="contacts">
    <h2>CONTATO PROFISSIONAL</h2>
    <div><Phone class="contacts__icon"/>98 991234-5678</div>
    <div><Mail class="contacts__icon"/>contato@thaynaraog.com.br</div>
  </div>
</template>

<script>

import {defineComponent} from "vue";
import Phone from "@/components/icons/Phone.vue";
import Mail from "@/components/icons/Mail.vue";

export default defineComponent({
  components: {Mail, Phone}
})
</script>

<style scoped>
.contacts {
  color: #666;
  width: 90%;
  gap: 10px;
  padding-left: 20px;
  border-left: 2px solid #ff8585;
  margin-top: 450px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.contacts h2 {
  margin: 0;
  width: 100%;
  font-size: 16px;
  font-weight: 300;
}

.contacts div {
  font-size: 16px;
  display: flex;
  align-items: center;
  font-weight: bold;
}

.contacts__icon {
  margin-right: 10px;
}
</style>