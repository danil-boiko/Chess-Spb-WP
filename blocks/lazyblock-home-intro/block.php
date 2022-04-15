<section class="home-intro">
    <div class="container">
        <div class="home-intro__text" data-aos="fade-in">
            <h1 class="home-intro__text-title">
                <?php echo $attributes['title']?>    
            </h1>
            <p class="home-intro__text-desc">
                <?php echo $attributes['description']?>       
            </p>
            <div class="home-intro__text-link-inner">
                <a href="#modal-form" data-fancybox class="home-intro__text-link btn btn-green"><?php echo $attributes['button-text']?></a>
            </div>
        </div>
    </div>
    <img class="home-intro__image" src="<?php echo $attributes['image']['url']?>" alt="<?php echo $attributes['image']['alt']?>">
</section>