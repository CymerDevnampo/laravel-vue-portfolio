<template>
  <div id="app">
    <Links />

    <Header />
    <main class="main">
      <slot />

      <!-- <Home />
      <About />
      <Skills />
      <Services />
      <Work />
      <Testimonials />
      <Contact /> -->

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

// import Home from "../../pages/Home.vue";
// import About from "../../pages/About.vue";
// import Skills from "../../pages/Skills.vue";
// import Services from "../../pages/Services.vue";
// import Work from "../../pages/Work.vue";
// import Testimonials from "../../pages/Testimonials.vue";
// import Contact from "../../pages/Contact.vue";

export default {
  name: "App",
  components: {
    Links,
    Scripts,
    Header,
    Footer,

    // Home,
    // About,
    // Skills,
    // Services,
    // Work,
    // Testimonials,
    // Contact,
  },
};
</script>
