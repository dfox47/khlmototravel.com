				
<?php if(have_rows('orange_section')):the_row();?>
				<div class="home-intro bg-primary" id="home-intro">

					<div class="container">

				

						<div class="row align-items-center">

							<div class="col-lg-8">

								<p>

									<?php echo get_sub_field('title'); ?>

									<span><?php echo get_sub_field('text'); ?></span>

								</p>

							</div>
							
							<div class="col-lg-4">

								<div class="get-started text-left text-lg-right">
									<?php if(get_sub_field('button_label')):?>
									<a href="<?php echo get_sub_field('button_link'); ?>" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3"><?php echo get_sub_field('button_label'); ?></a>
									<?php endif;?>

								</div>

							</div>

						</div>

				

					</div>

				</div>
<?php endif;?>