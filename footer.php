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

<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <ul class="footer-top-grid">
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
                <li class="footer-top-item">
                    <div class="footer-top-item-title">Социальные сети</div>
                    <ul class="footer-top-item-socials socials-list">
                        <li class="footer-top-item-socials-item socials-list-item">
                            <a href="#">
                                 <svg><use xlink:href="#telegram"></use></svg>
                            </a>
                        </li>
                        <li class="footer-top-item-socials-item socials-list-item">
                            <a href="#">
                                <svg><use xlink:href="#whatsapp"></use></svg>
                            </a>
                        </li>
                        <li class="footer-top-item-socials-item socials-list-item">
                            <a href="#">
                                <svg><use xlink:href="#vk"></use></svg>
                            </a>
                        </li>
                        <li class="footer-top-item-socials-item socials-list-item">
                            <a href="#">
                                <svg><use xlink:href="#youtube"></use></svg>
                            </a>
                        </li>
                    </ul>
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
                <a class="footer-bottom-inner-btn header__content-right_request btn btn-green" href="#">Оставить заявку</a>
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
