const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logoDark = document.querySelector('.logo-dark');

const isFront = document.body.classList.contains('front-page');

const changeNavHeight = (height) => {
    navbar.style.height = height;
}

const lightModeOn = () => {
    navbar.classList.add('navbar--light');
}

const lightModeOff = () => {
    navbar.classList.remove('navbar--light')
}

window.addEventListener('scroll', () => {
    this.scrollY > 1 ? changeNavHeight('4.625rem') : changeNavHeight('5.875rem');
    if (isFront) {
        this.scrollY > 1 ? lightModeOn() : lightModeOff();
    }
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
            slidesPerView: 1.1,
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


const blogSlider = new Swiper('.blog-slider', {
    grabCursor: true,
    loop: true,

    slidesPerView: 1,
    spaceBetween: 30,

    breakpoints: {
        840: {
            slidesPerView: 2,
        },
    },

    navigation: {
        nextEl: '.blog-button-next',
        prevEl: '.blog-button-prev',
    },

});


const modal = document.querySelector('.modal');
const modalDialog = document.querySelector('.modal__dialog');
const modalToggle = document.querySelectorAll('[data-toggle=modal]')
const closeModal = document.querySelector('.modal__close');

document.addEventListener('click', (e) => {
    if (
        e.target.dataset.toggle == 'modal' ||
        e.target.parentNode.dataset.toggle == 'modal' ||
        !e.composedPath().includes(modalDialog) && modal.classList.contains('is-open')
    ) {
        e.preventDefault();
        modal.classList.toggle('is-open');
    }
})


// modalToggle.forEach((el) => {
//     el.addEventListener('click', (e) => {
//         modal.classList.add('is-open');
//     })
// })

closeModal.addEventListener('click', () => {
    modal.classList.remove('is-open');
})

document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && modal.classList.contains('is-open')) {
        modal.classList.remove('is-open');
    }
})


