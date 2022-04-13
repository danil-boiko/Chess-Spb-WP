<section class="home-features">
    <div class="container home-features--inner">

        <?php if(!empty($attributes['title'])): ?>  
        <h2 class="home-features__title home-title" data-aos="fade-in">
            <?php echo $attributes['title'] ?>
        </h2>
        <?php endif;?>

        <div class="home-features__content">
            <ul class="home-features__list">

                <?php  
                $dealay = 0;
                foreach($attributes['features'] as $feature):
                    $dealay = $dealay + 100;
                ?>
                <li class="home-features__list-item" data-aos="fade-right" data-aos-delay="<?php echo $delay?>">
                    <h3 class="home-features__list-item_title">
                        <?php echo $feature['title']?>    
                    </h3>
                    <p class="home-features__list-item_desc">
                        <?php echo $feature['description']?>
                    </p>
                </li>   
                <?php endforeach; ?>

            </ul>

            <?php if( !empty($attributes['image-desktop']) ):?>
            <img 
                class="home-features__bg home-features__bg--desktop" 
                src="<?php echo $attributes['image-desktop']['url'] ?>" 
                alt="<?php echo $attributes['image-desktop']['alt'] ?>"
                >
            <?php endif; ?>
        </div>

        <?php if( !empty($attributes['image-mobile']) ):?>
        <img 
            class="home-features__bg home-features__bg--mobile" 
            src="<?php echo $attributes['image-mobile']['url'] ?>" 
            alt="<?php echo $attributes['image-mobile']['alt'] ?>">
        <?php endif; ?>
        
    </div>
</section>