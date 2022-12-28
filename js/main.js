const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');


const lightModeOn = () => {
    navbar.classList.add('navbar--light');
    logo.href.baseVal = "images/sprite.svg#logo-dark";
}

const lightModeOff = () => {
    navbar.classList.remove('navbar--light')
    logo.href.baseVal = "images/sprite.svg#logo-light";
}

window.addEventListener('scroll', () => {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
})


const mobileMenuBtn = document.querySelector('.mobile-nav');
const mobileMenu = document.querySelector('.mobile-menu');

const openMenu = () => {
    mobileMenu.classList.add('is-open');
    document.body.style.overflow = 'hidden';
    mobileMenuBtn.classList.add('mobile-nav--active');

    lightModeOn();
}

const closeMenu = () => {
    mobileMenu.classList.remove('is-open');
    document.body.style.overflow = '';
    mobileMenuBtn.classList.remove('mobile-nav--active');

    lightModeOff();
}

mobileMenuBtn.addEventListener('click', (e) => {
    e.preventDefault();
    mobileMenu.classList.contains('is-open') ? closeMenu() : openMenu();
})