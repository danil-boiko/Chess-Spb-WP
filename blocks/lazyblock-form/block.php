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
                        <span>Санкт-Петербург</span>
                        <span>Смоленская улица, дом 18</span>
                        <p>ЖК "Небо Москвы", вход через ворота с домофоном со стороны Смоленской улицы. Для звонка наберите 3#185</p>
                    </div>
                </li>
                <li class="footer-top-item js-footer-item-transfer">
                    <div class="footer-top-item-title">Контакты</div>
                    <div class="footer-top-item-content">
                        <a href="tel:89119269330">8 911 926 93-30</a>
                        <a href="mailto:mail@chess-spb.com">mail@chess-spb.com</a>
                    </div>
                </li>
                <div class="home-form__map-content"></div>
            </div>
            <div class="home-form__fields">
                <?php echo do_shortcode( '[contact-form-7 id="110" title="Контактная форма перед подвалом"]' )?>
            </div>
        </div>
    </div>
</section>