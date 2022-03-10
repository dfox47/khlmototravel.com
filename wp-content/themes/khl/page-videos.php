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

<?php
$args = array();
$args['post_type'] = 'video';
$args['orderby'] = 'menu_order';
$args['order'] = 'ASC';
$args['posts_per_page'] = -1;
$v_query = new WP_Query($args);
if ($v_query->have_posts()) : ?>


				<div class="container py-2">
					<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
					</ul>

					<div class=" sort-destination-loader-loaded mt-4 pt-2">
						<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
							
                            <?php while ( $v_query->have_posts() ) : $v_query->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
                            ?>

							<div class="col-md-6 isotope-item brands">
								<div class="portfolio-item">
									<a href="<?php the_permalink()?>">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="<?php echo $image[0]; ?>" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner"><?php the_title()?></span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							
                            <?php endwhile;  wp_reset_postdata();?>

						</div>
					</div>

				</div>

<?php endif;?>



<?php get_footer(); ?>
