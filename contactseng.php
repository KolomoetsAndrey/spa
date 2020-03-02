<?php
/*
Template Name: Контакты (ENG)
*/
?>

<?php get_header('eng'); ?>

    <div class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 text-center bblock">
                    <div class="contact_block">
                        <div class="elipse">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/phone.png" alt="">
                        </div>
                        <h3 class="contact_block_title">
                            Phones
                        </h3>
                        <ul class="phones">
                            <li><?php the_field('telefon_1', 24); ?></li>
                            <li><?php the_field('telefon_2', 24); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center bblock">
                    <div class="contact_block">
                        <div class="elipse">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/email.png" alt="">
                        </div>
                        <h3 class="contact_block_title">
                            E-mail
                        </h3>
                        <ul class="mails">
                            <li><?php the_field('footer_email', 24); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center bblock">
                    <div class="contact_block">
                        <div class="elipse">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/adress.png" alt="">
                        </div>
                        <h3 class="contact_block_title">
                            Adress  
                        </h3>
                        <ul class="adress">
                            <li><?php the_field('footer_adress', 24); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title">
                        <span>Feedback</span>
                        <br>form
                    </h2>
                    <p class="section_text">
                        <?php the_field('contact_description'); ?>
                    </p>
                </div>
            </div>
            <div class="row" id="form_contact">
                <div class="col-12">
                    <?php echo do_shortcode('[contact-form-7 id="102" title="Форма связи в Контактах"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer('eng'); ?>