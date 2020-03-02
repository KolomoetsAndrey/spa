<?php
/*
Template Name: Галерея (ENG)
*/
?>

<?php get_header('eng'); ?>

    <div class="gallery">
        <div class="container">
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

<?php get_footer('eng'); ?>