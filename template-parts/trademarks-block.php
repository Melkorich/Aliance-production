<section class="trade-mark">
    <div class="container">

        <?php 
            if (!empty($block_title)) {
                echo '<div class="separator"></div>';
                echo '<h2 class="trade-mark__title section-title">'. $block_title .'</h2>';
            }
        ?>
        
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