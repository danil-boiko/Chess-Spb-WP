<section class="home-form">
    <div class="container">

        <?php if(!empty($attributes['title'])): ?>
        <h2 class="home-form__title home-title">
            <?php echo $attributes['title']?>
        </h2>
        <?php endif; ?>

        <div class="home-form-inner">
            <div class="home-form__map">
                <div class="home-form__map-iframe">
                    <?php echo $attributes['map'] ?>
                </div>
                <li class="footer-top-item js-footer-item-transfer">
                    <div class="footer-top-item-title">Адрес</div>
                    <div class="footer-top-item-content">
                    <?php
                        if ( function_exists('dynamic_sidebar') )
                            dynamic_sidebar('footer-sidebar-1');
                    ?>
                    </div>
                </li>
                <li class="footer-top-item js-footer-item-transfer">
                    <div class="footer-top-item-title">Контакты</div>
                    <div class="footer-top-item-content">
                    <?php
                        if ( function_exists('dynamic_sidebar') )
                            dynamic_sidebar('footer-sidebar-2');
                    ?>
                    </div>
                </li>
                <div class="home-form__map-content"></div>
            </div>
            <div class="home-form__fields">
                <?php echo do_shortcode( '[contact-form-7 id="110" title="Основная контактная форма"]' )?>
            </div>
        </div>
    </div>
</section>