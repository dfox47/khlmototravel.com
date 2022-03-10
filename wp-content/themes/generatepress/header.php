<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$themeFolder    = '/wp-content/themes/khl';
$i              = $themeFolder. '/img';
$favicon        = $i . '/icons/favicon'; ?>



<!DOCTYPE html>

<html <?php language_attributes(); ?> class="lang_<?php echo get_locale(); ?>">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon; ?>/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon; ?>/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon; ?>/favicon-16x16.png" />
	<link rel="manifest" href="<?php echo $favicon; ?>/site.webmanifest" />
	<link rel="mask-icon" href="<?php echo $favicon; ?>/safari-pinned-tab.svg" color="#5bbad5" />
	<meta name="msapplication-TileColor" content="#da532c" />
	<meta name="theme-color" content="#ffffff" />
	<link rel="shortcut icon" href="<?php echo $favicon; ?>/favicon.ico" type="image/x-icon" />

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo $themeFolder; ?>/style.css" />

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '242055234329428');
		fbq('track', 'PageView');
	</script>

	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=242055234329428&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

	<meta name="facebook-domain-verification" content="ujmufe44ju0nlrao9xhloz9yfiyh6v" />



	<!-- Yandex.Metrika counter -->
	<script>
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(85699691, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>

	<noscript><div><img src="https://mc.yandex.ru/watch/85699691" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>
<?php
/**
 * wp_body_open hook.
 *
 * @since 2.3
 */
do_action( 'wp_body_open' ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- core WP hook.

/**
 * generate_before_header hook.
 *
 * @since 0.1
 *
 * @hooked generate_do_skip_to_content_link - 2
 * @hooked generate_top_bar - 5
 * @hooked generate_add_navigation_before_header - 5
 */
do_action( 'generate_before_header' );

/**
 * generate_header hook.
 *
 * @since 1.3.42
 *
 * @hooked generate_construct_header - 10
 */
do_action( 'generate_header' );

/**
 * generate_after_header hook.
 *
 * @since 0.1
 *
 * @hooked generate_featured_page_header - 10
 */
do_action( 'generate_after_header' ); ?>

<div id="page" <?php generate_do_element_classes( 'page' ); ?>>
	<?php
	/**
	 * generate_inside_site_container hook.
	 *
	 * @since 2.4
	 */
	do_action( 'generate_inside_site_container' ); ?>

	<div id="content" class="site-content">
		<?php /**
		 * generate_inside_container hook.
		 *
		 * @since 0.1
		 */
		do_action( 'generate_inside_container' ); ?>


