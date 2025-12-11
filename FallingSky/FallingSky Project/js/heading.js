const navbarMenu = document.querySelector('.navbar-menu');
const navbarToggle = document.querySelector('.navbar-toggle');

navbarToggle.addEventListener('click', ()=>{
  navbarToggle.classList.toggle('active');
  navbarMenu.classList.toggle('active');
});