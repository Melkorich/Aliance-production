const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logoDark = document.querySelector('.logo-dark');


const lightModeOn = () => {
    navbar.classList.add('navbar--light');
    logoDark.style.display = "block";
    logoLight.style.display = "none";
}

const lightModeOff = () => {
    navbar.classList.remove('navbar--light')
    logoDark.style.display = "none";
    logoLight.style.display = "block";
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


const swiperHeader = new Swiper('.header-slider', {
    grabCursor: true,

    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1.5,
            loop: true,
        },
        // when window width is >= 480px
        560: {
            slidesPerView: 2,
        },
        // when window width is >= 640px
        800: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
            loop: false,
        }
    }
});

const workSchemeSlider = new Swiper('.work-cheme__slider', {
    grabCursor: true,
    loop: true,

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1.5,
        },
        // when window width is >= 480px
        560: {
            slidesPerView: 2,
        },
        // when window width is >= 640px
        800: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        }
    },

    navigation: {
        nextEl: '.work-cheme-button-next',
        prevEl: '.work-cheme-button-prev',
    },
})