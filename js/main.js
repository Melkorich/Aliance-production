const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');

window.addEventListener('scroll', () => {
    if (this.scrollY > 1) {
        navbar.classList.add('navbar--light');
        logo.href.baseVal = "images/sprite.svg#logo-dark";
    } else {
        navbar.classList.remove('navbar--light')
        logo.href.baseVal = "images/sprite.svg#logo-light";
    }
})