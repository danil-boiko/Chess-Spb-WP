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
                <div class="home-form__map-content"></div>
            </div>
            <div class="home-form__fields">
                <?php echo do_shortcode( '[contact-form-7 id="110" title="Контактная форма перед подвалом"]' )?>
            </div>
        </div>
    </div>
</section>