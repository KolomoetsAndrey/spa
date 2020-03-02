    <footer class="footer">
        <div class="container">
            <div class="row" id="container">
                <div class="col-md-4 col-12 top_block">
                    <p class="adress">
                        <?php the_field('footer_adress', 24); ?>
                    </p>
                    <p class="email">
                        <?php the_field('footer_email', 24); ?>
                    </p>
                </div>
                <div class="col-md-4 col-12 center_block">
                    <img src="<?php echo bloginfo('template_url'); ?>/images/footer_logo.png" alt="" class="logo_img">
                </div>
                <div class="col-md-4 col-12 bottom_block">
                    <p class="phone">
                        <?php the_field('telefon_1', 24); ?>
                    </p>
                    <p class="phone">
                        <?php the_field('telefon_2', 24); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <p class="copyright_text">
                            Słowianka Spa & Masaz © Copyright <?php echo date("Y"); ?>.  Developed by SFdevelop
                        </p>
                    </div>
                    <div class="col-5">
                        <ul class="footer_socials">
                            <li><a href="#" class="fs_link">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/fb.png" alt="">
                            </a></li>
                            <li><a href="#" class="fs_link">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/insta.png" alt="">
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <div class="modal fade" id="recall" tabindex="-1" role="dialog" aria-labelledby="recallLabel" aria-hidden="true">
        <div class="modal-dialog recall_modal" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <h3 class="modal_title">
                        <span>Ask for</span> a call back
                    </h3>
                    <button type="button" class="close_btn" data-dismiss="modal">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/close_btn.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <?php echo do_shortcode('[contact-form-7 id="203" title="Форма обратного звонка"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="giftcard" tabindex="-1" role="dialog" aria-labelledby="giftcardLabel" aria-hidden="true">
        <div class="modal-dialog recall_modal" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <h3 class="modal_title">
                        <span>Order</span> a gift card
                    </h3>
                    <button type="button" class="close_btn" data-dismiss="modal">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/close_btn.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <?php echo do_shortcode('[contact-form-7 id="204" title="Форма подарочного сертификата"]'); ?>
                </div>
            </div>
        </div>
    </div>

	<div class="modal fade" id="reserve" tabindex="-1" role="dialog" aria-labelledby="reserveLabel" aria-hidden="true">
        <div class="modal-dialog recall_modal" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <h3 class="modal_title">
                        <span>Choose</span> the type of massage
                    </h3>
                    <button type="button" class="close_btn" data-dismiss="modal">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/close_btn.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <?php echo do_shortcode('[contact-form-7 id="187" title="Форма записи на прием"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>   
    
    <!-- Scripts -->
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/popper.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/moment-with-locales.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/maineng.js"></script>
</body>
</html>