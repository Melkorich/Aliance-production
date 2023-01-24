<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aliance Production</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/normilize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="front-page">
    <div class="mobile-menu">
        <ul class="mobile-menu__nav">
            <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="">О компании</a>
            </li>
            <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="">Контрактное производство</a>
                <ul class="mobile-submenu__list">
                    <li class="mobile-submenu__item">
                        <a class="mobile-submenu__link" href="#">
                            Автомобильная химия
                        </a>
                    </li>
                    <li class="mobile-submenu__item">
                        <a class="mobile-submenu__link" href="#">
                            Бытовая химия
                        </a>
                    </li>
                    <li class="mobile-submenu__item">
                        <a class="mobile-submenu__link" href="#">
                            Дезинфицирующие средства
                        </a>
                    </li>
                    <li class="mobile-submenu__item">
                        <a class="mobile-submenu__link" href="#">
                            Пищевые аэрозоли
                        </a>
                    </li>
                    <li class="mobile-submenu__item">
                        <a class="mobile-submenu__link" href="#">
                            Косметическая продукция
                        </a>
                    </li>
                    <li class="mobile-submenu__item">
                        <a class="mobile-submenu__link" href="#">
                            Краски аэрозольные
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="">Собственные торговые марки</a>
                <ul class="mobile-submenu__list">
                    <li class="mobile-submenu__item">
                        <a class="mobile-submenu__link" href="#">
                            Автохимия AG-Tech
                        </a>
                    </li>
                    <li class="mobile-submenu__item">
                        <a class="mobile-submenu__link" href="#">
                            Автохимия AP
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="">Новости</a>
            </li>
            <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="">Контакты</a>
            </li>
        </ul>
        <a class="mobile-menu__phone" href="tel:+74996861014">+7 (499) 686-10-14</a>

        <div class="mobile-menu__info">
            <address class="mobile-menu__info-text">
                <svg class="map-icon" width="12" height="17">
                    <use href="images/sprite.svg#map"></use>
                </svg>
                г. Мосвка, Холодильный пер. 4к1с8
            </address>
            <div class="mobile-menu__info-text">
                <svg class="mail-icon" width="16" height="12">
                    <use href="images/sprite.svg#mail"></use>
                </svg>
                a.dragunov@tdaliance.ru
            </div>
        </div>
        <ul class="mobile-menu__socials">
            <li class="mobile-menu__social-item">
                <a class="mobile-menu__social-link" href="#">
                    <svg class="mail-icon" width="16" height="12">
                        <use href="images/sprite.svg#mail"></use>
                    </svg>
                </a>
            </li>
            <li class="mobile-menu__social-item">
                <a class="mobile-menu__social-link" href="#">
                    <svg class="mail-icon" width="16" height="12">
                        <use href="images/sprite.svg#mail"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <nav class="navbar">
        <a class="mobile-nav" href="#">
            <div class="mobile-nav__line"></div>
            <div class="mobile-nav__line"></div>
            <div class="mobile-nav__line"></div>
        </a>
        <a class="logo" href="./">
            <svg class="logo-svg logo-light">
                <use href="images/sprite.svg#logo-light"></use>
            </svg>
            <svg class="logo-svg logo-dark">
                <use href="images/sprite.svg#logo-dark"></use>
            </svg>
        </a>
        <ul class="header-nav">
            <li class="header-nav__item">
                <a class="header-nav__link" href="about.php">О компании</a>
            </li>
            <li class="header-nav__item">
                <a class="header-nav__link" href="">Контрактное производство</a>
            </li>
            <li class="header-nav__item">
                <a class="header-nav__link" href="">Собственные торговые марки</a>
            </li>
            <li class="header-nav__item">
                <a class="header-nav__link" href="">Новости</a>
            </li>
            <li class="header-nav__item">
                <a class="header-nav__link" href="">Контакты</a>
            </li>
        </ul>
        <div class="header__phone">
            <svg class="phone-icon" width="24" height="24">
                <use href="images/sprite.svg#phone"></use>
            </svg>
            <a class="header-phone__link" href="tel:+74996861014">+7 (499) 686-10-14</a>
        </div>
        <button class="navbar__btn button" type="button" data-toggle="modal">
            <svg class="navbar__btn-icon" width="24" height="24">
                <use href="images/sprite.svg#phone"></use>
            </svg>
            <span class="navbar__btn-text">Получить консультацию</span>
        </button>
    </nav>

    <header class="header header__image">
        <div class="container">
            <div class="header__content">
                <div class="separator"></div>
                <h1 class="header__title">
                    <?php echo "Главная страница"; ?>
                </h1>
                <p class="header__text">
                    Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого
                    факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих
                    паттернов поведения.
                </p>
                <button class="header__btn button" data-toggle="modal">
                    Подробнее о компании
                </button>
            </div>

            <div class="swiper header-slider">
                <ul class="swiper-wrapper header-features">
                    <li class="swiper-slide header-features__item">
                        <img class="header-features__img" src="images/features/1.png" alt="">
                        <p class="header-features__text">
                            Непрерывная работа c 2017 года
                        </p>
                    </li>
                    <li class="swiper-slide header-features__item">
                        <img class="header-features__img" src="images/features/2.png" alt="">
                        <p class="header-features__text">
                            Вся продукция сертифицирована
                        </p>
                    </li>
                    <li class="swiper-slide header-features__item">
                        <img class="header-features__img" src="images/features/3.png" alt="">
                        <p class="header-features__text">
                            Контроль качества на всех этапах
                        </p>
                    </li>
                    <li class="swiper-slide header-features__item">
                        <img class="header-features__img" src="images/features/4.png" alt="">
                        <p class="header-features__text">
                            Возможны поставки по всей России
                        </p>
                    </li>
                    <li class="swiper-slide header-features__item">
                        <img class="header-features__img" src="images/features/5.png" alt="">
                        <p class="header-features__text">
                            Оперативное производство
                        </p>
                    </li>
                </ul>

                <div class="slider-buttons">
                    <div class="slider-button-prev">
                        <svg width="36" height="24">
                            <use href='images/sprite.svg#arrow-prev'></use>
                        </svg>
                    </div>
                    <div class="slider-button-next">
                        <svg width="36" height="24">
                            <use href='images/sprite.svg#arrow-next'></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main">

        <section class="work-cheme">
            <div class="container">
                <div class="separator"></div>
                <h2 class="work-cheme__title section-title">
                    схема работы
                </h2>

                <div class="swiper work-cheme__slider">
                    <ol class="swiper-wrapper work-cheme__list">
                        <li class="swiper-slide work-cheme__item">
                            <span class="work-cheme__num">01</span>
                            <h3 class="work-cheme__suntitle">
                                Знакомство
                            </h3>
                            <p class="work-cheme__text">
                                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
                                воздействия.
                            </p>
                            <a class="work-cheme__link link" href="#">Оставить заявку</a>
                        </li>
                        <li class="swiper-slide work-cheme__item">
                            <span class="work-cheme__num">02</span>
                            <h3 class="work-cheme__suntitle">
                                Заключение договора
                            </h3>
                            <p class="work-cheme__text">
                                Лишь интерактивные прототипы призваны к ответу.
                            </p>
                        </li>
                        <li class="swiper-slide work-cheme__item">
                            <span class="work-cheme__num">03</span>
                            <h3 class="work-cheme__suntitle">
                                Производство
                            </h3>
                            <p class="work-cheme__text">
                                А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
                                разнесены на независимые элементы.
                            </p>
                        </li>
                        <li class="swiper-slide work-cheme__item">
                            <span class="work-cheme__num">04</span>
                            <h3 class="work-cheme__suntitle">
                                Доставка
                            </h3>
                            <p class="work-cheme__text">
                                В частности, экономическая повестка сегодняшнего дня говорит о возможностях
                                приоритизации
                                разума над эмоциями.
                            </p>
                        </li>
                    </ol>

                    <div class="work-cheme__buttons primary-btn-wrapper">
                        <div class="work-cheme-button-prev primary-btn-prev">
                            <svg width="36" height="24">
                                <use href="images/sprite.svg#arrow-prev"></use>
                            </svg>
                        </div>
                        <div class="work-cheme-button-next primary-btn-next">
                            <svg width="36" height="24">
                                <use href="images/sprite.svg#arrow-next"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="production">
            <div class="container">
                <div class="separator"></div>
                <h2 class="production__title section-title">
                    Контрактное производство
                </h2>

                <div class="cards">
                    <a class="card" href="#">
                        <div class="card__content">
                            <h3 class="card__title">Автомобильная химия</h3>
                            <p class="card__text">
                                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
                                воздействия.
                            </p>
                        </div>
                        <img class="card__image" src="./images/production/1.png" alt="">
                    </a>
                    <a class="card" href="#">
                        <div class="card__content">
                            <h3 class="card__title">Бытовая химия</h3>
                            <p class="card__text">
                                А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
                                разнесены на независимые элементы.
                            </p>
                        </div>
                        <img class="card__image" src="./images/production/2.png" alt="">
                    </a>
                    <a class="card" href="#">
                        <div class="card__content">
                            <h3 class="card__title">Дезинфицирующие средства</h3>
                            <p class="card__text">
                                Лишь интерактивные прототипы призваны к ответу.
                            </p>
                        </div>
                        <img class="card__image" src="./images/production/3.png" alt="">
                    </a>
                    <a class="card" href="#">
                        <div class="card__content">
                            <h3 class="card__title">Пищевые аэрозоли</h3>
                            <p class="card__text">
                                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
                                воздействия.
                            </p>
                        </div>
                        <img class="card__image" src="./images/production/3.png" alt="">
                    </a>
                    <a class="card" href="#">
                        <div class="card__content">
                            <h3 class="card__title">Косметическая продукция</h3>
                            <p class="card__text">
                                Лишь интерактивные прототипы призваны к ответу.
                            </p>
                        </div>
                        <img class="card__image" src="./images/production/1.png" alt="">
                    </a>
                    <a class="card" href="#">
                        <div class="card__content">
                            <h3 class="card__title">Краски аэрозольные</h3>
                            <p class="card__text">
                                А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
                                разнесены на независимые элементы.
                            </p>
                        </div>
                        <img class="card__image" src="./images/production/2.png" alt="">
                    </a>
                </div>
            </div>
        </section>

        <section class="trade-mark">
            <div class="container">
                <div class="separator"></div>
                <h2 class="trade-mark__title section-title">
                    собственные торговые марки
                </h2>

                <div class="trade-mark__cards">
                    <div class="trade-mark__card">
                        <svg class="trade-mark__logo">
                            <use href="images/sprite.svg#agtech"></use>
                        </svg>
                        <h3 class="trade-mark__card-title">Автохимия AG-Tech</h3>
                        <p class="trade-mark__card-text">
                            Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт
                            предпосылки для поставленных обществом задач.
                        </p>
                    </div>

                    <div class="trade-mark__card">
                        <svg class="trade-mark__logo">
                            <use href="images/sprite.svg#ap"></use>
                        </svg>
                        <h3 class="trade-mark__card-title">Автохимия AP</h3>
                        <p class="trade-mark__card-text">
                            Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт
                            предпосылки для поставленных обществом задач.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="founder">
            <div class="founder__inner">
                <img class="founder__image" src="./images/founder/1.jpg" alt="">
                <div class="container">
                    <div class="founder-content__wrapper">
                        <div class="founder-content">
                            <div class="separator"></div>
                            <h2 class="founder__title section-title">
                                Отношение к делу <br> и к клиентам
                            </h2>
                            <div class="founder__text">
                                <p>
                                    Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
                                    показывает,
                                    что укрепление и развитие внутренней структуры говорит о возможностях
                                    соответствующих
                                    условий
                                    активизации. Внезапно, независимые государства, которые представляют собой яркий
                                    пример
                                    континентально-европейского типа политической культуры, будут подвергнуты целой
                                    серии
                                    независимых исследований. С учётом сложившейся международной обстановки,
                                    синтетическое
                                    тестирование выявляет срочную потребность системы массового участия.
                                </p>
                                <p>
                                    А ещё действия представителей оппозиции, превозмогая сложившуюся непростую
                                    экономическую
                                    ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать,
                                    что
                                    выбранный
                                    нами инновационный путь в значительной степени обусловливает важность дальнейших
                                    направлений
                                    развития.
                                </p>
                            </div>
                            <a class="link" href="#">Подробнее о компании</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="clients">
            <div class="container">
                <div class="separator"></div>
                <div class="clients__wrapper">
                    <div class="clients__content">
                        <h2 class="clients__title section-title">
                            Производим аэрозольную продукцию для разных сфер
                        </h2>
                        <div class="clients__list">
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-1"></use>
                                </svg>
                                Химические производства
                            </li>
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-2"></use>
                                </svg>
                                Автомойки
                            </li>
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-3"></use>
                                </svg>
                                Пищевая продукция
                            </li>
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-4"></use>
                                </svg>
                                Лаки и краски
                            </li>
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-5"></use>
                                </svg>
                                Косметические средства
                            </li>
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-1"></use>
                                </svg>
                                Автомобильная косметика
                            </li>
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-1"></use>
                                </svg>
                                Косметика по уходу за одеждой
                            </li>
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-1"></use>
                                </svg>
                                Косметика по уходу за обувью
                            </li>
                            <li class="clients__item">
                                <svg class="clients__logo" width="30" height="30">
                                    <use href="images/sprite.svg#clients-1"></use>
                                </svg>
                                Строительные материалы
                            </li>
                            <li class="clients__item">
                                <svg class="clients__item-icon" width="30" height="30">
                                    <use href="images/sprite.svg#clients-more"></use>
                                </svg>
                                И многих других
                            </li>
                        </div>
                    </div>
                    <div class="clients-logo__list">
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                        <a class="clients-logo__item" href="#">
                            <img class="clients-logo__image" src="./images/clients/client.png" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section class="blog">
            <div class="container">
                <div class="separator"></div>
                <h2 class="blog__title section-title">
                    Блог экспертов в области производства
                </h2>

                <div class="swiper blog-slider">
                    <div class="swiper-wrapper">
                        <a class="swiper-slide blog-card" href="#">
                            <img class="blog-card__image" src="./images/blog/1.jpg" alt="">
                            <h4 class="blog-card__title">
                                Современная методология разработки одухотворила всех причастных
                            </h4>
                            <p class="blog-card__text">
                                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
                                ситуацию, в равной степени предоставлены...
                            </p>
                        </a>
                        <a class="swiper-slide blog-card" href="#">
                            <img class="blog-card__image" src="./images/blog/2.jpg" alt="">
                            <h4 class="blog-card__title">
                                Сложно сказать, почему жизнь прекрасна
                            </h4>
                            <p class="blog-card__text">
                                Сложно сказать, почему элементы политического процесса функционально разнесены на
                                независимые элементы. Безусловно, высокотехнологичная...
                            </p>
                        </a>
                        <a class="swiper-slide blog-card" href="#">
                            <img class="blog-card__image" src="./images/blog/1.jpg" alt="">
                            <h4 class="blog-card__title">
                                Современная методология разработки одухотворила всех причастных
                            </h4>
                            <p class="blog-card__text">
                                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
                                ситуацию, в равной степени предоставлены...
                            </p>
                        </a>
                    </div>

                    <div class="blog-slider__footer">
                        <a class="link" href="#">
                            Весь блог
                        </a>
                        <div class="blog__buttons primary-btn-wrapper">
                            <div class="blog-button-prev primary-btn-prev">
                                <svg width="36" height="24">
                                    <use href="images/sprite.svg#arrow-prev"></use>
                                </svg>
                            </div>
                            <div class="blog-button-next primary-btn-next">
                                <svg width="36" height="24">
                                    <use href="images/sprite.svg#arrow-next"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="cta">
            <div class="cta__bg cta__inner">
                <img class="cta__image" src="./images/cta/bg.png" alt="call to action">
                <div class="cta__form-wrapper container">

                    <form id="form" class="cta-form" action="handler.php" method="POST">
                        <h2 class="section-title cta-form__title">
                            Хотите сотрудничать?
                        </h2>
                        <p class="cta-form__text">
                            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие
                            вопросы и поможем даже в самых сложных случаях!
                        </p>
                        <div class="cta-form__input-wrapper">
                            <div class="input-group">
                                <input 
                                id="user-name" 
                                class="cta-input" 
                                type="text" 
                                name="username" 
                                placeholder=" "
                                required 
                                maxlength="50">
                                <label class="cta-label" for="user-name">Имя</label>
                            </div>
                            <div class="input-group">
                                <input 
                                id="user-tel" 
                                class="cta-input phone-mask" 
                                type="tel" 
                                name="userphone" 
                                placeholder=" "
                                required 
                                maxlength="20">
                                <label class="cta-label" for="user-tel">Номер телефона</label>
                            </div>
                        </div>

                        <div class="cta-form__footer">
                            <button class="cta__btn button" type="submit">Отправить заявку</button>
                            <div class="cta-form__alert">
                                <svg class="cta-icon" width="14" height="14">
                                    <use xlink:href="images/sprite.svg#alert"></use>
                                </svg>
                                <p class="cta__text">
                                    Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                                    конфиденциальность информации!
                                </p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>

    </main>

    <?php include_once('footer.php');?>

    <div class="modal">
        <div class="modal__dialog">
            <h2 class="modal__title">
                Есть вопросы?
            </h2>
            <a class="modal__close" href="#">
                <svg class="close-icon" width="24" height="24">
                    <use href="images/sprite.svg#close"></use>
                </svg>
            </a>
            <p class="modal__text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
                поможем даже в самых сложных случаях!
            </p>

            <form id="form" class="modal__form" method="POST" action="handler.php">
                <div class="input-group__vertical">
                    <div class="input-group modal__input-group">
                        <input 
                        id="modal-user-name" 
                        class="cta-input" 
                        type="text" 
                        placeholder=" " 
                        name="username"
                        required 
                        maxlength="50">
                        <label class="cta-label modal__label" for="modal-user-name">Имя</label>
                    </div>
                    <div class="input-group modal__input-group">
                        <input 
                        id="modal-user-tel" 
                        class="cta-input phone-mask" 
                        type="tel" 
                        placeholder=" " 
                        name="userphone"
                        required 
                        maxlength="20">
                        <label class="cta-label modal__label" for="modal-user-tel">Номер телефона</label>
                    </div>
                </div>
                <div class="modal__footer">
                    <button class="modal__btn button" type="submit">Отправить заявку</button>
                    <div class="cta-form__alert modal__alert">
                        <svg class="cta-icon" width="14" height="14">
                            <use xlink:href="images/sprite.svg#alert"></use>
                        </svg>
                        <p class="modal__text">
                            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                            конфиденциальность информации!
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-thanks">
        <div class="modal-thanks__box">
            <div class="modal-thanks__image">
                <img class="modal-thanks__img" src="./images/modals/img-thanks.png"
                    alt="картинка с девушкой, спасибо за заявку">
            </div>
            <h2 class="modal__title modal-thanks__title">
                Спасибо за заявку!
            </h2>
            <p class="modal__text modal-thanks__text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
                поможем даже в самых сложных случаях!
            </p>
            <a class="modal-thanks__btn button" href="index.php">Вернуться на главную</a>
        </div>
    </div>

    <script src="./js/swiper-bundle.min.js"></script>
    <!-- <script src="./js/just-validate.production.min.js"></script> -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>