document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".displayTitle");
  const bigCloud = document.querySelector(".big-cloud");
  const littleCloud = document.querySelector(".little-cloud");
  const logo = document.querySelector(".banner-logo");
  let lastScroll = 0;

  const onScroll = () => {
    window.requestAnimationFrame(() => {
      const currentScroll = window.scrollY;
      if (lastScroll !== currentScroll) {
        lastScroll = currentScroll;

        // Animation des titres
        titles.forEach((title) => {
          const rect = title.getBoundingClientRect();
          const isVisible = rect.top <= window.innerHeight && rect.bottom >= 0;
          if (isVisible) {
            title.classList.add("is-visible");
          } else {
            title.classList.remove("is-visible");
          }
        });

        // Déplacement des nuages
        const maxScroll = 300;
        const initialOffset = 50;
        const cloudMove = -Math.min(currentScroll * 0.1, maxScroll) + initialOffset;
        bigCloud.style.transform = `translateX(${cloudMove}px)`;
        littleCloud.style.transform = `translateX(${cloudMove}px)`;

        // Effet de parallaxe du logo
        logo.style.transform = `translateY(${currentScroll * 0.5}px)`; // Utilise currentScroll pour le calcul
      }
    });
  };

  window.addEventListener("scroll", onScroll);
  onScroll(); // Initialise l'état au chargement.
});