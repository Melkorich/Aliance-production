<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = 'Собственные торговые марки';
$breadcrumbs__img = 'breadcrumbs__image--hidden';
include_once('header-page.php');

?>


<body class="map-page">

    <main class="main">

        <div class="footer__top footer-top--map">
            <div class="container">
                <div class="footer__top-inner">
                    <a class="footer__phone link-phone phone-map" href="tel:+74996861014">+7 (999) 686-10-14</a>
                    <div class="footer__info">
                        <address class="footer__info-text">
                            <svg class="map-icon" width="12" height="17">
                                <use href="images/sprite.svg#map"></use>
                            </svg>
                            г. Мосвка, Холодильный пер. 4к1с8
                        </address>
                        <div class="footer__info-text">
                            <svg class="mail-icon" width="16" height="12">
                                <use href="images/sprite.svg#mail"></use>
                            </svg>
                            a.dragunov@tdaliance.ru
                        </div>
                    </div>
                    <div class="footer__social footer-social">
                        <a class="footer-social__link" href="#">
                            <svg class="footer-social__icon" width="24" height="24">
                                <use href="images/sprite.svg#vk"></use>
                            </svg>
                        </a>
                        <a class="footer-social__link" href="#">
                            <svg class="footer-social__icon" width="24" height="24">
                                <use href="images/sprite.svg#insta"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <img class="map-img" src="./images/map.jpg" alt="">
        </div>

        <?= include_once('./template-parts/cta-block.php')?>
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

    <script src="./js/swiper-bundle.min.js"></script>
    <!-- <script src="./js/just-validate.production.min.js"></script> -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>