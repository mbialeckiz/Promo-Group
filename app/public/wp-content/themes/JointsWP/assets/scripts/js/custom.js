const hamburger = document.querySelector('.hamburger--js');

hamburger.addEventListener('click', () => {
  const nav = document.querySelector('.main-navigation__mobile--js');
  nav.classList.toggle('main-navigation__mobile--open');
});