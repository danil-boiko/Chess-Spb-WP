<?php
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
                    $image = get_field('image', $category);
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
            <div class="blog__posts-title">Последние новости</div>
            <div class="container">
                <div class="blog__posts-grid">
                    <?php while(have_posts()): the_post();?>
                        <div class="blog__posts-grid-item">
                            <a class="blog__posts-grid-item_image" href="<?php echo get_permalink(); ?>">
                                <?php echo get_the_post_thumbnail() ?>
                            </a>
                            <div class="blog__posts-grid-item_info">
                                <ul class="blog__posts-grid-item_info-categories">
                                    <?php foreach( get_the_category() as $category ): ?>
                                        <li>
                                            <a href="<?php echo get_category_link($category) ?>">
                                                <?php echo $category->name ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="blog__posts-grid-item_info-time">
                                    <?php echo reading_time(get_the_ID()); ?>
                                </div>
                            </div>
                            <div class="blog__posts-grid-item_title">
                                <?php the_title() ?>
                            </div>
                            <p class="blog__posts-grid-item_excerpt">
                                <?php echo get_the_excerpt() ?>
                            </p>
                            <a class="blog__posts-grid-item_link" href="<?php echo get_permalink(); ?>">Перейти</a>
                        </div>  
                    <?php endwhile; ?>
                 </div>
            </div>
        </div>
    </div>
	
<?php
get_footer();
