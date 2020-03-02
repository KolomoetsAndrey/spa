<?php
/*
Template Name: Подарочные карты (ENG)
*/
?>

<?php get_header('eng'); ?>

    <div class="article">
        <img src="<?php echo bloginfo('template_url'); ?>/images/giftcard.png" alt="" class="article_img">

        <div class="article_title">
            <p class="atitle">Gift <br>cards</p>
            <ul class="percent">
                <li>10%</li>
            </ul>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 btn_block">
                    <div class="service_btn">
                        <a href="#" data-toggle="modal" data-target="#giftcard" class="service_link">
                            Order card                        
                        </a>
                    </div>
                    <div class="col-12 article_block">
                        <p class="article_text">
                            <?php the_field('giftcard_desc'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer('eng'); ?>