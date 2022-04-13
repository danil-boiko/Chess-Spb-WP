<section class="home-about">
    <div class="container">
        <?php if(!empty($attributes['title'])): ?>  
        <h2 class="home-about_title home-title" data-aos="fade-in"><?php echo $attributes['title'] ?></h2>
        <?php endif; ?>
        <div class="home-about-wrapper">

            <?php if(!empty($attributes['points'])): ?>  

            <div class="home-about_info" data-aos="fade-right" data-aos-delay="200">

                <?php foreach($attributes['points'] as $point): ?>
                    <div class="home-about_info-item">
                        <div class="home-about_info-item_image">
                            <img src="<?php echo $point['image']['url']?>" alt="<?php echo $point['image']['alt']?>">
                        </div>
                        <h3 class="home-about_info-item_title">
                            <?php echo $point['title']?>
                        </h3>
                        <p class="home-about_info-item_desc">
                            <?php echo $point['description']?>
                        </p>
                    </div>
                <?php endforeach; ?>

            </div>

            <?php endif; ?>

            <?php if( !empty($attributes['poster']) && !empty($attributes['video-id']) ):?>

            <div class="home-about_video" data-aos="fade-left" data-aos-delay="400">
                <div class="home-about_video-inner">
                    <img src="<?php echo $attributes['poster']['url'] ?>" class="home-about_video-poster" alt="<?php echo $attributes['poster']['alt'] ?>">
                    <button class="home-about_video-play" data-src="<?php echo $attributes['video-id'] ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/dist/img/base/youtube-play.svg" alt="">
                    </button>
                </div>
            </div>

            <?php endif; ?>

        </div>
    </div>
</section>