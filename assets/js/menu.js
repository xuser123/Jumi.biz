// Navigationsmenü
const menuToggle = document.querySelector('.menu-toggle');
const siteNavigation = document.querySelector('.primary-navigation');

// bei Klick auf Menü-Symbol
menuToggle.addEventListener('click', () => {
  const isOpened = menuToggle.getAttribute('aria-expanded') === "true";
  isOpened ? closeMenu() : openMenu();
});

// Menü öffnen
function openMenu() {
  menuToggle.setAttribute('aria-expanded', "true");
  siteNavigation.setAttribute('data-state', "opened");
}

// Menü schliesen
function closeMenu() {
  menuToggle.setAttribute('aria-expanded', "false");
  siteNavigation.setAttribute('data-state', "closing");

  siteNavigation.addEventListener('animationend', () => {
    siteNavigation.setAttribute('data-state', "closed");
  }, {once: true})
}
