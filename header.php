<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apps_Flyer
 */

?>
<!doctype html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/assets/distimg/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/assets/dist/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/assets/dist/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/assets/dist/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#3DD98E">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header transparent">
    <div class="container header__content">
        <div class="header__content-left">
            <a href="/" class="header__logo">
                <svg><use xlink:href="#logo"></use></svg>
            </a>
        </div>
        <div class="header__content-right">
            <div class="header__content-right-top">
                <a href="/" class="header__logo">
                    <svg><use xlink:href="#logo"></use></svg>
                </a> 
                <div class="hamburger js-menu-close">
                    <svg><use xlink:href="#burger"></use></svg>
                </div>
            </div>
            <div class="header__content-right-wrapper">
                <nav class="header__nav nav">
                    <ul class="nav__list">
                        <li><a href="#">Расписание</a></li>
                        <li><a href="prices.html">Стоимость</a></li>
                        <li><a href="gallery.html">Галерея</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="events.html">Турниры</a></li>
                        <li><a href="corp.html">Партнерам</a></li>
                    </ul>
                </nav>
                <div class="header__content-right_close js-menu-close">
                    <svg><use xlink:href="#menu-close"></use></svg>
                </div>
                <a class="header__content-right_request btn btn-green" href="#">Оставить заявку</a>
            </div>
            <div class="header__content-right-bottom">
                <ul class="socials-list">
                    <li class="socials-list-item">
                        <a href="#">
                             <svg><use xlink:href="#telegram"></use></svg>
                        </a>
                    </li>
                    <li class="socials-list-item">
                        <a href="#">
                            <svg><use xlink:href="#whatsapp"></use></svg>
                        </a>
                    </li>
                    <li class="socials-list-item">
                        <a href="#">
                            <svg><use xlink:href="#vk"></use></svg>
                        </a>
                    </li>
                    <li class="socials-list-item">
                        <a href="#">
                            <svg><use xlink:href="#youtube"></use></svg>
                        </a>
                    </li>
                </ul>
                <div class="footer-bottom-inner-copy">
                    <span>Все права защищены</span>
                    <span>Шахматная школа “Лидер” 2022</span>
                </div>
            </div>
        </div>

        <div class="hamburger js-menu-open">
            <svg><use xlink:href="#burger"></use></svg>
        </div>
    </div>
</header><!-- / .header -->

<main>
