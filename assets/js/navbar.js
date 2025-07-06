// Hamburger menu toggle for mobile
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.navbar ul');

if (hamburger && navMenu) {
  hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('open');
    navMenu.classList.toggle('open');
    document.body.classList.toggle('nav-open');
  });
  // Optional: close menu on link click (mobile UX)
  navMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('open');
      navMenu.classList.remove('open');
      document.body.classList.remove('nav-open');
    });
  });
}
