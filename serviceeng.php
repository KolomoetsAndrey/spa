<?php
/*
Template Name: Виды и типы массажа (ENG)
*/
?>

<?php get_header('eng'); ?>

    <div class="services">
        <div class="container">
			<!-- ************* -->
			
			<?php
				// 1 значение по умолчанию
				$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

				$the_query = new WP_Query( array(
					'posts_per_page'   => 6,
					'category_name'    => 'massages',
					'paged'            => $paged,
					'orderby'     	   => 'date',
					'order'            => 'ASC',
					'post_type'        => 'post',
					'suppress_filters' => true,
				) );

				// цикл вывода полученных записей
				while( $the_query->have_posts() ){
					$the_query->the_post();
					?>
					
						<div 
							 style="
							 <?php
							 	$field = get_field('right_to_left');
								if ($field == 'on') {
									?>
										flex-direction: row-reverse;
									<?php
								}
							 ?>
							 "
							 class="row">
							<div class="col-md-6 col-12 image_box">
								<img src="<?php the_field('massage_img'); ?>" alt="" class="service_img">
							</div>
							<div class="col-md-6 col-12 info_box">
								<a class="service_title" href="<?php echo get_permalink(); ?>">
									<?php the_title(); ?>
								</a>
								<span class="service_text">
									<?php the_excerpt(); ?>
								</span>
								<div class="service_btn"
									 style="
										 <?php
											$field = get_field('right_to_left');
											if ($field == 'on') {
												?>
													margin-left: 0;
												<?php
											}
										 ?>
										 "
									 >
									<a href="<?php echo get_permalink(); ?>" class="service_link">
										More information
									</a>
								</div>
							</div>
						</div>
			
					<?php 
				} 
				wp_reset_postdata();

				// пагинация для произвольного запроса
				$big = 999999999; // уникальное число

				echo paginate_links( array(
					'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'  => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'prev_text'    => __('<'),
					'next_text'    => __('>'),
					'type'      => 'list',
					'total'   => $the_query->max_num_pages
				) );
				
				?>

			<!-- ************* -->
			
    </div>

<?php get_footer('eng'); ?>