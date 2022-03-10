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


				<div class="container py-4">

				<?php if(have_rows('sections')):
                        	while ( have_rows('sections') ) : the_row();?>
					<div class="row">
						<div class="col">
							<h2 class="font-weight-normal text-7 mb-2"><?php the_sub_field('title');?></h2>
						</div>
					</div>

					<table class="table table-striped">
											<thead>
												<tr>
													<th><?php _e('Date', 'khl')?></th>
													<th><?php _e('Tour Name', 'khl')?></th>
													<th><?php _e('Duration', 'khl')?></th>
													<th><?php _e('Price', 'khl')?></th>
													<th><?php _e('Book', 'khl')?></th>
												</tr>
											</thead>
											<tbody>
												<?php
                        							while ( have_rows('rows') ) : the_row();
														$tour = get_sub_field('tour');?>
												<tr>
													<td><span><i class="far fa-calendar-alt"></i> <?php the_sub_field('dates');?> </span></td>
													<td><a href="<?php echo get_permalink($tour)?>"><?php echo get_the_title($tour)?></a></td>
													<td><?php the_sub_field('duration');?></td>
													<td><?php _e('from', 'khl')?> <b><?php echo get_field('price',$tour->ID);?></b></td>
													<td>
														<?php if(!get_sub_field('sold_out')):?>
															<a href="<?php echo get_permalink($tour)?>#Request" type="button" class="btn btn-primary mb-2"><?php _e('Book Now', 'khl')?></a>
														<?php else:?>
															<button class="btn btn-light mb-2" disabled><?php _e('Sold Out', 'khl')?></button>
														<?php endif;?>
													</td>
												</tr>
													<?php endwhile;?>
											</tbody>
										</table>

						<hr class="solid my-5">
							<?php endwhile;?>
					<?php endif;?>

					</div>

				</div>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
