<template>
    <!--=============== HOME ===============-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <div class="home__data">
                <span class="home__greeting">Hello, I'm</span>
                <h1 class="home__name">Diane Fariola</h1>
                <h3 class="home__education">Frontend Developer</h3>

                <div class="home__button">
                    <a
                        download=""
                        href="/cymer/assets/pdf/hailee-Cv.pdf"
                        class="button button--ghost"
                    >
                        Download CV
                    </a>

                    <a href="#about" class="button">About</a>
                </div>
            </div>

            <div class="home__handle">
                <!-- <img src="/cymer/assets/img/perfil.png" alt="" class="home__img" /> -->
                <img src="/cymer/assets/img/diane/diane.png" alt="" class="home__img" />
            </div>

            <div class="home__social">
                <a href="#" target="_blank" class="home__social-link">
                    <i class="bx bxl-linkedin"></i>
                </a>
                <a href="#" target="_blank" class="home__social-link">
                    <i class="bx bxl-github"></i>
                </a>
                <a href="#" target="_blank" class="home__social-link">
                    <i class="bx bxl-dribbble"></i>
                </a>
            </div>

            <a href="#about" class="home__scroll">
                <i class="bx bx-mouse home__scroll-icon"></i>
                <span class="home__scroll-name">Scroll Down</span>
            </a>
        </div>
    </section>
</template>

<script>
export default {
    name: "Home",
};
</script>
