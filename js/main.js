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
});


const swiperHeader = new Swiper('.header-slider', {

    navigation: {
        nextEl: '.header-slider-next',
        prevEl: '.header-slider-prev',
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
            grabCursor: true,
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

const benefitsSlider = new Swiper('.benefits__slider', {
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
            grabCursor: true,
        }
    },

    navigation: {
        nextEl: '.benefits-button-next',
        prevEl: '.benefits-button-prev',
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

const blogPageSlider = new Swiper('.blog-page__slider', {
    // slidesPerView: 2,
    // grid: {
    //     rows: 2,
    // },

    // spaceBetween: 30,
    pagination: {
        el: ".blog-page__pagination",
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },

});

//modal
let currentModal;
let modalDialog;


//alert modal
const alertModal = document.querySelector('#alert-modal');
const modalThanks = document.querySelector('.modal-thanks');
const modalTnanksBtn = document.querySelector('.modal-thanks__btn ');

const modalButtons = document.querySelectorAll('[data-toggle=modal]');

modalButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        currentModal = document.querySelector(button.dataset.target)
        currentModal.classList.toggle('is-open')
        modalDialog = currentModal.querySelector('.modal__dialog')

        currentModal.addEventListener('click', event => {
            if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove('is-open');
            }
        })
    })
})

document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && currentModal.classList.contains('is-open')) {
        currentModal.classList.remove('is-open');
    }
})

const closeModal = document.querySelector('.modal__close');


closeModal.addEventListener('click', () => {
    currentModal.classList.remove('is-open');
    modalTnanksBtn.addEventListener('click', () => {
        modalThanks.classList.remove('is-open');
    })
})

const forms = document.querySelectorAll('#form')

forms.forEach((form) => {
    const validation = new window.JustValidate(form, {
        errorFieldCssClass: 'is-invalid',
    });
    validation
        .addField('[name=username]', [
            {
                rule: 'required',
                errorMessage: 'Укажите имя',
            },
            {
                rule: 'maxLength',
                value: 50,
                errorMessage: 'Максимальное количество символов 50'
            },
        ])
        .addField('[name=userphone]', [
            {
                rule: 'required',
                errorMessage: 'Укажите телефон',
            },
        ])
        .onSuccess((event) => {
            const thisForm = event.target;
            const formData = new FormData(thisForm);
            const ajaxSend = (formData) => {
                fetch(thisForm.getAttribute('action'), {
                    method: thisForm.getAttribute('method'),
                    body: formData,
                }).then((response) => {
                    if (response.ok) {
                        thisForm.reset();
                        currentModal.classList.remove('is-open')
                        // modalThanks.classList.add('is-open');
                        alertModal.classList.add('is-open');
                        currentModal = alertModal;
                        modalDialog = currentModal.querySelector('.modal__dialog')

                        currentModal.addEventListener('click', event => {
                            if (!event.composedPath().includes(modalDialog)) {
                                currentModal.classList.remove('is-open');
                            }
                        })
                    } else {
                        alert('response.statusText')
                    }
                });
            };
            ajaxSend(formData);
        });
});




/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
    /* если вводят семерку, добавляем ей скобку */
    if (str === "7") {
        return "7 (";
    }
    /* если вводят восьмерку, ставим вместо нее +7 ( */
    if (str === "8") {
        return "+7 (";
    }
    /* если пишут девятку, заменяем на +7 (9  */
    if (str === "9") {
        return "7 (9";
    }
    /* в других случаях просто 7 (  */
    return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
    /* Проверяем, что это поле имеет класс phone-mask */
    if (e.target.classList.contains("phone-mask")) {
        /* поле с телефоном помещаем в переменную input */
        const input = e.target;
        /* вставляем плюс в начале номера */
        const value = input.value.replace(/\D+/g, "");
        /* длинна номера 11 символов */
        const numberLength = 11;

        /* Создаем переменную, куда будем записывать номер */
        let result;
        /* Если пользователь ввел 8... */
        if (input.value.includes("+8") || input.value[0] === "8") {
            /* Стираем восьмерку */
            result = "";
        } else {
            /* Оставляем плюсик в поле */
            result = "+";
        }

        /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
        for (let i = 0; i < value.length && i < numberLength; i++) {
            switch (i) {
                case 0:
                    /* в самом начале ставим префикс +7 ( */
                    result += prefixNumber(value[i]);
                    continue;
                case 4:
                    /* добавляем после "+7 (" круглую скобку ")" */
                    result += ") ";
                    break;
                case 7:
                    /* дефис после 7 символа */
                    result += "-";
                    break;
                case 9:
                    /* еще дефис  */
                    result += "-";
                    break;
                default:
                    break;
            }
            /* на каждом шаге цикла добавляем новую цифру к номеру */
            result += value[i];
        }
        /* итог: номер в формате +7 (999) 123-45-67 */
        input.value = result;
    }
});
