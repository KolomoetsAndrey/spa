<?php
/*
Template Name: Главная страница (ENG)
*/
?>

<?php get_header('eng'); ?>

    <header class="header animated fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="main_title">
						<?php the_field('main_title'); ?>
                    </h1>
                    <p class="main_desc">
                        <?php the_field('main_desc'); ?>
                    </p>
                    <div class="register_btn">
                        <a href="/rezerwacja" class="register">Register</a>
                    </div>
                    <ul class="socials">
                        <li>
                            <a href="<?php the_field('fb_link'); ?>" class="social_link">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/fb.png" alt="" class="social_img">
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field('insta_link'); ?>" class="social_link">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/insta.png" alt="" class="social_img">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section class="reasons">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title">
                        <span>3 reasons</span>
                        <br>to choose us
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 col-12 one">
					<p class="number">
                            01
                        </p>
                    <div class="reason_block">
                        <div class="elipse">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/elipse.png" alt="">
                        </div>
                        <h3 class="reason_block_title">
                            <?php the_field('reason_one_title'); ?>
                        </h3>
                        <p class="reason_block_text">
                            <?php the_field('reason_one_desc'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-12 two">
                    <p class="number">
                            02
                        </p>
					<div class="reason_block">
                        <div class="elipse">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/elipse.png" alt="">
                        </div>
                        <h3 class="reason_block_title">
                            <?php the_field('reason_two_title'); ?>
                        </h3>
                        <p class="reason_block_text">
                            <?php the_field('reason_two_desc'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 col-12 three">
                    <p class="number">
                            03
                        </p>
					<div class="reason_block">
                        <div class="elipse">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/elipse.png" alt="">
                        </div>
                        <h3 class="reason_block_title">
                            <?php the_field('reason_three_title'); ?>
                        </h3>
                        <p class="reason_block_text">
                            <?php the_field('reason_three_desc'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="reason_btn">
                        <a href="/rezerwacja" class="reason_link">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="types">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title">
                        <span>What</span> types 
                        <br>of massage <span>we offer</span>
                    </h2>
                    <p class="section_text">
                        <?php the_field('types_desc'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="type_one">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 imagesinfoblock">
                    <img src="<?php echo bloginfo('template_url'); ?>/images/mass1.png" alt="" class="infoblock_img">
                </div>
                <div class="col-md-6 col-12">
                    <h3 class="type_title">
                        <?php the_field('first_mass_title'); ?>
                    </h3>
                    <p class="type_text">
                        <?php the_field('first_mass_desc'); ?>
                    </p>
                    <div class="type_btn">
                        <a href="/uslugi" class="type_link">
                            Zobacz wszystko
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-12 type_img_right" style=" --right-image: url(<?php echo bloginfo('template_url'); ?>/images/mass1.png); " >
                </div>
            </div>
        </div>
    </section>

    <section class="type_two">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 imagesinfoblock">
                    <img src="<?php echo bloginfo('template_url'); ?>/images/mass2.png" alt="" class="infoblock_img">
                </div>
                <div class="col-md-6 col-12 type_img_left" style="--left-image: url(<?php echo bloginfo('template_url'); ?>/images/mass2.png)">
                </div>
                <div class="col-md-6 col-12">
                    <h3 class="type_title">
                        <?php the_field('sec_mass_title'); ?>
                    </h3>
                    <p class="type_text">
                        <?php the_field('sec_mass_desc'); ?>
                    </p>
                    <div class="type_btn">
                        <a href="/uslugi" class="type_link">
                            See all
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cards">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title">
                        <span>we have</span> gift 
                        <br>cards
                    </h2>
                    <p class="section_text">
                        <?php the_field('gift_desc'); ?>
                    </p>
                </div>
            </div>
            <div class="row cards_mobi">
                <div class="col-12">
                    <img src="<?php echo bloginfo('template_url'); ?>/images/cards_mobi.png" alt="" class="cards_mobi_img">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-12">
                    <div class="cards_text">
                        <?php the_field('gift_card_desc'); ?>
                    </div>
                    <div class="cards_btn">
                        <a href="/karty-upomnikowe" class="cards_link">
                            More information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fotos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title">
                        <span>see</span> how 
                        <br>it looks
                    </h2>
                    <p class="section_text">
                        <?php the_field('gallery_desc'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="images">
            <img src="<?php the_field('photo_one'); ?>" alt="" class="top_img">
            <img src="<?php the_field('photo_two'); ?>" alt="" class="center_img">
            <img src="<?php the_field('photo_three'); ?>" alt="" class="bottom_img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="img_btn">
                        <a href="/galeria" class="img_link">
                            See all
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title">
                        <span>Do you</span>
                        <br><span>have any</span> questions?
                    </h2>
                    <p class="section_text">
                        <?php the_field('call_desc'); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <?php echo do_shortcode('[contact-form-7 id="71" title="Форма вопроса на главной"]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer('eng'); ?>