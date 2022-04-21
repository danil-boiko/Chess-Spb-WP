<section class="gallery">
    <div class="container">

        <?php if(!empty($attributes['title'])): ?>
            <h1 class="page-title"><?php echo $attributes['title'] ?></h1>
        <?php endif; ?>

        <div class="gallery-grid">

            <?php foreach( $attributes['images'] as $image ): ?>
                <a href="<?php echo $image['url']?>" data-fancybox="gallery" class="gallery-grid-item">
                    <img class="gallery-grid-item-image" src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
                </a>
            <?php endforeach; ?>

        </div>
    </div>
</section>