<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section class="page-header mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'khl')?></a></li>
									<li><a href="<?php echo get_permalink(get_translate_id(27)); ?>"><?php _e('Motorcycle Tours', 'khl')?></a></li>
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

				<aside class="nav-secondary" id="navSecondary" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 73}}">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="nav nav-pills justify-content-center">

									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#Overview"><?php _e('Overview', 'khl')?></a></li>

									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#Tourmap"><?php _e('Tourmap', 'khl')?></a></li>

									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#Course-of-events"><?php _e('Course of events', 'khl')?></a></li>
									
									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#Photos"><?php _e('Photos', 'khl')?></a></li>
									
									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#Prices-and-services"><?php _e('Prices and services', 'khl')?></a></li>
									
									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#Request"><?php _e('Request', 'khl')?></a></li>

								</ul>
							</div>
						</div>
					</div>
				</aside>



				<div class="container py-4">

					<div class="row">

						<div class="col py-4">

							<h2 class="font-weight-normal text-7 mb-2" id="Overview"><strong class="font-weight-extra-bold"><?php _e('Overview', 'khl')?></strong></h2>

							<div class="pricing-block border rounded">

								<div class="row">

									<div class="col-lg-9">

										<h2 class="font-weight-semibold text-6 line-height-1 mb-3"><?php _e('Main features of the tour:', 'khl')?></h2>

										<hr>

										<?php 
										$features = get_field('features');
										if($features):
										?>
										<div class="row">

											<div class="col-lg-6">

												<ul class="list list-icons list-primary mb-0">
											<?php 
                                            $percol = ceil(count($features)/2);
                                            foreach($features as $k=>$v):
                                            ?>
													
													<li><i class="icons <?php echo $v['icon']?> text-color-primary"></i><?php echo $v['text']?></li>

											<?php if($k==($percol-1)):?></ul></div><div class="col-lg-6"><ul class="list list-icons list-primary mb-0"><?php endif;?>
											<?php endforeach;//list?>
												</ul>

											</div>

										</div>
										<?php endif;//features?>
									</div>

									<div class="col-lg-3">

										<h4 class="font-weight-bold"><?php _e('FROM', 'khl')?></h4>

										<div class="plan-price mb-4">

											<span class="price"><?php the_field('price');?></span>

											<label class="price-label">/<?php _e('pilot', 'khl')?></label>

										</div>

										<a href="#Request" class="btn btn-primary btn-modern btn-xl"><?php _e('Book Now', 'khl')?></a>

									</div>

								</div>

							</div>
							<br />
							<?php the_field('description');?>
						</div>
						
					</div>
					
					<div class="row">

						<div class="col py-4">
							
							<h2 class="font-weight-normal text-7 mb-2" id="Tourmap"><strong class="font-weight-extra-bold"><?php _e('Tourmap', 'khl')?></strong></h2>
							<div class="row">
								
								<div class="col-md-6">
									<?php
									$map_image = get_field('map_image');
									if($map_image):?>
									<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': 
																	   {'enabled': true, 'duration': 300}}">
										<a class="img-thumbnail img-thumbnail-no-borders" href="<?php echo $map_image['url']; ?>">
											<img src="<?php echo $map_image['sizes']['large'];?>" class="img-fluid img-thumbnail img-thumbnail-no-borders w-100 rounded-0" alt="" />
										</a>
									</div>
									<?php endif;?>
								</div>			
								<div class="col-md-6">
									<?php the_field('map_description');?>
								</div>		
						
							</div>
						</div>
						
					</div>
					
					<div class="row">

						<div class="col py-4">
							
							<h2 class="font-weight-normal text-7 mb-2" id="Course-of-events"><strong class="font-weight-extra-bold"><?php _e('Course of events', 'khl')?></strong></h2>

							<div class="process process-vertical py-4">
								<?php 
								$events = get_field('events');
								foreach($events as $k=>$v):
								?>
								<div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

									<div class="process-step-circle">

										<strong class="process-step-circle-content"><?php echo $k+1;?></strong>

									</div>

									<div class="process-step-content">

										<h4 class="mb-1 text-4 font-weight-bold"><?php echo $v['title'];?></h4>

										<p class="mb-0"><?php echo $v['description'];?></p>

									</div>

								</div>
								<?php endforeach;?>

							</div>

							<?php 
							$photos = get_field('photos');
							if($photos):
							?>
							<h2 class="font-weight-normal text-7 mb-2" id="Photos"><strong class="font-weight-extra-bold"><?php _e('Photos', 'khl')?></strong></h2>
						
							<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">

                                <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                                    <?php foreach($photos as $img):?>
                                    <div>

                                        <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="<?php echo $img['url']; ?>">

                                            <img class="img-fluid tour-gallery" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">

                                        </a>

                                    </div>
                                    <?php endforeach;?>
                                </div>

							</div>
							<?php endif; //photos?>
						</div>
						
					</div>
					
                    <?php 
                    $prices_sections = get_field('prices_sections');
                    if($prices_sections):
                    ?>
					<div class="row">

						<div class="col py-4">
							
							<h2 class="font-weight-normal text-7 mb-2" id="Prices-and-services"><strong class="font-weight-extra-bold"><?php _e('Prices and services', 'khl')?></strong></h2>
							
							<div class="pricing-block border rounded">

								<div class="row">

									<div class="col-lg-12">
									<?php foreach($prices_sections as $key=>$section):?>
										<h2 class="font-weight-semibold text-6 line-height-1 mb-3"><?php echo $section['title'];?></h2>

										<div class="row">
											<div class="col-lg-4">

												<ul class="list list-icons list-primary mb-0">
												<?php 
												$percol = floor(count($section['list'])/3);
												foreach($section['list'] as $k=>$v):
												?>
													
													<li><i class="icons <?php echo $v['icon']?> text-color-primary"></i><?php echo $v['text']?></li>

												<?php if($k==($percol-1)): $percol += $percol;?></ul></div><div class="col-lg-4"><ul class="list list-icons list-primary mb-0"><?php endif;?>
												<?php endforeach;//list?>
												</ul>

										</div>
										<?php if($key != count($prices_sections)-1):?>
										<hr class="mb-4">
										<?php endif;?>
										</div>
									<?php endforeach;?>
									</div>
									
								</div>

							</div>
							
						</div>
						
					</div>
					<?php endif;//prices_sections?>
					
					
					<div class="row">

						<div class="col py-4">
							
							<h2 class="font-weight-normal text-7 mb-2" id="Request"><strong class="font-weight-extra-bold"><?php _e('Request', 'khl')?></strong></h2>
							
							<?php echo do_shortcode(get_field('form'));?>
						</div>


					</div>


				</div>


 
<?php endwhile; endif; ?>

<?php get_footer(); ?>
