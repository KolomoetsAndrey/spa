<?php
/*
Template Name: Календарь записи (ENG)
*/
?>

<?php get_header('eng'); ?>

    <section class="calendar">
        <div class="container">
			<?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query( array( 'post_parent' => 153, 'post_type' => 'page', 'paged' => $paged, 'order' => 'ASC') );

                if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
                global $post;
                $thePostID = $post->ID;
                ?>
                <div class="row" id="<?php the_field('staff_id'); ?>">
							<div class="col-md-3 col-12 text-center">
								<div class="ava_img">
									<img src="<?php the_field('staff_img'); ?>" alt="" class="avatar">
								</div>
								<p class="prof"><?php the_field('staff_position'); ?></p>
								<p class="profname"><?php the_field('staff_name'); ?></p>
							</div>
							<div class="col-md-9 col-12 text-center">
								<p class="month"></p>
								<div class="owl-carousel owl-theme">
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $dayofweek; ?>" id="theday">
												<span id="thedate0" class="date">
													<?php echo $theday; ?>
												</span>
												<br><span class="day"><?php echo $dayofweek; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday1; ?>" id="day1">
												<span id="thedate1" class="date">
													<?php
														echo date_format($day1, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday1; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday2; ?>" id="day2">
												<span id="thedate2" class="date">
													<?php 
														echo date_format($day2, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday2; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday3; ?>" id="day3">
												<span id="thedate3" class="date">
													<?php 
														echo date_format($day3, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday3; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday4; ?>" id="day4">
												<span id="thedate4" class="date">
													<?php 
														echo date_format($day4, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday4; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday5; ?>" id="day5">
												<span id="thedate5" class="date">
													<?php 
														echo date_format($day5, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday5; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday6; ?>" id="day6">
												<span id="thedate6" class="date">
													<?php 
														echo date_format($day6, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday6; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday7; ?>" id="day7">
												<span id="thedate7" class="date">
													<?php 
														echo date_format($day7, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday7; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday8; ?>" id="day8">
												<span id="thedate8" class="date">
													<?php 
														echo date_format($day8, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday8; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday9; ?>" id="day9">
												<span id="thedate9" class="date">
													<?php 
														echo date_format($day9, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday9; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday10; ?>" id="day10">
												<span id="thedate10" class="date">
													<?php 
														echo date_format($day10, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday10; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday11; ?>" id="day11">
												<span id="thedate11" class="date">
													<?php 
														echo date_format($day11, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday11; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday12; ?>" id="day12">
												<span id="thedate12" class="date">
													<?php 
														echo date_format($day12, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday12; ?></span>
											</button>
										</form>
									</div>
									<div class="item">
										<form method="POST">
											<button name="times_btn" type="button" class="day_block source <?php echo $ddday13; ?>" id="day13">
												<span id="thedate13" class="date">
													<?php 
														echo date_format($day13, 'd.m');
													?>
												</span>
												<br><span class="day"><?php echo $ddday13; ?></span>
											</button>
										</form>
									</div>
								</div>
								<p class="info">
									Recording time on <span class="time" id="time"></span>
								</p>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_1_day = $nowday_c;
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$staff_1_day%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
											?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_1_day = $nowday_c;
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$staff_1_day%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
											?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_1_day = $nowday_c;
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$staff_1_day%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
											?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_1_day = $nowday_c;
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$staff_1_day%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
											?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_1_day = $nowday_c;
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$staff_1_day%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
											?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_1_day = $nowday_c;
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$staff_1_day%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
											?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_1_day = $nowday_c;
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$staff_1_day%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
											?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
										<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday1%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday1%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday1%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday1%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday1%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday1%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday1%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday2%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday2%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday2%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday2%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday2%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday2%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday2%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday3%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday3%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday3%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday3%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday3%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday3%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday3%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday4%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday4%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday4%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday4%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday4%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday4%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday4%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday5%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday5%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday5%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday5%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday5%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday5%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday5%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday6%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday6%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday6%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday6%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday6%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday6%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday6%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday7%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday7%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday7%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday7%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday7%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday7%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday7%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday8%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday8%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday8%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday8%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday8%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday8%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday8%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday9%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday9%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday9%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday9%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday9%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday9%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday9%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday10%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday10%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday10%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday10%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday10%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday10%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday10%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday11%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday11%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday11%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday11%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday11%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday11%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday11%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday12%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday12%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday12%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday12%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday12%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday12%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday12%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
								<div class="times target">
									<ul>
										<li class="time12" data-toggle="modal" data-target="#reserve" data-time="12:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_12to_time = "12:00-13:00";
												$staff_12_time = "12:00";
												$norec = "Zajęty";
												$mytime12 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday13%'
																			AND data LIKE '%$staff_12to_time%' ");
												if ($mytime12 === NULL) {
													echo $staff_12_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_12_time</span>";
												};
										?></li>
										<li class="time13" data-toggle="modal" data-target="#reserve" data-time="13:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_13to_time = "13:00-14:00";
												$staff_13_time = "13:00";
												$norec = "Zajęty";
												$mytime13 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday13%'
																			AND data LIKE '%$staff_13to_time%' ");
												if ($mytime13 === NULL) {
													echo $staff_13_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_13_time</span>";
												};
										?></li>
										<li class="time14" data-toggle="modal" data-target="#reserve" data-time="14:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_14to_time = "14:00-15:00";
												$staff_14_time = "14:00";
												$norec = "Zajęty";
												$mytime14 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday13%'
																			AND data LIKE '%$staff_14to_time%' ");
												if ($mytime14 === NULL) {
													echo $staff_14_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_14_time</span>";
												};
										?></li>
										<li class="time15" data-toggle="modal" data-target="#reserve" data-time="15:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_15to_time = "15:00-16:00";
												$staff_15_time = "15:00";
												$norec = "Zajęty";
												$mytime15 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday13%'
																			AND data LIKE '%$staff_15to_time%' ");
												if ($mytime15 === NULL) {
													echo $staff_15_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_15_time</span>";
												};
										?></li>
										<li class="time16" data-toggle="modal" data-target="#reserve" data-time="16:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_16to_time = "16:00-17:00";
												$staff_16_time = "16:00";
												$norec = "Zajęty";
												$mytime16 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday13%'
																			AND data LIKE '%$staff_16to_time%' ");
												if ($mytime16 === NULL) {
													echo $staff_16_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_16_time</span>";
												};
										?></li>
										<li class="time17" data-toggle="modal" data-target="#reserve" data-time="17:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_17to_time = "17:00-18:00";
												$staff_17_time = "17:00";
												$norec = "Zajęty";
												$mytime17 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday13%'
																			AND data LIKE '%$staff_17to_time%' ");
												if ($mytime17 === NULL) {
													echo $staff_17_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_17_time</span>";
												};
										?></li>
										<li class="time18" data-toggle="modal" data-target="#reserve" data-time="18:00" data-whatever="<?php the_field('staff_name'); ?>">
											<?php 
												$staff_name_var = get_field('staff_name');
												$staff_18to_time = "18:00-19:00";
												$staff_18_time = "18:00";
												$norec = "Zajęty";
												$mytime18 = $wpdb->get_var("SELECT data FROM wp_cpappbk_messages
																			WHERE data LIKE '%$staff_name_var%'
																			AND data LIKE '%$dddday13%'
																			AND data LIKE '%$staff_18to_time%' ");
												if ($mytime18 === NULL) {
													echo $staff_18_time;
												} else {
													echo $norec . "<span class='reserved'>$staff_18_time</span>";
												};
										?></li>
									</ul>
								</div>
							</div>
						</div>
                <?php endwhile; endif; ?>

                <?php wp_reset_postdata(); ?>
			
        </div>
		
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
    </section>

<?php get_footer('eng'); ?>