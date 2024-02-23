// Selecting elements
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let searchIcon = document.querySelector('#search-icon');
let searchForm = document.querySelector('#search-form');
let closeIcon = document.querySelector('#close');

// Toggle menu and navbar
menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

// Remove menu and navbar on scroll
window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

// Toggle search form
searchIcon.onclick = () => {
  searchForm.classList.toggle('active');
};

// Close search form
closeIcon.onclick = () => {
  searchForm.classList.remove('active');
};

// Initialize Swiper slider
var swiper = new Swiper(".home-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
});
