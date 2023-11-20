const burgerMenu = document.querySelector('.burger-menu');
const navLinks = document.querySelector('.nav-links');
const content = document.querySelector('.content');

burgerMenu.addEventListener('click', () => {
  document.body.classList.toggle('show-nav');
});
