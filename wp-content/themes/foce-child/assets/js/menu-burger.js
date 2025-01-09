document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector('.menu-toggle');
  const headerNav = document.querySelector('.header-nav');
  const menuLinks = document.querySelectorAll('.menu-link');

  // Ajoute un écouteur d'événement au clic
  menuToggle.addEventListener('click', () => {
      // Ajoute ou enlève la classe 'open' pour ouvrir/fermer le menu
      headerNav.classList.toggle('open');
      menuToggle.classList.toggle('open'); // Animation du burger
  });

    // Ferme le menu lorsque l'un des liens est cliqué
    menuLinks.forEach(link => {
      link.addEventListener('click', () => {
        headerNav.classList.remove('open');
        menuToggle.classList.remove('open');
      });
    });
});


