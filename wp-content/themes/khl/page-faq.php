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

					<div class="row">
						<div class="col">

							<h2 class="font-weight-normal text-7 mb-2"><?php echo get_field('second_title');?></h2>
							<p class="lead"><?php echo get_field('short_text');?></p>

							<hr class="solid my-5">

							<div class="toggle toggle-primary" data-plugin-toggle>
								
							<?php 
							$faqs = get_field('faq');
							if($faqs):?>
								<?php foreach($faqs as $faq):?>
								<section class="toggle">
									<a class="toggle-title"><?php echo $faq['question']?></a>
									<div class="toggle-content">
										<?php echo $faq['answer']?>
									</div>
								</section>
								<?php endforeach;?>
                            <?php endif;?>
								
							</div>

						</div>

					</div>

				</div>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
