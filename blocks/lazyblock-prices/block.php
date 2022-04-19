<section class="prices">
    <div class="container container-small">
        <?php if(!empty($attributes['title'])): ?>
            <h1 class="page-title"><?php echo $attributes['title'] ?></h1>
        <?php endif; ?>
        <div class="prices-grid">

            <?php foreach( $attributes['cards'] as $card ):?>
            <div 
            class="prices-grid__item <?php if($card['sale'] == true) echo 'prices-grid__item--sale'?>"
            >
                <div class="prices-grid__item-top">
                    <div class="prices-grid__item-top_title">
                        <?php echo $card['name']?>
                    </div>
                    <div class="prices-grid__item-top_price">
                        <?php echo $card['price']?>
                    </div>
                    <div class="prices-grid__item-top_image">
                        <img src="<?php echo $card['image']['url']?>" alt="<?php echo $card['image']['alt']?>">
                    </div>    
                </div>
               <div class="prices-grid__item-count"><?php echo $card['count']?></div>
               <hr>
               <ul class="prices-grid__item-conditions">
                    <?php echo $card['conditions']?>
               </ul>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</section>