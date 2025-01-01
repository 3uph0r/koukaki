document.addEventListener("DOMContentLoaded", function () {
  // Initialisation de Swiper
  const swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: false,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    spaceBetween: 40, // Espace entre les slides
    pagination: false,
    navigation: false,
  });

  // L'autoplay démarrera dès le chargement de la page
  swiper.autoplay.start();
});
