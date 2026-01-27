//Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
  anchor.addEventListener('click', function(e){
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

//Navbar scroll effect
window. addEventListener('scroll', () => {
  const navbar =document.querySelector('.navbar');
  window.scrollY > 50 ? navbar.style.backgroundColor = 'rgba(10, 10, 10, .98)' : navbar.style.backgroundColor = 'rgba(10, 10, 10, .95)';
});

//Mobile menu toggle
const navbarToggle = document.querySelector('.navbar-toggle');
const navbarMenu = document.querySelector('.nav-links');

navbarToggle.addEventListener('click', ()=>{
  navbarToggle.classList.toggle('active');
  navbarMenu.classList.toggle('active');
});