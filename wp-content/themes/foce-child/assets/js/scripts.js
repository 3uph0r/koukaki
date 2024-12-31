document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".displayTitle");
  const bigCloud = document.querySelector(".big-cloud");
  const littleCloud = document.querySelector(".little-cloud");
  const logo= document.querySelector(".banner__logo");

  const onScroll = () => {
    // Déplacement des titres au scroll
    titles.forEach((title) => {
      const rect = title.getBoundingClientRect();
      const isVisible = rect.top <= window.innerHeight && rect.bottom >= 0;

      if (isVisible) {
        title.classList.add("is-visible");
      } else {
        title.classList.remove("is-visible"); // Retire la classe si le titre n'est plus visible
      }
    });

    // Déplacement des nuages
    const scrollY = window.scrollY;
    const maxScroll = 300;
    const initialOffset = 50;
    const bigCloudMove = -Math.min(scrollY * 0.1, maxScroll) + initialOffset;
    const littleCloudMove = -Math.min(scrollY * 0.1, maxScroll) + initialOffset;

    bigCloud.style.transform = `translateX(${bigCloudMove}px)`;
    littleCloud.style.transform = `translateX(${littleCloudMove}px)`;

    // Ajustement pour l'effet de parallaxe du logo
    if (logo) {
      logo.style.transform = 'translateY(' + scrollY * 0.3 + 'px)';
    }
  };
  

  window.addEventListener("scroll", onScroll);
  onScroll(); // Vérifie une première fois au chargement.
});
