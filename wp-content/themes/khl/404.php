<?php get_header(); ?>
	
				<section class="page-header mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'khl')?></a></li>
									<li class="active"><?php _e('Page Not Found', 'khl')?></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1><?php _e('Page Not Found', 'khl')?></h1>
							</div>
						</div>
					</div>
				</section>
 
				<div class="container">

					<section class="http-error">
						<div class="row justify-content-center py-3">
							<div class="col-md-7 text-center">
								<div class="http-error-main">
									<h2>404!</h2>
									<p><?php _e('We\'re sorry, but the page you were looking for doesn\'t exist.', 'khl')?></p>
								</div>
							</div>
							<div class="col-md-4 mt-4 mt-md-0">
								<h4 class="text-primary"><?php _e('Here are some useful links', 'khl')?></h4>
								<ul class="nav nav-list flex-column">
									<li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'khl')?></a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo get_permalink(get_translate_id(27)); ?>"><?php _e('Motorcycle Tours', 'khl')?></a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo get_permalink(get_translate_id(31)); ?>"><?php _e('About Us', 'khl')?></a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo get_permalink(get_translate_id(33)); ?>"><?php _e('FAQ', 'khl')?></a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo get_permalink(get_translate_id(37)); ?>"><?php _e('Contacts', 'khl')?></a></li>
								</ul>
							</div>
						</div>
					</section>

				</div>

<?php get_footer(); ?>
