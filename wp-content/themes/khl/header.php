<?php $i    = esc_url( get_template_directory_uri() ) . '/img';
$favicon    = $i . '/favicon';
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />
	<meta name="format-detection" content="telephone=no" />

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon; ?>/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon; ?>/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon; ?>/favicon-16x16.png" />
	<link rel="manifest" href="<?php echo $favicon; ?>/site.webmanifest" />
	<link rel="mask-icon" href="<?php echo $favicon; ?>/safari-pinned-tab.svg" color="#5bbad5" />
	<meta name="msapplication-TileColor" content="#da532c" />
	<meta name="theme-color" content="#ffffff" />

	<link rel="shortcut icon" href="<?php echo $favicon; ?>/favicon.ico" type="image/x-icon" />

	<title><?php wp_title(''); ?></title>

	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" />

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico" type="image/x-icon" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-191591081-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-191591081-1');
	</script>


	<!-- Meta Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '748258353103321');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=748258353103321&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Meta Pixel Code -->

	<!-- Yandex.Metrika counter -->
	<script>
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(85699691, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/85699691" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<meta name="google-site-verification" content="wNMss3Dbktws7gYwcVxdUGv8atTvqtRKUPiPOhpOmaI" />
</head>

<body <?php body_class('loading-overlay-showing');?> data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">

<div class="loading-overlay"><div class="bounce-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>

<div class="body">
	<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">

		<div class="header-body border-top-0">

			<div class="header-top header-top-default border-bottom-0 bg-color-primary">
				<div class="container">
					<div class="header-row py-2">

						<div class="header-column justify-content-start">
							<div class="header-row">
								<nav class="header-nav-top">
									<ul class="nav nav-pills">
										<li class="nav-item">
											<span class="text-light opacity-7 pl-0"><?php _e('Call Us Today! +359 898754877', 'khl')?></span>
										</li>
									</ul>
								</nav>
							</div>
						</div>

						<div class="header-column justify-content-end">
							<div class="header-row">
								<?php echo do_action('wpml_add_language_selector');?>

								<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
									<li class="social-icons-facebook"><a href="//www.facebook.com/KHLmotoTravel" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-instagram"><a href="//www.instagram.com/khlmototravel/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
									<li class="social-icons-youtube"><a href="//www.youtube.com/channel/UCc1XxwnveMJnLtv-M3q2Bgw" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>

									<li class="social-icons-vk"><a href="//vk.com/khlmototravel" target="_blank" title="vkontakte"><i class="fab fa-vk"></i></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="header-container container">

				<div class="header-row">

					<div class="header-column">
						<div class="header-row">
							<div class="header-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img alt="KHL Moto Travel" width="88" height="80" data-sticky-width="66" data-sticky-height="60" src="<?php echo get_template_directory_uri(); ?>/img/khl/logo.png">
								</a>
							</div>
						</div>
					</div>

					<div class="header-column justify-content-end">
						<div class="header-row">
							<div class="header-nav header-nav-links order-2 order-lg-1">
								<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav nav-pills" id="mainNav">
											<li>
												<a <?php if(is_home() || is_front_page()) echo 'class="active dropdown-item"'; ?> href="<?php echo esc_url( home_url( '/' ) ); ?>">
													<?php _e('Home', 'khl')?>
												</a>
											</li>
											<li>
												<a <?php if(is_page(get_translate_id(27))) echo 'class="active dropdown-item"'; ?> href="<?php echo get_permalink(get_translate_id(27)); ?>">
													<?php _e('Motorcycle Tours', 'khl')?>
												</a>
											</li>
											<li>
												<a <?php if(is_page(get_translate_id(1214))) echo 'class="active dropdown-item"'; ?> href="<?php echo get_permalink(get_translate_id(1214)); ?>">
													<?php _e('Schedule', 'khl')?>
												</a>
											</li>
											<li>
												<a <?php if(is_page(get_translate_id(29))) echo 'class="active dropdown-item"'; ?> href="<?php echo get_permalink(get_translate_id(29)); ?>">
													<?php _e('Galleries', 'khl')?>
												</a>
											</li>
											<li>
												<a <?php if(is_page(get_translate_id(4478))) echo 'class="active dropdown-item"'; ?> href="<?php echo get_permalink(get_translate_id(4478)); ?>">
													<?php _e('Videos', 'khl')?>
												</a>
											</li>
											<li>
												<a <?php if(is_page(get_translate_id(31))) echo 'class="active dropdown-item"'; ?> href="<?php echo get_permalink(get_translate_id(31)); ?>">
													<?php _e('About Us', 'khl')?>
												</a>
											</li>
											<li>
												<a <?php if(is_page(get_translate_id(33))) echo 'class="active dropdown-item"'; ?> href="<?php echo get_permalink(get_translate_id(33)); ?>">
													<?php _e('FAQ', 'khl')?>
												</a>
											</li>
											<?php /*<li>
                                                    <a <?php if(is_page(get_translate_id(35))) echo 'class="active dropdown-item"'; ?> href="<?php echo get_permalink(get_translate_id(35)); ?>">
                                                        <?php _e('Blog', 'khl')?>
                                                    </a>
                                                </li> */?>
											<li>
												<a <?php if(is_page(get_translate_id(37))) echo 'class="active dropdown-item"'; ?> href="<?php echo get_permalink(get_translate_id(37)); ?>">
													<?php _e('Contacts', 'khl')?>
												</a>
											</li>
										</ul>
									</nav>
								</div>

								<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>

							</div>

							<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
								<div class="header-nav-feature header-nav-features-search d-inline-flex">
									<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
									<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
										<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
											<div class="simple-search input-group">
												<input class="form-control text-1" id="headerSearch" name="s" type="search" value="" placeholder="<?php _e('Search', 'khl')?>...">
												<span class="input-group-append">
                                                        <button class="btn" type="submit">
                                                            <i class="fa fa-search header-nav-top-icon"></i>
                                                        </button>
                                                    </span>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</header>

	<div role="main" class="main">
			
			