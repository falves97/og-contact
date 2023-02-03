<template>

  <input
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
  />
</template>

<script setup>

defineProps(['modelValue'])
defineEmits(['update:modelValue'])
</script>

<style scoped>
input {
  width: 100%;
  border: none;
  border-bottom: 1px solid #ddd;
}

input:focus {
  outline: none;
}

</style>