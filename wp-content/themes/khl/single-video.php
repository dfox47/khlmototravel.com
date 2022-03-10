<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section class="page-header mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'khl')?></a></li>
									<li><a href="<?php echo get_permalink(get_translate_id(4478)); ?>"><?php _e('Videos', 'khl')?></a></li>
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
<br />

                <?php 
                $video = get_field('video_url');
                if($video):
					$video = preg_replace('/ width="\d+" height="\d+"/', ' class="embed-responsive-item"', $video);
                ?>
				<div class="container py-2 embed-responsive embed-responsive-21by9">
					
					<?php echo $video;?>

				</div>
              <?php endif; //video?>
 
<?php endwhile; endif; ?>

<?php get_footer(); ?>
