<template>
  <App>
    <Home />
    <About />
    <Skills />
    <Services />
    <Work />
    <Testimonials />
    <Contact />
  </App>
</template>

<script>
import App from "./components/layouts/App.vue";
import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Skills from "./pages/Skills.vue";
import Services from "./pages/Services.vue";
import Work from "./pages/Work.vue";
import Testimonials from "./pages/Testimonials.vue";
import Contact from "./pages/Contact.vue";

export default {
  components: {
    App,
    Home,
    About,
    Skills,
    Services,
    Work,
    Testimonials,
    Contact,
  },
};
</script>
