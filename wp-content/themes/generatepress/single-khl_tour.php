<?php
/**
 * The Template for displaying all tours single posts.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php

$langCode               = ICL_LANGUAGE_CODE;

$calendarUrl            =  '/' . $langCode . '/calendar';
$tour_book_url          = $tour_url . '#book-now';
$tour_title             = $post->post_title;
$feautured_image        = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$tour_short_desc        = get_post_meta($post->ID, 'khl_short_desc', true);
$tour_desc              = get_post_meta($post->ID, 'khl_tour_description', true);
$tour_highlights        = get_post_meta($post->ID, 'khl_tour_details_khl_highlights', true);
$tour_days              = get_post_meta($post->ID, 'khl_tour_details_khl_days', true);
$tour_nights            = get_post_meta($post->ID, 'khl_tour_details_khl_nights', true);
$tour_riding_days       = get_post_meta($post->ID, 'khl_tour_details_khl_riding_days', true);
$total_distance_km      = get_post_meta($post->ID, 'khl_tour_details_khl_total_distance', true);
$total_distance_m       = round($total_distance_km * 0.621371192, 0);
$starting_price         = get_post_meta($post->ID, 'khl_tour_prices_khl_pilot', true);
$price_bmw850           = get_post_meta($post->ID, 'khl_tour_prices_khl850', true);
$price_bmw900           = get_post_meta($post->ID, 'khl_tour_prices_khl900', true);
$price_bmw1250          = get_post_meta($post->ID, 'khl_tour_prices_khl1250', true);
$price_bmw1250gs        = get_post_meta($post->ID, 'khl_tour_prices_khl1250A', true);
$price_passenger        = get_post_meta($post->ID, 'khl_tour_prices_khl_passenger', true);
$price_single_room      = get_post_meta($post->ID, 'khl_tour_prices_khl_single_room_surcharge', true);
$tour_startfinish       =  get_post_meta($post->ID, 'khl_tour_details_khl_startfinish', true);
$tour_arr_accomodation  =  get_post_meta($post->ID, 'khl_tour_details_khl_accomodation', true);
$tour_accomodation      = "";

foreach ($tour_arr_accomodation as $accom) {
	if ($tour_accomodation != "") {
		$tour_accomodation .= ", ";
	}

	$tour_accomodation .= $accom;
}

$tour_language1 = get_post_meta($post->ID, 'khl_tour_details_khl_tour_language', true);
$tour_language = "";

foreach ($tour_language1 as $tour_lang) {
	if ($tour_lang != "") {
		$tour_lang .= ", ";
	}

	$tour_language .= $tour_lang;
}

$tour_min_group         = get_post_meta($post->ID, 'khl_tour_details_khl_min_members', true);
$tour_max_group         = get_post_meta($post->ID, 'khl_tour_details_khl_max_members', true);
$tour_arr_character     = get_post_meta($post->ID, 'khl_tour_details_khl_terrain_character', true);
$tour_character         = "";

foreach ($tour_arr_character as $tour_char) {
	if($tour_character != ""){
		$tour_character .= ", ";
	}

	$tour_character .= $tour_char;
}

$calc_form              = get_post_meta($post->ID, 'khl_calc_form', true);
$day10_desc             = get_post_meta($post->ID, 'khl_tour_events_khl_day_10', true);
$day10_title            = get_post_meta($post->ID, 'khl_tour_events_khl_day10_title', true);
$day11_desc             = get_post_meta($post->ID, 'khl_tour_events_khl_day_11', true);
$day11_title            = get_post_meta($post->ID, 'khl_tour_events_khl_day11_title', true);
$day12_desc             = get_post_meta($post->ID, 'khl_tour_events_khl_day_12', true);
$day12_title            = get_post_meta($post->ID, 'khl_tour_events_khl_day12_title', true);
$day13_desc             = get_post_meta($post->ID, 'khl_tour_events_khl_day_13', true);
$day13_title            = get_post_meta($post->ID, 'khl_tour_events_khl_day13_title', true);
$day14_desc             = get_post_meta($post->ID, 'khl_tour_events_khl_day_14', true);
$day14_title            = get_post_meta($post->ID, 'khl_tour_events_khl_day14_title', true);
$day1_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_1', true);
$day1_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day1_title', true);
$day2_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_2', true);
$day2_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day2_title', true);
$day3_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_3', true);
$day3_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day3_title', true);
$day4_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_4', true);
$day4_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day4_title', true);
$day5_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_5', true);
$day5_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day5_title', true);
$day6_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_6', true);
$day6_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day6_title', true);
$day7_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_7', true);
$day7_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day7_title', true);
$day8_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_8', true);
$day8_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day8_title', true);
$day9_desc              = get_post_meta($post->ID, 'khl_tour_events_khl_day_9', true);
$day9_title             = get_post_meta($post->ID, 'khl_tour_events_khl_day9_title', true);
$deposit                = get_post_meta($post->ID, 'khl_tour_prices_deposit_motorcycle', true);
$gallery                = get_post_meta($post->ID, 'khl_gallery', true);
$tour_events_arr        = get_post_meta($post->ID, 'khl_tour_events', true);
$tour_included_arr      = get_post_meta($post->ID, 'khl_what_is_included', true);
$tour_map               = get_post_meta($post->ID, 'khl_tour_map', true);
$tour_map_url           = wp_get_attachment_url( $tour_map, 'full' );
$tour_not_included_arr  = get_post_meta($post->ID, 'khl_not_included', true); ?>

	<div class="tour-content">
		<div class="tour-header">
			<img class="tour-feautured-img" src="<?php echo $feautured_image[0]; ?>" alt="" />

			<h1 class="tour-title"><?php printf( '%s', $tour_title ); ?></h1>

			<div class="tour-desc hide-on-mobile hide-on-tablet">
				<p><?php printf( '%s', $tour_short_desc); ?></p>
			</div>
		</div>

		<div class="tour-feautures">
			<div class="tour-feautures-item">
				<svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg"><path d="m300.1 156.473a40.729 40.729 0 1 0 -40.726 40.627 40.723 40.723 0 0 0 40.726-40.627zm-40.726 28.627a28.626 28.626 0 1 1 28.726-28.627 28.71 28.71 0 0 1 -28.726 28.627z"/><path d="m126.963 257.1a28.122 28.122 0 1 0 28.188 28.121 28.186 28.186 0 0 0 -28.188-28.121zm0 44.243a16.122 16.122 0 1 1 16.188-16.122 16.174 16.174 0 0 1 -16.188 16.126z"/><path d="m305.041 309.382a24.1 24.1 0 1 0 24.154 24.1 24.154 24.154 0 0 0 -24.154-24.1zm0 36.2a12.1 12.1 0 1 1 12.154-12.1 12.141 12.141 0 0 1 -12.154 12.099z"/><path d="m433.349 227.315a24.1 24.1 0 1 0 -24.154-24.1 24.154 24.154 0 0 0 24.154 24.1zm0-36.2a12.1 12.1 0 1 1 -12.154 12.1 12.141 12.141 0 0 1 12.154-12.1z"/><path d="m450.841 250.547 15.825-21.092a41.791 41.791 0 0 0 8.542-27.85c-1.425-21.836-19.31-38.943-40.718-38.943s-39.29 17.107-40.718 38.938a39.983 39.983 0 0 0 1.819 14.659l-98.964 1.815 15.273-20.367a66.771 66.771 0 0 0 13.672-44.5 67.663 67.663 0 0 0 -19.571-43.4 64.164 64.164 0 0 0 -90.777 0 67.655 67.655 0 0 0 -19.57 43.39c-1.02 15.251 3.818 31.034 13.666 44.5l13.212 17.609-140.632.927a6 6 0 0 0 -5.638 4.059l-65.939 192.767a6 6 0 0 0 5.677 7.941h480a6 6 0 0 0 5.726-7.791zm-45.1-48.16c.889-13.628 11.883-27.725 28.744-27.725s27.854 14.1 28.744 27.741a29.8 29.8 0 0 1 -6.162 19.844l-22.582 30.1-22.539-30.04a30.609 30.609 0 0 1 -6.2-19.92zm-4.341 25.763c.3.436.6.87.91 1.3l27.381 36.5a6 6 0 0 0 9.6 0l2.679-3.57 6.821 21.807-93.03.021-6.741-55.091zm-182.433-37.591c-8.142-11.133-12.168-24.117-11.335-36.567a55.664 55.664 0 0 1 16.093-35.708 52.165 52.165 0 0 1 73.783 0 55.68 55.68 0 0 1 16.1 35.725 54.789 54.789 0 0 1 -11.298 36.491l-41.693 55.571zm-194.573 218.441 31.17-91.125 35.488-.108 32.506 43.326a6 6 0 0 0 9.6 0l25.9-34.526.319 82.433zm132.63-99.714-28.667 38.208-28.623-38.149c-5.627-7.7-8.412-16.649-7.838-25.219 1.126-17.27 15.073-35.133 36.461-35.133s35.335 17.863 36.463 35.15a37.764 37.764 0 0 1 -7.796 25.143zm94.565 36.814a6 6 0 0 0 -1.788 4.275l.032 58.625h-78.456l-.377-99.389a48.862 48.862 0 0 0 5.8-26.266c-1.695-25.991-22.971-46.352-48.436-46.352s-46.74 20.361-48.435 46.342a48.539 48.539 0 0 0 4.041 22.453l-24.29.074 26.563-77.657 145.259-.953 24.322 32.418a6 6 0 0 0 9.6 0l22.076-29.431 49.459-.907 7.536 61.6a6 6 0 0 0 5.956 5.271l102.094-.023 15.055 48.127-121.885.207a39.978 39.978 0 0 0 1.186-12.642c-1.424-21.838-19.31-38.944-40.718-38.944s-39.294 17.106-40.718 38.934a39.613 39.613 0 0 0 1.244 12.673l-10.818-.161a5.834 5.834 0 0 0 -4.302 1.726zm77.175 6.413-22.582 30.1-22.538-30.039a30.606 30.606 0 0 1 -6.206-19.919c.889-13.629 11.884-27.725 28.744-27.725s27.855 14.1 28.745 27.742a29.815 29.815 0 0 1 -6.163 19.842zm-66.931 56.487-.029-52.537 10.113.15q.975 1.579 2.084 3.1l27.381 36.5a6 6 0 0 0 9.6 0l27.377-36.489q1.173-1.56 2.193-3.2l130.8-.222 16.484 52.698z"/></svg>

				<div class="feautures-inner-itm">
					<h3 class="toour"><?php echo __('Highlights', 'khl_template'); ?></h3>

					<p><?php printf( '%s', $tour_highlights); ?></p>
				</div>
			</div>

			<div class="tour-feautures-item">
				<svg height="60" viewBox="0 0 64 64" width="60" xmlns="http://www.w3.org/2000/svg"><path d="m56 40.10529v-28.10529c0-2.75684-2.24316-5-5-5h-2v-2c0-1.6543-1.3457-3-3-3s-3 1.3457-3 3v2h-5v-2c0-1.6543-1.3457-3-3-3s-3 1.3457-3 3v2h-6v-2c0-1.6543-1.3457-3-3-3s-3 1.3457-3 3v2h-5v-2c0-1.6543-1.3457-3-3-3s-3 1.3457-3 3v2h-2c-2.75684 0-5 2.24316-5 5v40c0 2.75684 2.24316 5 5 5h33.62347c2.07868 3.58081 5.94617 6 10.37653 6 6.61719 0 12-5.38281 12-12 0-4.83142-2.87561-8.99408-7-10.89471zm-11-35.10529c0-.55176.44824-1 1-1s1 .44824 1 1v6c0 .55176-.44824 1-1 1s-1-.44824-1-1zm-11 0c0-.55176.44824-1 1-1s1 .44824 1 1v6c0 .55176-.44824 1-1 1s-1-.44824-1-1zm-12 0c0-.55176.44824-1 1-1s1 .44824 1 1v6c0 .55176-.44824 1-1 1s-1-.44824-1-1zm-11 0c0-.55176.44824-1 1-1s1 .44824 1 1v6c0 .55176-.44824 1-1 1s-1-.44824-1-1zm-4 4h2v2c0 1.6543 1.3457 3 3 3s3-1.3457 3-3v-2h5v2c0 1.6543 1.3457 3 3 3s3-1.3457 3-3v-2h6v2c0 1.6543 1.3457 3 3 3s3-1.3457 3-3v-2h5v2c0 1.6543 1.3457 3 3 3s3-1.3457 3-3v-2h2c1.6543 0 3 1.3457 3 3v5h-50v-5c0-1.6543 1.3457-3 3-3zm0 46c-1.6543 0-3-1.3457-3-3v-33h50v20.39484c-.96082-.24866-1.96246-.39484-3-.39484-.6828 0-1.34808.07056-2 .1806v-5.1806c0-.55273-.44727-1-1-1h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h2.38086c-3.23914 2.15106-5.38086 5.82843-5.38086 10 0 1.40411.25494 2.74664.70001 4zm40-16h-4v-4h4zm4 22c-5.51367 0-10-4.48633-10-10s4.48633-10 10-10 10 4.48633 10 10-4.48633 10-10 10z"/><path d="m52 49.2774v-6.2774h-2v6.2774c-.59528.34644-1 .98413-1 1.7226 0 .10126.01526.19836.02979.29553l-3.65479 2.92322 1.25 1.5625 3.65161-2.92133c.22492.08759.46753.14008.72339.14008 1.10455 0 2-.89545 2-2 0-.73846-.40472-1.37616-1-1.7226z"/><path d="m15 22h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/><path d="m26 22h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/><path d="m37 22h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/><path d="m42 30h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1zm1-6h4v4h-4z"/><path d="m15 33h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/><path d="m26 33h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/><path d="m37 33h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/><path d="m15 44h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/><path d="m26 44h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/><path d="m37 44h-6c-.55273 0-1 .44727-1 1v6c0 .55273.44727 1 1 1h6c.55273 0 1-.44727 1-1v-6c0-.55273-.44727-1-1-1zm-1 6h-4v-4h4z"/></svg>

				<div class="feautures-inner-itm">
					<h3 class="toour"><?php echo __('Duration', 'khl_template'); ?></h3>

					<p><?php printf( '%s ' . __('days', 'khl_template') . ', %s ' . __('nights', 'khl_template') . ', %s ' . __('riding days', 'khl_template'), $tour_days, $tour_nights, $tour_riding_days); ?></p>
				</div>
			</div>

			<div class="tour-feautures-item">
				<svg  height="60" width="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<path d="M426.667,0c-47.052,0-85.333,38.281-85.333,85.333c0,40.814,60.469,123.419,74.637,142.22
				c-0.004,6.073,0,12.036-0.147,17.509c-0.156,5.885,4.49,10.792,10.385,10.948c0.094,0,0.188,0,0.292,0
				c5.75,0,10.5-4.594,10.656-10.385c0.147-5.616,0.143-11.746,0.147-17.992C451.378,208.961,512,126.195,512,85.333
				C512,38.281,473.719,0,426.667,0z M426.667,106.667c-11.76,0-21.333-9.573-21.333-21.333c0-11.76,9.573-21.333,21.333-21.333
				S448,73.573,448,85.333C448,97.094,438.427,106.667,426.667,106.667z"/>
					<path d="M326.5,307.427c-17.604,9.99-27.385,27.333-33.219,39.5c-2.552,5.313-0.313,11.688,5,14.229
				c1.49,0.719,3.063,1.052,4.604,1.052c3.979,0,7.792-2.229,9.625-6.052c7.406-15.448,14.969-24.75,24.531-30.188
				c5.115-2.906,6.917-9.417,4-14.542C338.146,306.302,331.656,304.5,326.5,307.427z"/>
					<path d="M229.427,462.281c-10.688,8.469-22.833,14.844-37.146,19.5c-5.604,1.823-8.667,7.844-6.844,13.448
				c1.469,4.5,5.646,7.365,10.146,7.365c1.094,0,2.208-0.167,3.302-0.521c16.531-5.375,31.26-13.135,43.792-23.063
				c4.615-3.667,5.396-10.375,1.74-14.99C240.729,459.417,234.031,458.594,229.427,462.281z"/>
					<path d="M289.573,384.438c-5.521-2.146-11.667,0.594-13.802,6.094c-4.781,12.354-10.76,26.76-18.823,39.958
				c-3.073,5.031-1.479,11.594,3.542,14.667c1.74,1.063,3.656,1.563,5.552,1.563c3.594,0,7.104-1.813,9.115-5.104
				c8.938-14.646,15.385-30.146,20.51-43.375C297.792,392.75,295.063,386.573,289.573,384.438z"/>
					<path d="M422.708,281.021c-4.844-3.281-11.5-2.021-14.813,2.854c-3.51,5.188-10.698,12.323-32.438,14.271
				c-5.865,0.531-10.198,5.708-9.667,11.583c0.5,5.542,5.156,9.708,10.615,9.708c0.323,0,0.646-0.01,0.969-0.042
				c23.094-2.073,38.854-9.781,48.188-23.563C428.865,290.958,427.583,284.323,422.708,281.021z"/>
					<path d="M153.275,490.805C186.932,454.913,256,372.341,256,298.667c0-71.771-56.229-128-128-128s-128,56.229-128,128
				c0,94.615,114.068,204.146,120.443,210.19c0,0,0.026,0.026,0.038,0.038c0.035,0.033,0.169,0.163,0.197,0.189
				c0.441,0.419,0.991,0.613,1.48,0.941c0.605,0.408,1.152,0.889,1.837,1.168C125.28,511.715,126.634,512,128,512
				c7.771,0,15.156-0.271,22.156-0.802c5.875-0.448,10.281-5.563,9.833-11.438C159.669,495.556,156.948,492.277,153.275,490.805z
				 M128,362.667c-35.292,0-64-28.708-64-64c0-35.292,28.708-64,64-64s64,28.708,64,64C192,333.958,163.292,362.667,128,362.667z"/>
				</svg>

				<div class="feautures-inner-itm">
					<h3 class="toour"><?php echo __('Total Distance', 'khl_template'); ?></h3>

					<p><?php printf( '%s ' . __('km', 'khl_template') . '(%s' . __('miles', 'khl_template') . ')', $total_distance_km, $total_distance_m); ?></p>
				</div>
			</div>

			<div class="tour-feautures-item">
				<svg height="60" viewBox="-32 0 480 480.011" width="60" xmlns="http://www.w3.org/2000/svg"><path d="m128.003906 280.011719c8.839844 0 16 7.164062 16 16 0 4.417969 3.582032 8 8 8 4.417969 0 8-3.582031 8-8-.054687-14.546875-9.914062-27.226563-24-30.863281v-9.136719c0-4.417969-3.582031-8-8-8-4.417968 0-8 3.582031-8 8v9.136719c-15.585937 4.011718-25.75 18.992187-23.71875 34.957031 2.03125 15.964843 15.625 27.925781 31.71875 27.90625 8.839844 0 16 7.164062 16 16 0 8.835937-7.160156 16-16 16-8.835937 0-16-7.164063-16-16 0-4.417969-3.582031-8-8-8-4.417968 0-8 3.582031-8 8 .054688 14.546875 9.917969 27.226562 24 30.863281v9.136719c0 4.417969 3.582032 8 8 8 4.417969 0 8-3.582031 8-8v-9.113281c15.636719-3.972657 25.851563-18.980469 23.816406-34.980469-2.035156-16.003907-15.683593-27.976563-31.816406-27.90625-8.835937 0-16-7.164063-16-16 0-8.835938 7.164063-16 16-16zm0 0"/><path d="m152.003906 200.011719h-48c-4.417968 0-8 3.582031-8 8s3.582032 8 8 8h48c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm0 0"/><path d="m152.003906 424.011719h-48c-4.417968 0-8 3.582031-8 8s3.582032 8 8 8h48c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm0 0"/><path d="m406.347656 308.011719-117.445312-203.402344c7.226562-7.167969 13.621094-15.132813 19.054687-23.742187 13.335938-21.601563 15.71875-42.105469 6.703125-57.71875-17.941406-31.082032-74.605468-30.832032-129 .566406-7.222656 4.230468-14.167968 8.914062-20.796875 14.023437l-6.457031-7.328125c-7.699219-8.71875-18.769531-13.71875-30.402344-13.726562-11.628906.007812-22.699218 5.007812-30.398437 13.726562l-87.457031 99.105469c-6.539063 7.40625-10.148438 16.949219-10.14453175 26.832031v251.664063c.04687495 39.746093 32.25390575 71.957031 71.99999975 72h112c39.746094-.042969 71.957032-32.253907 72-72v-251.664063c-.015625-7.707031-2.238281-15.25-6.398437-21.738281h.0625c9.566406-5.53125 18.644531-11.863281 27.136719-18.925781l115.6875 200.328125c15.476562 26.785156 6.304687 61.042969-20.488282 76.511719l-96.992187 56c-4.265625 2.4375-8.839844 4.300781-13.597657 5.535156-4.269531 1.136718-6.8125 5.519531-5.675781 9.789062 1.132813 4.269532 5.515625 6.8125 9.789063 5.675782 6.101562-1.605469 11.96875-4.007813 17.445312-7.144532l96.992188-56c34.457031-19.871094 46.273437-63.917968 26.382812-98.367187zm-166.34375 100c-.035156 30.914062-25.085937 55.964843-56 56h-112c-30.910156-.035157-55.964844-25.085938-56-56v-251.664063c0-5.984375 2.183594-11.761718 6.144532-16.25l87.457031-99.09375c4.65625-5.285156 11.355469-8.316406 18.398437-8.320312 7.042969.003906 13.746094 3.035156 18.402344 8.320312l78.023438 88.421875c-17.835938 8.414063-37.328126 12.738281-57.046876 12.65625.363282-2.003906.570313-4.035156.621094-6.070312-.023437-22.082031-17.917968-39.972657-40-40-.878906.027343-1.746094.203125-2.566406.519531-4.03125-.496094-7.78125 2.144531-8.679688 6.105469-2.847656 10.933593-1.449218 22.539062 3.910157 32.484375 5.316406 8.804687 13.585937 15.433594 23.335937 18.699218-7.011718 6.398438-17.148437 8.035157-25.820312 4.175782-8.675782-3.863282-14.238282-12.492188-14.179688-21.984375 0-4.417969-3.582031-8-8-8-4.417968 0-8 3.582031-8 8-.019531 17.734375 11.652344 33.359375 28.667969 38.367187 17.011719 5.007813 35.289063-1.800781 44.878906-16.71875 3.148438.332032 6.3125.507813 9.480469.519532 22.332031-.675782 44.253906-6.195313 64.246094-16.175782 3.050781 4.164063 4.703125 9.183594 4.726562 14.34375zm-88-272c-.03125 1.171875-.148437 2.339843-.351562 3.496093-7.058594-1.835937-13.171875-6.253906-17.125-12.386718-2.46875-4.503906-3.527344-9.644532-3.042969-14.757813 11.75 1.722657 20.472656 11.773438 20.519531 23.648438zm89.65625-15.328125c-.796875.464844-1.597656.863281-2.398437 1.3125l-63.761719-72.265625c5.804688-4.402344 11.871094-8.449219 18.160156-12.121094 45.066406-26.03125 94.136719-28.972656 107.136719-6.398437 5.945313 10.28125 3.648437 24.960937-6.457031 41.320312-3.996094 6.347656-8.601563 12.289062-13.757813 17.734375l-.082031-.144531c-4.933594-8.558594-12.832031-15.019532-22.199219-18.167969l-31.328125-10.589844c-4.140625-1.261719-8.535156 1-9.914062 5.101563-1.382813 4.105468.753906 8.5625 4.820312 10.058594l31.328125 10.535156c5.667969 1.910156 10.445313 5.820312 13.4375 11l2.039063 3.527344c-8.394532 7.199218-17.441406 13.597656-27.023438 19.121093zm0 0"/><path d="m273.078125 322.46875c2.207031 3.824219 7.101563 5.136719 10.925781 2.925781l55.425782-32c2.496093-1.417969 4.039062-4.066406 4.046874-6.9375.003907-2.871093-1.527343-5.523437-4.015624-6.953125-2.492188-1.429687-5.554688-1.417968-8.03125.035156l-55.425782 32c-3.824218 2.210938-5.136718 7.101563-2.925781 10.929688zm0 0"/><path d="m283.207031 372.011719c2.203125 3.828125 7.097657 5.144531 10.925781 2.933593l69.28125-40c3.828126-2.207031 5.140626-7.101562 2.929688-10.929687-2.207031-3.828125-7.101562-5.140625-10.929688-2.933594l-69.28125 40c-3.824218 2.210938-5.136718 7.101563-2.925781 10.929688zm0 0"/><path d="m287.726562 275.828125c1.402344 0 2.78125-.371094 4-1.074219l27.710938-16c2.496094-1.417968 4.039062-4.066406 4.046875-6.9375.003906-2.867187-1.527344-5.523437-4.015625-6.953125-2.488281-1.429687-5.554688-1.417969-8.03125.035157l-27.710938 16c-3.136718 1.8125-4.664062 5.5-3.726562 9 .9375 3.496093 4.105469 5.929687 7.726562 5.929687zm0 0"/></svg>

				<div class="feautures-inner-itm">
					<h3 class="toour"><?php echo __('from', 'khl_template'); ?></h3>

					<p><?php printf( '%s EUR', $starting_price); ?></p>
				</div>
			</div>

			<div class="tour-feautures-item">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60" height="60"><path d="M352,16H192a40.045,40.045,0,0,0-40,40V80a80,80,0,0,0,0,160V392a40.045,40.045,0,0,0,40,40H303.817l.183.319V488a8,8,0,0,0,8,8H432a8,8,0,0,0,8-8V433.7l15.519-42.674a8.021,8.021,0,0,0,.481-2.735V288a24,24,0,0,0-32-22.629V264a23.982,23.982,0,0,0-32-22.62V56A40.045,40.045,0,0,0,352,16ZM192,32H352a24.039,24.039,0,0,1,22.624,16H169.376A24.039,24.039,0,0,1,192,32ZM168,64H376V233.381a23.944,23.944,0,0,0-16-.01V120a8,8,0,0,0-8-8H215.956A80.135,80.135,0,0,0,168,81.61Zm152,80H288a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h25.376A23.889,23.889,0,0,0,312,200v8H288a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h24v36.991a37.509,37.509,0,0,0-8,2.4V280a8,8,0,0,0-8-8H248a8,8,0,0,0-8,8v40H200V223.956A80.454,80.454,0,0,0,225.3,192H256a8,8,0,0,0,8-8V152a8,8,0,0,0-8-8H230.39a79.256,79.256,0,0,0-5.09-16H344v49.376a23.944,23.944,0,0,0-16,0V152A8,8,0,0,0,320,144Zm-8,16v16H296V160Zm0,64v16H296V224Zm-24,64v21.131A46.171,46.171,0,0,0,282.945,320H256V288ZM232,176V160h16v16Zm-80,48a64,64,0,1,1,64-64A64.072,64.072,0,0,1,152,224Zm16,14.39a79.277,79.277,0,0,0,16-5.09V328a8,8,0,0,0,8,8h88.122c-.077,1.407-.122,2.833-.122,4.286V384H168ZM192,416a24.039,24.039,0,0,1-22.624-16H285.49l9.163,16ZM400,256a8.009,8.009,0,0,1,8,8v72a8,8,0,0,0,16,0V288a8,8,0,0,1,16,0v98.877l-15.519,42.675a8.02,8.02,0,0,0-.481,2.734V480H320V430.19a7.99,7.99,0,0,0-1.058-3.975L296,386.157V340.286c0-8.273,1.742-25.968,16-30.766V336a8,8,0,0,0,16,0V304a8.008,8.008,0,0,0-.225-1.857,8,8,0,0,0,.225-1.857V200a8,8,0,0,1,16,0V309.048a8,8,0,0,0,16,0V256a8,8,0,0,1,16,0v64a8,8,0,0,0,16,0V264A8.009,8.009,0,0,1,400,256Z"/><path d="M256,208H224a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h32a8,8,0,0,0,8-8V216A8,8,0,0,0,256,208Zm-8,32H232V224h16Z"/><path d="M178.343,130.343,136,172.687l-10.343-10.344a8,8,0,0,0-11.314,11.314l16,16a8,8,0,0,0,11.314,0l48-48a8,8,0,0,0-11.314-11.314Z"/><path d="M256,96h96a8,8,0,0,0,0-16H256a8,8,0,0,0,0,16Z"/><circle cx="224" cy="88" r="8"/><path d="M224,352H192a8,8,0,0,0,0,16h32a8,8,0,0,0,0-16Z"/></svg>

				<div class="feautures-inner-itm">
					<p>
						<a href="<?php echo $tour_book_url; ?>" class="button-book first-button"><?php echo __('Book Now', 'khl_template'); ?></a>
					</p>
				</div>
			</div>
		</div>

		<div class="two-col cont-500">
			<div class="col bordered shadowed-left">
				<h2><?php echo __('Tour Overview', 'khl_template'); ?></h2>

				<p><?php printf( '%s', $tour_desc); ?></p>

				<div class="tour-overview-specs">
					<ul>
						<li><?php echo __('Start/Finish: ', 'khl_template'); ?> <?php printf( '%s', $tour_startfinish); ?></li>
						<li><?php echo __('Accomodation: ', 'khl_template'); ?><?php printf( '%s', $tour_accomodation); ?></li>
						<li><?php echo __('Tour dates: ', 'khl_template'); ?><a href="<?php echo $calendarUrl; ?>"><?php echo __('Calendar', 'khl_template'); ?></a></li>
						<li><?php echo __('Highlights: ', 'khl_template'); ?><?php printf( '%s', $tour_highlights); ?></li>
						<li><?php echo __('Duration: ', 'khl_template'); ?><?php printf( '%s ' . __('days', 'khl_template') . ', %s ' . __('nights', 'khl_template') . ', %s ' . __('riding days', 'khl_template'), $tour_days, $tour_nights, $tour_riding_days); ?></li>
						<li><?php echo __('Guide language: ', 'khl_template'); ?><?php printf( '%s', $tour_language); ?></li>
						<li><?php echo __('Group: ', 'khl_template'); ?><?php printf( '%s - %s ', $tour_min_group, $tour_max_group); ?><?php echo __('members', 'khl_template'); ?></li>
						<li><?php echo __('Terrain character: ', 'khl_template'); ?><?php printf( '%s', $tour_character); ?></li>
					</ul>
				</div>
			</div>

			<div class="col">
				<img class="map-img" src="<?php printf( '%s', $tour_map_url); ?>" alt="" />
			</div>
		</div>

		<div class="itinerary">
			<h2><?php echo __('Day by day schedule: ', 'khl_template'); ?></h2>

			<div class="days-cont">
				<?php if ($day1_title && $day1_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>1</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 1', 'khl_template'); ?>. <?php echo $day1_title; ?></h3>
							<p><?php echo $day1_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day2_title && $day2_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>2</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 2', 'khl_template'); ?>. <?php echo $day2_title; ?></h3>
							<p><?php echo $day2_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day3_title && $day3_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>3</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 3', 'khl_template'); ?>. <?php echo $day3_title; ?></h3>
							<p><?php echo $day3_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day4_title && $day4_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>4</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 4', 'khl_template'); ?>. <?php echo $day4_title; ?></h3>
							<p><?php echo $day4_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day5_title && $day5_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>5</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 5', 'khl_template'); ?>. <?php echo $day5_title; ?></h3>
							<p><?php echo $day5_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day6_title && $day6_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>6</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 6', 'khl_template'); ?>. <?php echo $day6_title; ?></h3>
							<p><?php echo $day6_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day7_title && $day7_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>7</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 7', 'khl_template'); ?>. <?php echo $day7_title; ?></h3>
							<p><?php echo $day7_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day8_title && $day8_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>8</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 8', 'khl_template'); ?>. <?php echo $day8_title; ?></h3>
							<p><?php echo $day8_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day9_title && $day9_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>9</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 9', 'khl_template'); ?>. <?php echo $day9_title; ?></h3>
							<p><?php echo $day9_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day10_title && $day10_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>10</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 10', 'khl_template'); ?>. <?php echo $day10_title; ?></h3>
							<p><?php echo $day10_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day11_title && $day11_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>11</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 11', 'khl_template'); ?>. <?php echo $day11_title; ?></h3>
							<p><?php echo $day11_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day12_title && $day12_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>12</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 12', 'khl_template'); ?>. <?php echo $day12_title; ?></h3>
							<p><?php echo $day12_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day13_title && $day13_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>13</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 13', 'khl_template'); ?>. <?php echo $day13_title; ?></h3>
							<p><?php echo $day13_desc; ?></p>
						</div>
					</div>
				<?php } ?>

				<?php if ($day14_title && $day14_desc) { ?>
					<div class="day-cont">
						<div class="day-circle"><strong>14</strong></div>

						<div class="day-desc">
							<h3><?php echo __('Day 14', 'khl_template'); ?>. <?php echo $day14_title; ?></h3>
							<p><?php echo $day14_desc; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="col top-border">
			<div class="inner-coll">
				<?php echo do_shortcode($gallery); ?>
			</div>
		</div>

		<div class="col top-border">
			<div class="inner-coll">
				<h2><?php echo __('What is included in the tour ', 'khl_template'); ?></h2>

				<div class="flex-cont-row">
					<ul class="included-list">
						<h3><?php echo __('Include: ', 'khl_template'); ?></h3>

						<?php foreach($tour_included_arr as $tour_included) {
							echo '<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="15" height="15"><circle style="fill:#14c304;" cx="25" cy="25" r="25"/><line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="25" y1="13" x2="25" y2="38"/><line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="37.5" y1="25" x2="12.5" y2="25"/></svg>'. $tour_included . '</li>';
						} ?>
					</ul>

					<ul class="included-list">
						<h3><?php echo __('Not included: ', 'khl_template'); ?></h3>

						<?php foreach($tour_not_included_arr as $tour_not_included) {
							echo '<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="15" width="15"><circle style="fill:#FF0000;" cx="25" cy="25" r="25"/><line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="38" y1="25" x2="12" y2="25"/></svg>'. $tour_not_included . '</li>';
						} ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="col top-border" id="book-now">
			<div class="inner-coll">
				<h2><?php echo __('Tour pricing: ', 'khl_template'); ?></h2>

				<div class="flex-cont-row">
					<ul class="included-list">
						<h3><?php echo __('Price per rider: ', 'khl_template'); ?></h3>

						<?php if ($price_bmw850 > 0) { ?>
							<li>BMW F 850 GS: <?php echo $price_bmw850; ?> €</li>
						<?php } ?>

						<?php if ($price_bmw1250 > 0) { ?>
							<li>BMW R 1250 GS: <?php echo $price_bmw1250; ?> €</li>
						<?php } ?>

						<?php if ($price_bmw1250gs > 0) { ?>
							<li>BMW R 1250 GS Adventure: <?php echo $price_bmw1250gs; ?> €</li>
						<?php } ?>

						<li><?php echo __('Own motorcycle: ', 'khl_template'); echo $starting_price; ?> €</li>
					</ul>

					<ul class="included-list">
						<h3><?php echo __('Additional', 'khl_template'); ?></h3>

						<?php if ($price_passenger > 0) { ?>
							<li><?php echo __('Passenger: ', 'khl_template'); echo $price_passenger; ?> €</li>
						<?php } ?>

						<?php if ($price_single_room > 0) { ?>
							<li><?php echo __('Single room: ', 'khl_template'); echo $price_single_room; ?> €</li>
						<?php } ?>

						<?php if ($deposit > 0) { ?>
							<li><?php echo __('Deposit motorcycle: ', 'khl_template'); echo $deposit; ?> €</li>
						<?php } ?>

						<li class="text-red"><?php echo __('(The deposit is refundable at 100% upon return of the bike without damage after the end of the tour)', 'khl_template'); ?></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="book js-book">
			<div class="book_actions">
				<button class="btn_primary js-feedback-btn">
					<?php if ($langCode == 'bg') { ?>
						Изпрати заявка
					<?php }
					elseif ($langCode == 'de') { ?>
						Anfrage senden
					<?php }
					elseif ($langCode == 'en') { ?>
						Send request
					<?php }
					elseif ($langCode == 'ru') { ?>
						Послать запрос
					<?php } ?>
				</button>

				<button class="btn_primary js-fullform-btn">
					<?php if ($langCode == 'bg') { ?>
						Попълнете заявлението сами
					<?php }
					elseif ($langCode == 'de') { ?>
						Füllen Sie den Antrag selbst aus
					<?php }
					elseif ($langCode == 'en') { ?>
						Fill out the application yourself
					<?php }
					elseif ($langCode == 'ru') { ?>
						Заполните заявку самостоятельно
					<?php } ?>
				</button>
			</div>

			<div class="book_form_fullX js-book-form-full">
				<?php echo do_shortcode($calc_form); ?>
			</div>
		</div>
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

