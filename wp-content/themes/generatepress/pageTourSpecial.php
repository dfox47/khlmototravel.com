<?php
/**
 * Template Name: Tour special
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<main>
	<?php if ( generate_has_default_loop() ) {
		while ( have_posts() ) :
			the_post();

			generate_do_template_part( 'single' );
		endwhile;
	} ?>
</main>

<?php get_footer(); ?>


