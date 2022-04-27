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
    <div class="blog">
        <div class="blog__title">
            <div class="container">
                <h1 class="page-title"><?php single_post_title() ?></h1>
            </div>
        </div>

        <?php 
        $categories = get_categories( [
            'taxonomy'     => 'category',
            'type'         => 'post',
            'child_of'     => 0,
            'parent'       => '',
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 1,
            'hierarchical' => 1,
            'exclude'      => '',
            'include'      => '',
            'number'       => 0,
            'pad_counts'   => false,
            // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
        ] );
        
        if($categories):
        
        ?>

        <div class="blog__categories">
            <ul class="blog__categories-list">
            <?php foreach( $categories as $category ): ?>
                <li class="blog__categories-list__item">
                    <a class="blog__categories-list__item-link" href="<?php echo get_category_link( $category->term_id ); ?>">
                        <img src="<?php //echo $category['image']['url'] ?>" alt="<?php //echo $category['image']['alt'] ?>">
                    </a>
                    <div class="blog__categories-list__item-title"><?php echo $category->name ?></div>
                    <div class="blog__categories-list__item-desc"><?php echo $category->description ?></div>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>

        <?php endif; ?>

        <div class="blog__posts">
            <div class="container">
                <?php
                
                // $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
                // $args = array(
                //     'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
                //     'paged'          => $current_page // текущая страница
                // );
                // query_posts( $args );
                
                // $wp_query->is_archive = true;
                // $wp_query->is_home = false;
                
                // while(have_posts()): the_post();
                //     ?>
                     <h2><?php// the_title() /* заголовок */ ?></h2>
                     <p></p>
                     <?php
                // endwhile;
            
                // ?>
            </div>
        </div>
    </div>
	
<?php
get_footer();
