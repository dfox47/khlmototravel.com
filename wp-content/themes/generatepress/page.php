<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<?php if ( $_SERVER['REQUEST_URI'] == '/ru/' ) { ?>
			<div class="home_tour">
				<div class="home_tour__subtitle">Ближайший тур</div>
				<div class="home_tour__title">Вокруг Балкан</div>
				<div class="home_tour__date">7 - 19 Июня 2022</div>
				<div class="home_tour__days">14 дней</div>
				<a class="home_tour__readmore btn_submit" href="/ru/moto-tours/5-countries/">Подробнее</a>
			</div>
		<?php } ?>



		<?php
		/**
		 * generate_before_main_content hook.
		 *
		 * @since 0.1
		 */
		do_action( 'generate_before_main_content' );

		if ( generate_has_default_loop() ) {
			while ( have_posts() ) :

				the_post();

				generate_do_template_part( 'page' );

			endwhile;
		}

		/**
		 * generate_after_main_content hook.
		 *
		 * @since 0.1
		 */
		do_action( 'generate_after_main_content' );
		?>
	</main>
</div>

<?php
/**
 * generate_after_primary_content_area hook.
 *
 * @since 2.0
 */
do_action( 'generate_after_primary_content_area' );

generate_construct_sidebars();

get_footer();


