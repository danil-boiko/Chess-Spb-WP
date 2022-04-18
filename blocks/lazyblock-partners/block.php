<section class="events">
    <div class="container container-small">
        <?php if(!empty($attributes['title'])): ?>  
            <h1 class="page-title"><?php echo $attributes['title']?></h1>
        <?php endif; ?>
        <div class="events-grid">
        <?php 
            foreach( $attributes['events'] as $event):
                
        ?>
            <div class="events-grid__item">
                
                <div class="events-grid__item-image">
                    <img class="events-grid__item-image-img" src="<?php echo $event['image']['url'] ?>" alt="<?php echo $event['image']['alt'] ?>">
                </div>

                <?php if(!empty($event['name']) || !empty($event['description'])):  ?>
                <div class="events-grid__item-info">
                    <h2 class="events-grid__item-info-title"><?php echo $event['name'] ?></h2>
                    <div class="events-grid__item-info-desc"><?php echo $event['description'] ?></div>
                </div>
                <?php endif;?>

            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>