<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chess_spb
 */

get_header();
?>
    <div class="page-content">
        <div class="container">
            <h1 class="page-title"><?php single_post_title() ?></h1>
            <?php the_content()?>
        </div>
    </div>
	
<?php
get_footer();
