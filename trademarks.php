<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = 'Собственные торговые марки';
$breadcrumbs__img = 'breadcrumbs__image--hidden';
include_once('header-page.php');

?>


<body class="trademarks-page">

    <main class="main">

        <?= $block_title = ""; 
        include_once('./template-parts/trademarks-block.php')
        ?>

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