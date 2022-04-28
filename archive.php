<?php
get_header();
?>
    <div class="blog__posts">
        <div class="blog__posts-title"><?php single_term_title() ?></div>
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
        <div>
    </div>
	
<?php
get_footer();
