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
            'hide_empty'   => 1,
        ] );
        
        if($categories):
        
        ?>

        <div class="blog__categories">
            <div class="container">
                <ul class="blog__categories-list categories-list">
                <?php 
                    foreach( $categories as $category ): 
                    $image = get_field('image', $category->term_id);
                    ?>

                    <li class="<?php echo $category->term_id ?> categories-list__item">
                        <a class="categories-list__item-link" href="<?php echo get_category_link( $category->term_id ); ?>">
                        <?php if( !empty($image) ): ?>
                            <img class="categories-list__item-link-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php else: ?>
                            <div class="categories-list__item-link-background"></div>
                        <?php endif; ?>
                        </a>

                        <div class="categories-list__item-title"><?php echo $category->name ?></div>
                        <div class="categories-list__item-desc"><?php echo $category->description ?></div>
                    </li>

                <?php endforeach; ?>
                </ul>
            </div>
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
