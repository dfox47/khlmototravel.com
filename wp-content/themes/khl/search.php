<?php get_header(); ?>

	
				<section class="page-header mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'khl')?></a></li>
									<li class="active"><?php _e('Search', 'khl')?></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1><?php _e('Results for:', 'khl')?> <strong><?php echo get_search_query(); ?></strong></h1>
							</div>
						</div>
					</div>
				</section>



				<div class="container py-4">

					<div class="row">
						<div class="col">
							<ul>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<li>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h4><?php the_title(); ?></h4></a>
									<p><?php the_excerpt();?></p>
								</li>
							<?php endwhile; else: ?>
								<p><?php _e('No results found.'); ?></p>
							<?php endif; ?>
							</ul>
						</div>

					</div>

				</div>
 


<?php get_footer(); ?>
