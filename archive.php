<?php
get_header();
?>
        <div class="blog">
        <div class="blog__title">
            <div class="container">
                <h1 class="page-title"><?php single_post_title() ?></h1>
            </div>
        </div>

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
