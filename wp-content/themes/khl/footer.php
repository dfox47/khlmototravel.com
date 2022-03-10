<?php
$footer = get_field('footer', 'option');
?>
			</div>

			<footer id="footer" class="bg-color-quaternary border-top-0">

				<div class="container py-4">

					<div class="row py-5">

						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

							<h5 class="text-3 mb-3 opacity-7"><?php _e('NEWSLETTER', 'khl')?></h5>

							<p class="pr-1 text-color-light"><?php _e('Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.', 'khl')?></p>


							<div class="alert alert-danger d-none" id="newsletterError"></div>


								<div class="input-group input-group-rounded">
									<?php echo do_shortcode('[contact-form-7 id="1410" title="Newsletter"]');?>
								</div>


						</div>

						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

							<h5 class="text-3 mb-3 opacity-7"><?php _e('LATEST NEWS', 'khl')?></h5>
							<ul class="simple-post-list">
									
									<?php
									$args = array();
									$args['orderby'] = 'post_date';
									$args['order'] = 'DESC';
									$args['posts_per_page'] = 2;
									$ln_query = new WP_Query($args);
									if ($ln_query->have_posts()) : ?>
									<?php while ( $ln_query->have_posts() ) : $ln_query->the_post(); ?>
                                    <li>
                                        <div class="post-info">
                                            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                            <div class="post-meta">
                                                 <?php the_time('d M, Y')?>
                                            </div>
                                        </div>
                                    </li>
									<?php endwhile;  wp_reset_postdata(); ?>
									<?php endif; ?>
                                </ul>

						</div>

						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">

							<h5 class="text-3 mb-3 opacity-7"><?php _e('CONTACT US', 'khl')?></h5>

							<ul class="list list-icons list-icons-lg">

								<li class="mb-1"><i class="far fa-dot-circle text-color-light"></i><p class="m-0 text-color-light"><?php _e('Burgas 8000, Alexander Stamboliyski 5', 'khl')?></p></li>

								<li class="mb-1"><i class="fab fa-whatsapp text-color-light"></i><p class="m-0"><a class="text-color-light"><?php _e('+359 898754877', 'khl')?></a></p></li>

								<li class="mb-1"><i class="far fa-envelope text-color-light"></i><p class="m-0"><a class="text-color-light" href="mailto:info@khlmototravel.com">info@khlmototravel.com</a></p></li>

							</ul>

						</div>

						<div class="col-md-6 col-lg-2">

							<h5 class="text-3 mb-3 opacity-7"><?php _e('FOLLOW US', 'khl')?></h5>

							<ul class="social-icons social-icons-big social-icons-dark-2">

								<li class="social-icons-facebook"><a href="https://www.facebook.com/KHLmotoTravel" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>

								<li class="social-icons-instagram"><a href="https://www.instagram.com/khlmototravel/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>

							</ul>

						</div>

					</div>

				</div>

				<div class="footer-copyright bg-color-quaternary bg-color-scale-overlay bg-color-scale-overlay-1">

					<div class="bg-color-scale-overlay-wrapper">

						<div class="container py-2">

							<div class="row py-1">

								<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">

									<a href="index.html" class="logo pr-0 pr-lg-3">

										<img alt="Porto Website Template" src="<?php echo get_template_directory_uri(); ?>/img/khl/logo-footer.png" height="70">

									</a>

								</div>

								<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">

									<p class="text-color-light">&copy;<?php echo date('Y')?>. <?php _e('All Rights Reserved.', 'khl')?></p>

								</div>

								<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">

									<nav id="sub-menu">

										<ul>

											<li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="<?php echo get_permalink(get_translate_id(33)); ?>" class="ml-1 text-decoration-none text-color-light"> <?php _e('FAQ', 'khl')?></a></li>

											<li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="<?php echo get_permalink(get_translate_id(1226)); ?>" class="ml-1 text-decoration-none text-color-light"> <?php _e('Terms', 'khl')?></a></li>
											
											<!--<li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="<?php echo get_permalink(get_translate_id(3)); ?>" class="ml-1 text-decoration-none text-color-light"> <?php _e('Privacy Policy', 'khl')?></a></li>-->

											<li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="<?php echo get_permalink(get_translate_id(37)); ?>" class="ml-1 text-decoration-none text-color-light"> <?php _e('Contacts', 'khl')?></a></li>

										</ul>

									</nav>

								</div>

							</div>

						</div>

					</div>

				</div>

			</footer>

		</div>

    <?php wp_footer(); ?>

  </body>
</html>