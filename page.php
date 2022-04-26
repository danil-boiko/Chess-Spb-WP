<?php

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
