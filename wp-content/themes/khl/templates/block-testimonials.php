<?php 
$testimonials = get_field('testimonials');
if($testimonials):?>
			<section class="section section-height-3 bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn">

					<div class="container">
						
						<div class="row">
							
							<div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">

							<h2 class="font-weight-normal"><?php echo get_field('title'); ?></h2>
							
							</div>
							
						</div>

						<div class="row">

							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

								

								<div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-dark nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100, 'autoHeight': true}">
									<?php foreach($testimonials as $testimonial):?>
									<div>

										<div class="testimonial testimonial-style-2 mb-0">

											<blockquote>

												<p class="text-color-dark text-5 line-height-5 mb-0"><?php echo $testimonial['text'];?></p>

											</blockquote>

											<div class="testimonial-author">

												<p><strong class="font-weight-extra-bold text-2"><?php echo $testimonial['author'];?></strong></p>

											</div>

										</div>

									</div>
									<?php endforeach;?>

								</div>



							</div>

						</div>

					</div>

				</section>
<?php endif;?>