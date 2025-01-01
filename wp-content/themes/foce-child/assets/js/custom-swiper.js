document.addEventListener('DOMContentLoaded', function () {
  // Initialisation de Swiper
  const swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
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
          slideShadows: true
      },
      spaceBetween: 40,  // Espace entre les slides
      pagination: false, // Pas de pagination
      navigation: false, // Pas de navigation
      
  });

  // Déclencher l'autoplay au premier scroll
  window.addEventListener('scroll', function() {
      // Lorsque l'utilisateur effectue un scroll, démarre l'autoplay
      swiper.autoplay.start();
      window.removeEventListener('scroll', arguments.callee);
  });
});
