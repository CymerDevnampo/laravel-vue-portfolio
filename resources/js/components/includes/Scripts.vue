<template>
    <div></div>
    <!-- Empty or custom content -->
</template>

<script>
export default {
    name: "Scripts",
    mounted() {
        const scripts = [
            "https://unpkg.com/scrollreveal/dist/scrollreveal.min.js",
            "/cymer/assets/js/swiper-bundle.min.js",
            "/cymer/assets/js/mixitup.min.js",
            "/cymer/assets/js/main.js",
            "/cymer/assets/js/scrollreveal.min",
        ];

        scripts.forEach((src) => {
            const s = document.createElement("script");
            s.src = src;
            s.async = false;
            document.body.appendChild(s);
        });
    },
};
</script>
