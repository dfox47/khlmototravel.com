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



				<div class="container">

					<div class="row py-4">
						<div class="col-lg-6">

							<?php if(get_field('form_title')):?>
							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><?php the_field('form_title');?></h2>
							</div>
							<?php endif;?>
							
							<div class="contact-form">
								<?php echo do_shortcode(get_field('form'));?>
							</div>

						</div>
						<div class="col-lg-6">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<?php if(get_field('address_title')):?><h4 class="mt-2 mb-1"><?php the_field('address_title');?></h4><?php endif;?>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<?php if(get_field('address')):?><li><i class="fas fa-map-marker-alt top-6"></i> <?php the_field('address');?></li><?php endif;?>
									<?php if(get_field('phone')):?><li><i class="fas fa-phone top-6"></i> <?php the_field('phone');?></li><?php endif;?>
									<?php if(get_field('email')):?><li><i class="fas fa-envelope top-6"></i> <a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></li><?php endif;?>
								</ul>
							</div>
							
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<?php if(get_field('address_title_2')):?><h4 class="pt-5"><?php the_field('address_title_2');?></h4><?php endif;?>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<?php if(get_field('address_2')):?><li><i class="fas fa-map-marker-alt top-6"></i> <?php the_field('address_2');?></li><?php endif;?>
									<?php if(get_field('phone_2')):?><li><i class="fas fa-phone top-6"></i> <?php the_field('phone_2');?></li><?php endif;?>
									<?php if(get_field('phone_3')):?><li><i class="fas fa-phone top-6"></i> <?php the_field('phone_3');?></li><?php endif;?>
								</ul>
							</div>
							
							<?php if(get_field('business_hours')):?>
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<?php if(get_field('business_hours_title')):?><h4 class="pt-5"><?php the_field('business_hours_title');?></h4><?php endif;?>
								<ul class="list list-icons list-dark mt-2">
									<?php foreach(get_field('business_hours') as $line):?>
									<li><i class="far fa-clock top-6"></i> <?php echo $line['text'];?></li>
									<?php endforeach;?>
								</ul>
							</div>
							<?php endif;?>

							<?php if(get_field('content')):?><p class="lead mb-0 text-4"><?php the_field('content');?></p><?php endif;?>

						</div>

					</div>

				</div>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
