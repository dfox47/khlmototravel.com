

            <div class="container my-2">
				
				<div class="featured-boxes featured-boxes-style-7">

						<div class="row">
							
							<?php while(have_rows('boxes')): the_row();?>
							<div class="col-lg-4">

								<div class="featured-box featured-box-primary featured-box-effect-7">

									<div class="box-content">

										<i class="icon-featured far <?php echo get_sub_field('icon'); ?>"></i>

										<h4 class="font-weight-normal text-5 mt-3"><?php echo get_sub_field('title'); ?></h4>

										<p class="mb-0"><?php echo get_sub_field('text'); ?></p>

									</div>

								</div>

							</div>
							<?php endwhile;?>

						</div>

				  </div>
					
            </div>