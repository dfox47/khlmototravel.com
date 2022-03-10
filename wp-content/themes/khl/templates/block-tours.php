<?php 
$tours = get_field('tours_fields_tours');
if($tours):?>
				<div class="container my-2">
					
						<div class="row">

							<div class="col mb-4">

							  <hr class="my-5">

							</div>

						</div>

						<div class="row">

							<div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">

							<div class="heading heading-border heading-middle-border heading-middle-border-center heading-border-lg">

								<h2 class="font-weight-normal"><?php the_field('tours_fields_title'); ?></h2>

							</div>

							<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

								<?php the_field('tours_fields_description'); ?>

							</p>

						</div>

					</div>
					
					<div class="row">
								<?php foreach($tours as $tour):?>
									<div class="col-md-4">

										<article class="post post-medium border-0 pb-0 mb-5">

											<div class="post-image">

												<a href="<?php echo get_permalink(get_translate_id($tour->ID));?>">
													<?php
													$image = wp_get_attachment_image_src( get_post_thumbnail_id( $tour->ID ), 'large' );
													if($image):
													?>
													<img src="<?php echo $image[0];?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
													<?php endif;?>
												</a>

											</div>



											<div class="post-content">



												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php echo get_permalink(get_translate_id($tour->ID));?>"><?php echo get_the_title($tour->ID);?></a></h2>

												<p><?php echo get_field('short_description', $tour->ID)?></p>



												<div class="post-meta">

												<span><i class="far fa-calendar-alt"></i> <?php echo get_field('dates', $tour->ID)?> </span>
													
												<span><i class="fas fa-tag"></i> <?php _e('from', 'khl')?> <?php echo get_field('price', $tour->ID)?> </span>

												<div class="mt-3"><a href="<?php echo get_permalink(get_translate_id($tour->ID));?>#Request" class="btn btn-xl btn-dark text-3 text-uppercase"><?php _e('Book Now', 'khl')?></a></div>

												</div>



											</div>

										</article>

									</div>
									<?php endforeach;?>

								</div>
				

				</div>

				<section class="section section-height-2 section-background overlay overlay-show overlay-op-9 border-0 m-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="background-image: url(&quot;https://www.khlmototravel.com/wp-content/uploads/2020/05/slide-bg-2.jpg&quot;); background-size: cover; background-position: center center; animation-delay: 100ms;">
					<div class="container container-lg my-5">
						<div class="row justify-content-center">
							<div class="col-md-10 col-xl-9 text-center">
								<h2 class="font-weight-normal text-color-light text-10 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;"><?php _e('Your own', 'khl')?> <strong class="font-weight-extra-bold"><?php _e('Private Motorcycle Tour', 'khl')?></strong></h2>
								<p class="font-weight-light text-color-light line-height-9 text-4 opacity-7 mb-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;"><?php _e('Premium guided motorcycle tours for ladies and gentlemen with a connoisseur’s taste for the finer things in life!', 'khl')?></p>
								<a href="<?php echo get_permalink(get_translate_id(37)); ?>" class="d-inline-flex align-items-center btn btn-primary font-weight-semibold px-4 btn-py-3 text-3 rounded appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550" style="animation-delay: 550ms;"><?php _e('CONTACT US NOW', 'khl')?> <i class="fa fa-arrow-right ml-2 pl-1 text-5"></i></a>
							</div>
						</div>
					</div>
				</section>
<?php endif;?>