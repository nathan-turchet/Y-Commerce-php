const btn = document.querySelector('.burger');
const dropdown = document.querySelector(".dropdown-responsive-content");
const bar_1 = document.querySelector(".bar-1");
const bar_2 = document.querySelector(".bar-2");

btn.addEventListener('click', () =>{
  dropdown.classList.toggle('dropdown-responsive-content-visible');
});

btn.addEventListener('click', () =>{
  bar_1.classList.toggle('clicked-bar-1');
  bar_2.classList.toggle('clicked-bar-2');
});


const btn_dropdown_plus = document.querySelector(".btn-dropdown-responsive-dropdown-plus");
const content_plus = document.querySelector(".dropdown-responsive-content-plus");

btn_dropdown_plus.addEventListener('click', () => {
  content_plus.classList.toggle('content_plus_open');
});


const btn_dropdown_login = document.querySelector(".btn-dropdown-responsive-dropdown-login");
const content_login = document.querySelector(".dropdown-login-content-responsive");

btn_dropdown_login.addEventListener('click', () => {
  content_login.classList.toggle('content_login_open');
});
