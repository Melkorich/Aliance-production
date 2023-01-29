
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
                        <input id="user-name" class="cta-input" type="text" name="username" placeholder=" "
                            required maxlength="50">
                        <label class="cta-label" for="user-name">Имя</label>
                    </div>
                    <div class="input-group">
                        <input id="user-tel" class="cta-input phone-mask" type="tel" name="userphone"
                            placeholder=" " required maxlength="20">
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