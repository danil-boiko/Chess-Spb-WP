<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chess_spb
 */

?>

</main><!-- #page -->

<!--Contact form in modal-->
<div id="modal-form">
    <div class="home-form__fields">
        <?php echo do_shortcode( '[contact-form-7 id="110" title="Контактная форма перед подвалом"]' )?>
    </div>
</div>
<!--Contact form in modal-->

<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <ul class="footer-top-grid">
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
                <li class="footer-top-item">
                    <div class="footer-top-item-title">Социальные сети</div>
                    <?php
                        if ( function_exists('dynamic_sidebar') )
                            dynamic_sidebar('footer-sidebar-3');
                    ?> 
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-inner">
                <nav class="footer__nav nav"></nav>
                    <?php  wp_nav_menu( array(
							'menu_class'     => 'nav__list',
                            'menu_id'        => 'footer_menu',
                            'container'      => '',
							'theme_location' => 'footer-menu',
						) );
					?>
                </nav>
                <a class="footer-bottom-inner-btn header__content-right_request btn btn-green" href="#modal-form" data-fancybox>Оставить заявку</a>
                <div class="footer-bottom-inner-copy">
                    <span>Все права защищены</span>
                    <span>Шахматная школа “Лидер” 2022</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
