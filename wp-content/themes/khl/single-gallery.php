<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section class="page-header mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'khl')?></a></li>
									<li><a href="<?php echo get_permalink(get_translate_id(29)); ?>"><?php _e('Galleries', 'khl')?></a></li>
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


                <?php 
                $photos = get_field('gallery');
                if($photos):
                ?>
				<div class="container py-2">

					<ul class="nav nav-pills sort-source sort-source-style-3" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
					</ul>

					<div class="sort-destination-loader-loaded mt-4 pt-2">
						<div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">

							<?php foreach($photos as $img):?>
							<div class="col-md-6 col-lg-1-5 isotope-item brands">
								<div class="portfolio-item">
									<a href="<?php echo $img['url']; ?>">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="<?php echo $img['sizes']['medium']; ?>" class="img-fluid border-radius-0" alt="">
											</span>
										</span>
									</a>
								</div>
							</div>
							<?php endforeach;?>							
							
						</div>
					</div>

				</div>
              <?php endif; //photos?>
 
<?php endwhile; endif; ?>

<?php get_footer(); ?>
