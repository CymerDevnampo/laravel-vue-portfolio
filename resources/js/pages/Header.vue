<template>
  <!--=============== HEADER ===============-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav__logo">Diane</a>

      <div class="nav__menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link">
              <i class="bx bx-home"></i>
            </a>
          </li>

          <li class="nav__item">
            <a href="#about" class="nav__link">
              <i class="bx bx-user"></i>
            </a>
          </li>

          <li class="nav__item">
            <a href="#skills" class="nav__link">
              <i class="bx bx-book"></i>
            </a>
          </li>

          <li class="nav__item">
            <a href="#work" class="nav__link">
              <i class="bx bx-briefcase-alt-2"></i>
            </a>
          </li>

          <li class="nav__item">
            <a href="#contact" class="nav__link">
              <i class="bx bx-message-square-dots"></i>
            </a>
          </li>
        </ul>
      </div>

      <!--=============== theme change button ===============-->
      <i
        class="bx bx-moon change-theme change-theme-button"
        id="theme-button"
        style="cursor: pointer"
      ></i>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>
