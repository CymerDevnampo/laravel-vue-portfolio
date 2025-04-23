<template>
  <div id="app">
    <Links />
    <Header />
    <main class="main">
      <slot />
    </main>
    <Footer />
    <Scripts />
  </div>
</template>

<script>
import Links from "../includes/Links.vue";
import Scripts from "../includes/Scripts.vue";
import Header from "../../pages/Header.vue";
import Footer from "../Footer.vue";

export default {
  name: "App",
  components: {
    Links,
    Scripts,
    Header,
    Footer,
  },
};
</script>
