<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<section class="page-header mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'khl')?></a></li>
									<li class="active"><?php _e('Blog', 'khl')?></li>
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


    <?php endwhile; ?>
<?php endif; ?>
 


				<div class="container py-4">

					<div class="row">
						
						
						<div class="col-lg-9 order-lg-1">
							<div class="blog-posts">

								<?php
								$args = array();
								$args['orderby'] = 'post_date';
								$args['order'] = 'DESC';
								$args['posts_per_page'] = -1;
								$ln_query = new WP_Query($args);
								if ($ln_query->have_posts()) : ?>
								<?php while ( $ln_query->have_posts() ) : $ln_query->the_post();
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
								?>
								<article class="post post-large">
									<?php if($image):?>
									<div class="post-image">
										<a href="<?php echo get_permalink(); ?>">
											<img src="<?php echo $image[0];?>" class="img-fluid img-thumbnail img-thumbnail-no-borders w-100 rounded-0" alt="" />
										</a>
									</div>
									<?php endif; ?>
								
									<div class="post-date">
										<span class="day"><?php the_time('d');?></span>
										<span class="month"><?php the_time('M');?></span>
									</div>
								
									<div class="post-content">
								
										<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
										<p><?php the_excerpt(); ?></p>
								
										<div class="post-meta">
											<span><i class="far fa-user"></i> <?php _e('By', 'khl')?> <?php the_author();?> </span>
											<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="<?php echo get_permalink(); ?>" class="btn btn-xs btn-light text-1 text-uppercase"><?php _e('Read More', 'khl')?></a></span>
										</div>
								
									</div>
								</article>
								<?php endwhile;  wp_reset_postdata(); ?>
								<?php endif; ?>
								

							</div>
						</div>
						
						
						<div class="col-lg-3 order-lg-2">
							<aside class="sidebar">
								
								<form action="" method="get">
									<div class="input-group mb-3 pb-1">
										<input class="form-control text-1" placeholder="<?php _e('Search', 'khl')?>..." name="s" id="s" type="text">
										<span class="input-group-append">
											<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
										</span>
									</div>
								</form>
								
								<h5 class="font-weight-bold pt-4"><?php _e('Tours', 'khl')?></h5>
								<ul class="simple-post-list">
									
									<?php
									$args = array();
									$args['post_type'] = 'tour';
									$args['orderby'] = 'post_date';
									$args['order'] = 'DESC';
									$args['posts_per_page'] = 3;
									$tour_query = new WP_Query($args);
									if ($tour_query->have_posts()) : ?>
									<?php while ( $tour_query->have_posts() ) : $tour_query->the_post();
										$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
									?>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php if($image):?><img src="<?php echo $image[0];?>" width="50" height="50" alt=""><?php endif;?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                            <div class="post-meta">
                                                 <?php echo get_field('dates', get_the_ID())?>
                                            </div>
                                        </div>
                                    </li>
									<?php endwhile;  wp_reset_postdata(); ?>
									<?php endif; ?>
                                </ul>
								
								<h5 class="font-weight-bold pt-4">About Us</h5>
								<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
							</aside>
						</div>
						
						
					</div>

				</div>
<?php get_footer(); ?>
