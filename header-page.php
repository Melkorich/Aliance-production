<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $page_title ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/normilize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<div class="mobile-menu">
    <ul class="mobile-menu__nav">
        <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="about">О компании</a>
        </li>
        <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="contracts.php">Контрактное производство</a>
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
            <a class="mobile-menu__link" href="trademarks.php">Собственные торговые марки</a>
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

<nav class="navbar navbar--light">
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
            <a class="header-nav__link" href="contracts.php">Контрактное производство</a>
        </li>
        <li class="header-nav__item">
            <a class="header-nav__link" href="trademarks.php">Собственные торговые марки</a>
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
    <button class="navbar__btn button" type="button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="navbar__btn-icon" width="24" height="24">
            <use href="images/sprite.svg#phone"></use>
        </svg>
        <span class="navbar__btn-text">Получить консультацию</span>
    </button>
</nav>

<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__inner">
            <div class="breadcrumbs__info">
                <div class="separator"></div>
                <h1 class="breadcrumbs__title section-title">
                    <?=$page_title?>
                </h1>
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__link" href="">Главная</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__link breadcrumbs__link--current"><?=$page_title?></a>
                    </li>
                </ul>
            </div>
            <div class="breadcrumbs__image <?=$breadcrumbs__img?>">
                <img src="./images/breadcrumbs/img1.png" alt="">
            </div>
        </div>
    </div>
</div>