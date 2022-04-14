<section class="home-reviews">
    <div class="container">

        <?php if(!empty($attributes['title'])): ?>
        <h2 class="home-reviews__title home-title" data-aos="fade-in">
            <?php echo $attributes['title'] ?>
        </h2>
        <?php endif; ?>

        <div class="home-reviews__wrapper swiper" data-aos="fade-out" data-aos-delay="200">
            <div class="swiper-wrapper">

                <?php foreach($attributes['reviews'] as $review):?>
                <div class="swiper-slide">
                    <div class="home-reviews__slide">
                        <div class="home-reviews__slide-top">
                            <?php echo $review['text'] ?>
                        </div>
                        <div class="home-reviews__slide-bottom">

                            <?php if(!empty($review['image'])): ?>
                            <div class="home-reviews__slide-bottom__image">
                                <img src="<?php echo $review['image']['url'] ?>" alt="<?php echo $review['image']['alt'] ?>">
                            </div>
                            <?php endif;?>

                            <div class="home-reviews__slide-bottom__info">

                                <div class="home-reviews__slide-bottom__info-name">
                                    <?php echo $review['name'] ?>
                                </div>

                                <?php if(!empty($review['date'])): ?>
                                <div class="home-reviews__slide-bottom__info-date">
                                    <?php echo $review['date'] ?>
                                </div>
                                <?php endif;?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
               
            </div>
        </div> 
    </div>
</section>