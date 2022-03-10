<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<section class="page-header mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'khl')?></a></li>
									<li class="active"><?php the_title()?></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1><?php the_title()?></h1>
							</div>
						</div>
					</div>
				</section>

    <?php endwhile; ?>
<?php endif; ?>


				<div class="container py-4">

					<div class="row">
						<div class="col">

							<p class="lead"><?php the_content();?></p>

							<hr class="solid my-5">

                            <?php
                            $args = array();
                            $args['post_type'] = 'tour';
                            $args['orderby'] = 'menu_order';
                            $args['order'] = 'ASC';
                            $args['posts_per_page'] = -1;
                            $tour_query = new WP_Query($args);
                            if ($tour_query->have_posts()) : ?>
							
							
						<div class="row pb-1">
							<div class="col-sm-6 col-lg-4 mb-4 pb-2">
								<a href="<?php echo get_permalink(get_translate_id(37)); ?>">
									<article>
										<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
											<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
												<img src="https://www.khlmototravel.com/wp-content/uploads/2020/05/bulgaria-greece-12-day-tour-e1604476772235.jpg" class="img-fluid" alt="">
												<div class="thumb-info-title bg-transparent p-4">
													<div class="thumb-info-inner mt-1">
														<div class="thumb-info-type bg-color-primary px-2 mb-1"><?php _e('from', 'khl')?> €300</div>
														<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0"><?php _e('Individual Moto Tours', 'khl')?></h2>
													</div>
													<div class="thumb-info-show-more-content">
														<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5"><?php _e('We have individually organized tours. Please send an enquiry!', 'khl')?></p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</a>
							</div>
							
							<?php while ( $tour_query->have_posts() ) : $tour_query->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
                            ?>
							<div class="col-sm-6 col-lg-4 mb-4 pb-2">
								<a href="<?php echo get_permalink(); ?>">
									<article>
										<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
											<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
													<?php
													if($image):
													?>
													<img src="<?php echo $image[0];?>" class="img-fluid" alt="" />
													<?php endif;?>
												<div class="thumb-info-title bg-transparent p-4">
													<div class="thumb-info-inner mt-1">
														<div class="thumb-info-type bg-color-primary px-2 mb-1"><?php _e('from', 'khl')?> <?php the_field('price')?></div>
														<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0"><?php the_title();?></h2>
													</div>
													<div class="thumb-info-show-more-content">
														<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5"><?php echo short_excerpt(get_field('short_description'), 20, '...');?></p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</a>
							</div>
							<?php endwhile;  wp_reset_postdata();?>
							
						</div>
							
							<?php endif;?>

						</div>

					</div>

				</div>



<?php get_footer(); ?>
