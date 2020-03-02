<?php
/*
Template Name: Виды массажа (ENG)
*/
?>

<?php get_header('eng'); ?>

    <div class="article">
        <img src="<?php the_field('body_img'); ?>" alt="" class="article_img">

        <div class="article_title">
            <p class="atitle"><?php the_field('mass_desc_fool'); ?></p>
            <ul class="price">
                <li>2h <span><?php the_field('two_hours'); ?></span></li>
                <li>1h 30 min <span><?php the_field('one_haf_hours'); ?></span></li>
                <li>1h <span><?php the_field('one_hours'); ?></span></li>
            </ul>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 btn_block">
                    <div class="service_btn">
                        <a href="/rezerwacja" class="service_link">
                            Register
                        </a>
                    </div>
                    <div class="article_block">
						<?php
						if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>">
							<?php if ( ! is_front_page() ) { ?>
							<h2 class="entry-title"></h2>
							<?php } ?>
							<section class="entry-content">
								<?php the_content(); ?>
							</section>
						</article>
						<?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer('eng'); ?>