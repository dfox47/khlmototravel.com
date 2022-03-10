<?php
/**
 * The template for displaying Archive pages.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
		<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		    <h1>Motorcycle Tours</h1>
		    <div class="tours-cont">
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );
            
			if ( generate_has_default_loop() ) {
				if ( have_posts() ) :

					/**
					 * generate_archive_title hook.
					 *
					 * @since 0.1
					 *
					 * @hooked generate_archive_title - 10
					 */
					//do_action( 'generate_archive_title' );
                
					while ( have_posts() ) :
					    the_post();
					    $tour_url = rtrim(get_permalink( $post->ID ), '/');
					    $tour_book_url .= $tour_url . '#book-now';
                        $tour_title = $post->post_title;
                        $feautured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        $tour_short_desc = get_post_meta($post->ID, 'khl_short_desc', true);
						$tour_highlights = get_post_meta($post->ID, 'khl_tour_details_khl_highlights', true);
                        $tour_arr_character = get_post_meta($post->ID, 'khl_tour_details_khl_terrain_character', true);
                        $tour_character = "";
                        foreach ($tour_arr_character as $tour_char) {
                            if($tour_character != ""){
                                $tour_character .= ", ";
                            }
                            $tour_character .= $tour_char;
                        }
                        $tour_days = get_post_meta($post->ID, 'khl_tour_details_khl_days', true);
                        $tour_nights = get_post_meta($post->ID, 'khl_tour_details_khl_nights', true);
                        $tour_riding_days = get_post_meta($post->ID, 'khl_tour_details_khl_riding_days', true);
                        $tour_duration = $tour_days . ' days';
                        $tour_date = get_post_meta($post->ID, 'khl_tour_details_khl_start_date', true);
                        $dateTime = DateTime::createFromFormat("Ymd", $tour_date);
                        $tour_dates = $dateTime->format('jS F Y');
                        $tour_min_price = get_post_meta($post->ID, 'khl_tour_prices_khl_passenger', true);
						//generate_do_template_part( 'archive' );
					    echo '<div class="tour-cont top-border">
					    <img class="arc-feautured-img" src="' . $feautured_image[0] . '"></img>
					    <div class="arc_tour_details">
					    <a href="' . $tour_url . '"><h2>'. $tour_title . '</h2></a>
					    <p>' . $tour_short_desc . '</p>
					    </div><div class="arc_tour_details bordered shadowed">
					    <h3>Quick Overview</h3>
					    <strong>Destinations: </strong>'. $tour_highlights .'<br />
					    <strong>Duration: </strong>' . $tour_duration . '<br />
					    <strong>Dates: </strong>' . $tour_dates . '<br />
					    <strong>Prices from: </strong>' . $tour_min_price . ' EUR<br />
					    <a href="' . $tour_book_url . '" class="button-book">Book Now</a></div></div>';

					endwhile;

					/**
					 * generate_after_loop hook.
					 *
					 * @since 2.3
					 */
					do_action( 'generate_after_loop', 'archive' );

				else :

					generate_do_template_part( 'none' );

				endif;
			}

			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
			</div>
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
