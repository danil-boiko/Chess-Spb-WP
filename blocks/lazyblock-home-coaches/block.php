<section class="home-coaches">
    <div class="container">

        <?php if(!empty($attributes['title'])): ?>
            <h2 class="home-coaches__title home-title" data-aos="fade-in">
                <?php echo $attributes['title'] ?>
            </h2>
        <?php endif;?>

        <ul class="home-coaches__list">

            <?php 
            $delay = 0;
            foreach( $attributes['coaches'] as $coach):
                $delay = $delay + 100
            ?>

            <li class="home-coaches__list-item" data-aos="fade-in" data-aos-delay="<?php echo $delay ?>">
                <div class="home-coaches__list-item_image">
                    <img src="<?php echo $coach['image']['url'] ?>" alt="<?php echo $coach['image']['alt'] ?>">
                </div>
                <div class="home-coaches__list-item_info">
                    <div class="home-coaches__list-item_info-name">
                        <?php echo $coach['name'] ?>
                    </div>
                    <div class="home-coaches__list-item_info-skills">
                        <?php echo $coach['achievements'] ?>
                    </div>
                </div>
            </li>

            <?php endforeach; ?>
            
        </ul>
    </div>
</section>