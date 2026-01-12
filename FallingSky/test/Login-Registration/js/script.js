const wrapper = document.querySelector('.wrapper');
const login_link = document.querySelector('.loginLink');
const register_link = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btn-login');
const iconClose = document.querySelector('.icon-close');

function registerLink(){
  wrapper.classList.add('active');
}

function loginLink(){
  wrapper.classList.remove('active');
}

function buttonPopup(){
  wrapper.classList.add('active-popup');
}

function buttonClosePopup(){
  wrapper.classList.remove('active-popup');
}