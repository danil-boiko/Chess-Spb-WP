<?php
get_header();

$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

?>
    <div class="page-content">
        <div class="container">
            <?php if ($image):?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large', 'class=post-thumbnail__image') ?>
                </div>
            <?php endif; ?>
            <h1 class="page-title post-title"><?php single_post_title() ?></h1>
            <div class="content-container">
                <?php the_content()?>
            </div>
        </div>
    </div>
	
<?php
get_footer();
