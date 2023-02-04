<template>
<nav>
  <ul>
    <li><a href="#"><Instagram /></a></li>
    <li><a href="#"><YouTube /></a></li>
    <li><a href="#"><Twiiter /></a></li>
    <li><a href="#"><Faceebook /></a></li>
    <li><a href="#"><SnapChat /></a></li>
    <li><a href="#"><TikTok /></a></li>
  </ul>
</nav>
</template>

<script>
import Instagram from "@/components/icons/Instagram.vue";
import YouTube from "@/components/icons/YouTube.vue";
import Twiiter from "@/components/icons/Twiiter.vue";
import Faceebook from "@/components/icons/Faceebook.vue";
import SnapChat from "@/components/icons/SnapChat.vue";
import TikTok from "@/components/icons/TikTok.vue";

export default {
  name: "SocialMenu",
  components: {TikTok, SnapChat, Faceebook, Twiiter, YouTube, Instagram}
}
</script>

<style scoped>
nav ul {
  display: flex;
  list-style: none;
  gap: 5px;
}

.bg-icon-pink ul li a svg {
  fill: #ff8585;
}

.bg-icon-grey ul li a svg {
  fill: #bdbdbd;
}
</style>