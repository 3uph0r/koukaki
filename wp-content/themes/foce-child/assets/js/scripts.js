// Animation des titres au scroll
document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".displayTitle");

  const onScroll = () => {
    titles.forEach((title) => {
      const rect = title.getBoundingClientRect();
      const isVisible = rect.top <= window.innerHeight && rect.bottom >= 0;

      if (isVisible) {
        title.classList.add("is-visible");
      }
    });
  };

  window.addEventListener("scroll", onScroll);
  onScroll(); // Vérifie une première fois au chargement.
});

// Déplace les nuages en fonction du défilement
function onScroll() {
  const scrollY = window.scrollY;
  const maxScroll = 300;
  const initialOffset = 50;
  const bigCloudMove = -Math.min(scrollY * 0.1, maxScroll) + initialOffset;
  const littleCloudMove = -Math.min(scrollY * 0.1, maxScroll) + initialOffset;
  document.querySelector(
    ".big-cloud"
  ).style.transform = `translateX(${bigCloudMove}px)`;
  document.querySelector(
    ".little-cloud"
  ).style.transform = `translateX(${littleCloudMove}px)`;
}

window.addEventListener("scroll", onScroll);
