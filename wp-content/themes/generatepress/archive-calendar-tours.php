<?php
/**
 * Template Name: Calendar
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>



<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<h1><?php echo __('Motorcycle Tours Calendar', 'khl_template'); ?></h1>

		<div class="tours-cont">
			<?php setlocale(LC_ALL, 'nl_NL');
			$tour_days = get_post_meta($post->ID, 'khl_tour_details_khl_days', true);
			$args = array(
				'order'             => 'ASC',
				'orderby'           => 'title',
				'post_status'       => 'publish',
				'post_type'         => 'khl_tour',
				'posts_per_page'    => 8,
			);

			$loop           = new WP_Query( $args );
			$today          = date("jS F");
			$tours_array    = array();

			// tours prices
			$price_5_countries  = '4100 €';
			$price_offroad_11   = '3500 €';
			$price_offroad_7    = '2400 €';
			$price_romania      = '2600 €';
			$price_turkey       = '3850 €';

			while ( $loop->have_posts() ) :
				$loop->the_post();
				$tour_url           = rtrim(get_permalink( $post->ID ), '/');
				$tour_book_url      = $tour_url . '#book-now';
				$tour_start         = get_post_meta($post->ID, 'khl_tour_details_khl_start', true);
				$tour_end           = get_post_meta($post->ID, 'khl_tour_details_khl_end', true);
				$tour_start2        = get_post_meta($post->ID, 'khl_tour_details_khl_start2', true);
				$tour_end2          = get_post_meta($post->ID, 'khl_tour_details_khl_end2', true);
				$tour_start3        = get_post_meta($post->ID, 'khl_tour_details_khl_start3', true);
				$tour_end3          = get_post_meta($post->ID, 'khl_tour_details_khl_end3', true);
				$tour_start4        = get_post_meta($post->ID, 'khl_tour_details_khl_start4', true);
				$tour_end4          = get_post_meta($post->ID, 'khl_tour_details_khl_end4', true);
				$tour_start5        = get_post_meta($post->ID, 'khl_tour_details_khl_start5', true);
				$tour_end5          = get_post_meta($post->ID, 'khl_tour_details_khl_end5', true);
				$tour_start6        = get_post_meta($post->ID, 'khl_tour_details_khl_start6', true);
				$tour_end6          = get_post_meta($post->ID, 'khl_tour_details_khl_end6', true);

				if ($tour_start2) {
					$sdate2     = DateTime::createFromFormat("Ymd", $tour_start2);
					$s_start    = $sdate2->format('jS F');
					$edate2     = DateTime::createFromFormat("Ymd", $tour_end2);
					$s_end      = $edate2->format('jS F');
				}

				if ($tour_start3) {
					$sdate3 = DateTime::createFromFormat("Ymd", $tour_start3);
					$t_start = $sdate3->format('jS F');
					$edate3 = DateTime::createFromFormat("Ymd", $tour_end3);
					$t_end = $edate3->format('jS F');
				}

				if ($tour_start4) {
					$sdate4 = DateTime::createFromFormat("Ymd", $tour_start4);
					$fo_start = $sdate4->format('jS F');
					$edate4 = DateTime::createFromFormat("Ymd", $tour_end4);
					$fo_end = $edate4->format('jS F');
				}

				if ($tour_start5) {
					$sdate5 = DateTime::createFromFormat("Ymd", $tour_start5);
					$fi_start = $sdate5->format('jS F');
					$edate5 = DateTime::createFromFormat("Ymd", $tour_end5);
					$fi_end = $edate5->format('jS F');
				}

				if ($tour_start6) {
					$sdate6 = DateTime::createFromFormat("Ymd", $tour_start6);
					$si_start = $sdate6->format('jS F');
					$edate6 = DateTime::createFromFormat("Ymd", $tour_end6);
					$si_end = $edate6->format('jS F');
				}

				$sdate      = DateTime::createFromFormat("Ymd", $tour_start);
				$f_start    = $sdate->format('jS F');
				$edate      = DateTime::createFromFormat("Ymd", $tour_end);
				$f_end      = $edate->format('jS F');

				$tour_title         = $post->post_title;
				$tour_highlights    = get_post_meta($post->ID, 'khl_tour_details_khl_highlights', true);
				$tour_days          = get_post_meta($post->ID, 'khl_tour_details_khl_days', true);
				$tour_min_price     = get_post_meta($post->ID, 'khl_tour_prices_khl_passenger', true);

				$new_tour =
					array(
						"tour_fsdate"       => $f_start,
						"tour_fedate"       => $f_end,
						"tour_title"        => $tour_title,
						"tour_url"          => $tour_url,
						"tour_book_url"     => $tour_book_url,
						"tour_destinations" => $tour_highlights,
						"tour_duration"     => $tour_days,
						"tour_price"        => $tour_min_price,
					);

				array_push($tours_array, $new_tour);

				if ($tour_start2) {
					$new_tour2 =
						array(
							"tour_fsdate"       => $s_start,
							"tour_fedate"       => $s_end,
							"tour_title"        => $tour_title,
							"tour_url"          => $tour_url,
							"tour_book_url"     => $tour_book_url,
							"tour_destinations" => $tour_highlights,
							"tour_duration"     => $tour_days,
							"tour_price"        => $tour_min_price,
						);

					array_push($tours_array, $new_tour2);
				}

				if ($tour_start3) {
					$new_tour3 =
						array(
							"tour_fsdate"       => $t_start,
							"tour_fedate"       => $t_end,
							"tour_title"        => $tour_title,
							"tour_url"          => $tour_url,
							"tour_book_url"     => $tour_book_url,
							"tour_destinations" => $tour_highlights,
							"tour_duration"     => $tour_days,
							"tour_price"        => $tour_min_price,
						);
					array_push($tours_array, $new_tour3);
				}

				if ($tour_start4) {
					$new_tour4 =
						array(
							"tour_fsdate"       => $fo_start,
							"tour_fedate"       => $fo_end,
							"tour_title"        => $tour_title,
							"tour_url"          => $tour_url,
							"tour_book_url"     => $tour_book_url,
							"tour_destinations" => $tour_highlights,
							"tour_duration"     => $tour_days,
							"tour_price"        => $tour_min_price,
						);
					array_push($tours_array, $new_tour4);
				}

				if ($tour_start5) {
					$new_tour5 =
						array(
							"tour_fsdate"       => $fi_start,
							"tour_fedate"       => $fi_end,
							"tour_title"        => $tour_title,
							"tour_url"          => $tour_url,
							"tour_book_url"     => $tour_book_url,
							"tour_destinations" => $tour_highlights,
							"tour_duration"     => $tour_days,
							"tour_price"        => $tour_min_price,
						);
					array_push($tours_array, $new_tour5);
				}

				if ($tour_start6) {
					$new_tour6 =
						array(
							"tour_fsdate"       => $si_start,
							"tour_fedate"       => $si_end,
							"tour_title"        => $tour_title,
							"tour_url"          => $tour_url,
							"tour_book_url"     => $tour_book_url,
							"tour_destinations" => $tour_highlights,
							"tour_duration"     => $tour_days,
							"tour_price"        => $tour_min_price,
						);
					array_push($tours_array, $new_tour6);
				}

			endwhile;

			echo"<br /><br /><br />";

			function date_compare($a, $b) {
				$t1 = strtotime($a["tour_fsdate"]);
				$t2 = strtotime($b["tour_fsdate"]);
				return $t1 - $t2;
			}

			usort($tours_array, 'date_compare'); ?>



			<div class="tours-calendar">
				<ul class="calendar-list calendar-bold hide-on-mobile hide-on-tablet">
					<li class="calendar-19"><?php echo __('Date', 'khl_template'); ?></li>
					<li class="calendar-19"><?php echo __('Tour', 'khl_template'); ?></li>
					<li class="calendar-19"><?php echo __('Highlights', 'khl_template'); ?></li>
					<li class="calendar-19 cal-center"><?php echo __('Duration', 'khl_template'); ?></li>
					<li class="calendar-10"><?php echo __('Price from', 'khl_template'); ?></li>
					<li class="calendar-14"></li>
				</ul>

				<?php
				// en
				if (get_locale() == 'en_US') { ?>
<!--					<h2>April 2022</h2>-->

<!--					<a class="calendar_item" href="/moto-tours/turkey/">-->
<!--						<span class="calendar_item__date">8 - 18 April</span>-->
<!--						<span class="calendar_item__title">Turkey</span>-->
<!--						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>-->
<!--						<span class="calendar_item__days">11 days</span>-->
<!--						<span class="calendar_item__price">2450</span>-->
<!--						<span class="calendar_item__book">More details</span>-->
<!--					</a>-->

<!--					<a class="calendar_item" href="/moto-tours/turkey/">-->
<!--						<span class="calendar_item__date">29 April - 9 Mai</span>-->
<!--						<span class="calendar_item__title">Turkey</span>-->
<!--						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>-->
<!--						<span class="calendar_item__days">11 days</span>-->
<!--						<span class="calendar_item__price">2450</span>-->
<!--						<span class="calendar_item__book">More details</span>-->
<!--					</a>-->

<!--					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">-->
<!--						<span class="calendar_item__date">30 April - 10 Mai</span>-->
<!--						<span class="calendar_item__title">Bulgaria | Offroad | 11 days</span>-->
<!--						<span class="calendar_item__desc">Bulgaria | Offroad</span>-->
<!--						<span class="calendar_item__days">11 days</span>-->
<!--						<span class="calendar_item__price">3500</span>-->
<!--						<span class="calendar_item__book">More details</span>-->
<!--					</a>-->



<!--					<h2>May 2022</h2>-->
<!---->
<!--					<a class="calendar_item" href="/moto-tours/turkey/">-->
<!--						<span class="calendar_item__date">20 - 30 May</span>-->
<!--						<span class="calendar_item__title">Turkey</span>-->
<!--						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>-->
<!--						<span class="calendar_item__days">11 days</span>-->
<!--						<span class="calendar_item__price">2450</span>-->
<!--						<span class="calendar_item__book">More details</span>-->
<!--					</a>-->
<!---->
<!--					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">-->
<!--						<span class="calendar_item__date">21 - 27 May</span>-->
<!--						<span class="calendar_item__title">Bulgaria | Offroad | 7 days</span>-->
<!--						<span class="calendar_item__desc">Bulgaria | Offroad</span>-->
<!--						<span class="calendar_item__days">7 days</span>-->
<!--						<span class="calendar_item__price">2400</span>-->
<!--						<span class="calendar_item__book">More details</span>-->
<!--					</a>-->



					<h2>June 2022</h2>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">4 - 10 June</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 7 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">7 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/5-countries">
						<span class="calendar_item__date">6 - 19 June</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 days</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">
						<span class="calendar_item__date">18 - 28 June</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 11 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/5-countries">
						<span class="calendar_item__date">24 June - 7 July</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 days</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>



					<h2>July 2022</h2>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">9 - 15 July</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 7 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">7 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/romania/">
						<span class="calendar_item__date">15 - 23 July</span>
						<span class="calendar_item__title">Romania</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">
						<span class="calendar_item__date">23 July - 2 August</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 11 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/5-countries">
						<span class="calendar_item__date">31 July - 13 August</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 days</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>



					<h2>August 2022</h2>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">8 - 14 August</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 7 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">7 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/romania/">
						<span class="calendar_item__date">19 - 27 August</span>
						<span class="calendar_item__title">Romania</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">
						<span class="calendar_item__date">20 - 30 August</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 11 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>



					<h2>September 2022</h2>

					<a class="calendar_item" href="/moto-tours/romania/">
						<span class="calendar_item__date">2 - 10 September</span>
						<span class="calendar_item__title">Romania</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">3 - 9 September</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 7 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">7 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/5-countries">
						<span class="calendar_item__date">16 - 29 September</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 days</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">
						<span class="calendar_item__date">17 - 27 September</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 11 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">17 - 23 September</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 7 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">7 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>



					<h2>October 2022</h2>

					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">10 - 20 October</span>
						<span class="calendar_item__title">Turkey</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">3 - 9 October</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 7 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">7 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">17 - 23 October</span>
						<span class="calendar_item__title">Bulgaria | Offroad | 7 days</span>
						<span class="calendar_item__desc">Bulgaria | Offroad</span>
						<span class="calendar_item__days">7 days</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">More details</span>
					</a>
				<?php }
				// bg
				else if (get_locale() == 'bg_BG') { ?>
					<h2>Юни 2022</h2>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">4 - 10 Юни</span>
						<span class="calendar_item__title">България | Offroad | 7 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">7 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/5-countries">
						<span class="calendar_item__date">6 - 19 Юни</span>
						<span class="calendar_item__title">Около Балканите</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дни</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">
						<span class="calendar_item__date">18 - 28 Юни</span>
						<span class="calendar_item__title">България | Offroad | 11 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/5-countries">
						<span class="calendar_item__date">24 Юни - 7 July</span>
						<span class="calendar_item__title">Около Балканите</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дни</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>



					<h2>Юли 2022</h2>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">9 - 15 Юли</span>
						<span class="calendar_item__title">България | Offroad | 7 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">7 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/romania/">
						<span class="calendar_item__date">15 - 23 Юли</span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ,Русе</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">
						<span class="calendar_item__date">23 Юли - 2 Август</span>
						<span class="calendar_item__title">България | Offroad | 11 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/5-countries">
						<span class="calendar_item__date">31 Юли - 13 Август</span>
						<span class="calendar_item__title">Около Балканите</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дни</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>



					<h2>Август 2022</h2>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">8 - 14 Август</span>
						<span class="calendar_item__title">България | Offroad | 7 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">7 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/romania/">
						<span class="calendar_item__date">19 - 27 Август</span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ,Русе</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">
						<span class="calendar_item__date">20 - 30 Август</span>
						<span class="calendar_item__title">България | Offroad | 11 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>



					<h2>Септември 2022</h2>

					<a class="calendar_item" href="/bg/moto-tours/romania/">
						<span class="calendar_item__date">2 - 10 Септември</span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ,Русе</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">3 - 9 Септември</span>
						<span class="calendar_item__title">България | Offroad | 7 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">7 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/5-countries">
						<span class="calendar_item__date">16 - 29 Септември</span>
						<span class="calendar_item__title">Около Балканите</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дни</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-11-days/">
						<span class="calendar_item__date">17 - 27 Септември</span>
						<span class="calendar_item__title">България | Offroad | 11 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">17 - 23 Септември</span>
						<span class="calendar_item__title">България | Offroad | 7 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">7 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>



					<h2>Октомври 2022</h2>

					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">10 - 20 Октомври</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Истанбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">3 - 9 Октомври</span>
						<span class="calendar_item__title">България | Offroad | 7 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">7 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>

					<a class="calendar_item" href="/moto-tours/bulgaria-offroad-7-days/">
						<span class="calendar_item__date">17 - 23 Октомври</span>
						<span class="calendar_item__title">България | Offroad | 7 дни</span>
						<span class="calendar_item__desc">България | Offroad</span>
						<span class="calendar_item__days">7 дни</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Повече информация</span>
					</a>
				<?php }
				// de
				else if (get_locale() == 'de_DE') { ?>
					<h2>Juni 2022</h2>

					<a class="calendar_item" href="/de/moto-tours/bulgaria-offroad-7-day/">
						<span class="calendar_item__date">4 - 10 Juni</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 7 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">7 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/5-countries">
						<span class="calendar_item__date">6 - 19 Juni</span>
						<span class="calendar_item__title">Vokrut Balkan</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 Tage</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/bulgari-offroad-11-dnej/">
						<span class="calendar_item__date">18 - 28 Juni</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 11 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/5-countries">
						<span class="calendar_item__date">24 Juni - 7 Juli</span>
						<span class="calendar_item__title">Vokrut Balkan</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 Tage</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>



					<h2>Juli 2022</h2>

					<a class="calendar_item" href="/de/moto-tours/bulgaria-offroad-7-day/">
						<span class="calendar_item__date">9 - 15 Juli</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 7 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">7 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/romania/">
						<span class="calendar_item__date">15 - 23 Juli</span>
						<span class="calendar_item__title">Rumänien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bukarest, Russe.</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/bulgari-offroad-11-dnej/">
						<span class="calendar_item__date">23 Juli - 2 August</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 11 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/5-countries">
						<span class="calendar_item__date">31 Juli - 13 August</span>
						<span class="calendar_item__title">Vokrut Balkan</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 Tage</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>



					<h2>August 2022</h2>

					<a class="calendar_item" href="/de/moto-tours/bulgaria-offroad-7-day/">
						<span class="calendar_item__date">8 - 14 August</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 7 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">7 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/romania/">
						<span class="calendar_item__date">19 - 27 August</span>
						<span class="calendar_item__title">Rumänien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bukarest, Russe.</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/bulgari-offroad-11-dnej/">
						<span class="calendar_item__date">20 - 30 August</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 11 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>



					<h2>September 2022</h2>

					<a class="calendar_item" href="/de/moto-tours/romania/">
						<span class="calendar_item__date">2 - 10 September</span>
						<span class="calendar_item__title">Rumänien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bukarest, Russe.</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/bulgaria-offroad-7-day/">
						<span class="calendar_item__date">3 - 9 September</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 7 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">7 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/5-countries">
						<span class="calendar_item__date">16 - 29 September</span>
						<span class="calendar_item__title">Vokrut Balkan</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 Tage</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/bulgari-offroad-11-dnej/">
						<span class="calendar_item__date">17 - 27 September</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 11 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/bulgaria-offroad-7-day/">
						<span class="calendar_item__date">17 - 23 September</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 7 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">7 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>



					<h2>Oktober 2022</h2>

					<a class="calendar_item" href="/de/moto-tours/die-tuerkei/">
						<span class="calendar_item__date">10 - 20 Oktober</span>
						<span class="calendar_item__title">Die Türkei</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Kappadokien, Pamukkale, Bergama, Canakkale.</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/bulgaria-offroad-7-day/">
						<span class="calendar_item__date">3 - 9 Oktober</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 7 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">7 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/bulgaria-offroad-7-day/">
						<span class="calendar_item__date">17 - 23 Oktober</span>
						<span class="calendar_item__title">Bulgarien | Offroad | 7 Tage</span>
						<span class="calendar_item__desc">Bulgarien | Offroad</span>
						<span class="calendar_item__days">7 Tage</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Mehr Details</span>
					</a>
				<?php }
				// ru
				else if (get_locale() == 'ru_RU') { ?>
					<h2>Июнь 2022</h2>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad-7-dnej/">
						<span class="calendar_item__date">4 - 10 июня</span>
						<span class="calendar_item__title">Болгария | Offroad | 7 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">7 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/5-countries/">
						<span class="calendar_item__date">7 - 19 июня</span>
						<span class="calendar_item__title">Вокруг Балкан</span>
						<span class="calendar_item__desc">Страны: Сербия, Черногория, Албания, Северная Македония.<br /><br />Города: София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дней</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad/">
						<span class="calendar_item__date">18 - 28 июня</span>
						<span class="calendar_item__title">Болгария | Offroad | 11 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">11 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/5-countries/">
						<span class="calendar_item__date">25 июня - 7 июля</span>
						<span class="calendar_item__title">Вокруг Балкан</span>
						<span class="calendar_item__desc">Страны: Сербия, Черногория, Албания, Северная Македония.<br /><br />Города: София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дней</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>



					<h2>Июль 2022</h2>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad-7-dnej/">
						<span class="calendar_item__date">9 - 15 июля</span>
						<span class="calendar_item__title">Болгария | Offroad | 7 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">7 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/romania/">
						<span class="calendar_item__date">15 - 23 июля</span>
						<span class="calendar_item__title">Румыния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Бухарест, Русе.</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad/">
						<span class="calendar_item__date">23 июля - 2 августа</span>
						<span class="calendar_item__title">Болгария | Offroad | 11 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">11 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/5-countries/">
						<span class="calendar_item__date">31 июля - 12 августа</span>
						<span class="calendar_item__title">Вокруг Балкан</span>
						<span class="calendar_item__desc">Страны: Сербия, Черногория, Албания, Северная Македония.<br /><br />Города: София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дней</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>



					<h2>Август 2022</h2>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad-7-dnej/">
						<span class="calendar_item__date">8 - 14 августа</span>
						<span class="calendar_item__title">Болгария | Offroad | 7 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">7 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/romania/">
						<span class="calendar_item__date">19 - 27 августа</span>
						<span class="calendar_item__title">Румыния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Бухарест, Русе.</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad/">
						<span class="calendar_item__date">20 - 30 августа</span>
						<span class="calendar_item__title">Болгария | Offroad | 11 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">11 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>



					<h2>Сентябрь 2022</h2>

					<a class="calendar_item" href="/ru/moto-tours/romania/">
						<span class="calendar_item__date">2 - 10 сентября</span>
						<span class="calendar_item__title">Румыния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Бухарест, Русе.</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad-7-dnej/">
						<span class="calendar_item__date">3 - 9 сентября</span>
						<span class="calendar_item__title">Болгария | Offroad | 7 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">7 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/5-countries/">
						<span class="calendar_item__date">16 - 29 сентября</span>
						<span class="calendar_item__title">Вокруг Балкан</span>
						<span class="calendar_item__desc">Страны: Сербия, Черногория, Албания, Северная Македония.<br /><br />Города: София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дней</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad/">
						<span class="calendar_item__date">17 - 27 сентября</span>
						<span class="calendar_item__title">Болгария | Offroad | 11 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">11 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_11; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad-7-dnej/">
						<span class="calendar_item__date">17 - 23 сентября</span>
						<span class="calendar_item__title">Болгария | Offroad | 7 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">7 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>



					<h2>Октябрь 2022</h2>

					<a class="calendar_item" href="/ru/moto-tours/turcziya/">
						<span class="calendar_item__date">10 - 20 октября</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Стамбул, Анкара, Каппадокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дней</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad-7-dnej/">
						<span class="calendar_item__date">3 - 9 октября</span>
						<span class="calendar_item__title">Болгария | Offroad | 7 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">7 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/bolgariya-offroad-7-dnej/">
						<span class="calendar_item__date">17 - 23 октября</span>
						<span class="calendar_item__title">Болгария | Offroad | 7 дней</span>
						<span class="calendar_item__desc">Болгария | Offroad</span>
						<span class="calendar_item__days">7 дней</span>
						<span class="calendar_item__price"><?php echo $price_offroad_7; ?></span>
						<span class="calendar_item__book">Подробнее</span>
					</a>
				<?php }
				else { ?>
					<h2><?php echo __('April', 'khl_template'); ?> 2022</h2>

					<?php foreach ($tours_array as $tour_arr) {
						if ($tour_arr && strpos($tour_arr["tour_fsdate"], 'April') !== false) {
							echo '<ul class="calendar-list"><li class="calendar-19">' . date_i18n("d F", strtotime($tour_arr["tour_fsdate"])) . ' - ' .  date_i18n("d F", strtotime($tour_arr["tour_fedate"])) . '</li>
                            <li class="calendar-19"><h3>' . $tour_arr["tour_title"] . '</h3></li>
                            <li class="calendar-19">' . $tour_arr["tour_destinations"] . '</li>
                            <li class="calendar-19 cal-center">' . $tour_arr["tour_duration"] . ' ' . __('days', 'khl_template') . '</li>
                            <li class="calendar-10">' . $tour_arr["tour_price"] . ' EUR</li>
                            <li class="calendar-14">' . __('Book Now', 'khl_template') . '</a></li></ul>';
						}
					} ?>



<!--					<h2>--><?php //echo __('May', 'khl_template'); ?><!-- 2022</h2>-->
<!---->
<!--					--><?php //foreach ($tours_array as $tour_arr) {
//						if ($tour_arr && strpos($tour_arr["tour_fsdate"], 'May') !== false) {
//							echo '<ul class="calendar-list"><li class="calendar-19">' . date_i18n("d F", strtotime($tour_arr["tour_fsdate"])) . ' - ' .  date_i18n("d F", strtotime($tour_arr["tour_fedate"])) . '</li>
//                            <li class="calendar-19"><h3>' . $tour_arr["tour_title"] . '</h3></li>
//                            <li class="calendar-19">' . $tour_arr["tour_destinations"] . '</li>
//                            <li class="calendar-19 cal-center">' . $tour_arr["tour_duration"] . ' ' . __('days', 'khl_template') . '</li>
//                            <li class="calendar-10">' . $tour_arr["tour_price"] . ' EUR</li>
//                            <li class="calendar-14">' . __('Book Now', 'khl_template') . '</a></li></ul>';
//						}
//					} ?>



					<h2><?php echo __('June', 'khl_template'); ?> 2022</h2>

					<?php foreach ($tours_array as $tour_arr) {
						if ($tour_arr && strpos($tour_arr["tour_fsdate"], 'June') !== false) {
							echo '<ul class="calendar-list"><li class="calendar-19">' . date_i18n("d F", strtotime($tour_arr["tour_fsdate"])) . ' - ' .  date_i18n("d F", strtotime($tour_arr["tour_fedate"])) . '</li>
                            <li class="calendar-19"><h3>' . $tour_arr["tour_title"] . '</h3></li>
                            <li class="calendar-19">' . $tour_arr["tour_destinations"] . '</li>
                            <li class="calendar-19 cal-center">' . $tour_arr["tour_duration"] . ' ' . __('days', 'khl_template') . '</li>
                            <li class="calendar-10">' . $tour_arr["tour_price"] . ' EUR</li>
                            <li class="calendar-14">' . __('Book Now', 'khl_template') . '</a></li></ul>';
						}
					} ?>



					<h2><?php echo __('July', 'khl_template'); ?> 2022</h2>

					<?php foreach ($tours_array as $tour_arr) {
						if ($tour_arr && strpos($tour_arr["tour_fsdate"], 'July') !== false) {
							if (strtotime($tour_arr["tour_fsdate"]) < time()) {
								echo '<ul class="calendar-list"><li class="calendar-19">' .  date_i18n("d F", strtotime($tour_arr["tour_fsdate"])) . ' - ' . date_i18n("d F", strtotime($tour_arr["tour_fedate"])) . '</li>
                            <li class="calendar-19"><h3>' . $tour_arr["tour_title"] . '</h3></li>
                            <li class="calendar-19">' . $tour_arr["tour_destinations"] . '</li>
                            <li class="calendar-19 cal-center">' . $tour_arr["tour_duration"] . ' ' . __('days', 'khl_template') . '</li>
                            <li class="calendar-10">' . $tour_arr["tour_price"] . ' EUR</li>
                            <li class="calendar-14">' . __('Book Now', 'khl_template') . '</li></ul>';
							}
							else {
								echo '<ul class="calendar-list"><li class="calendar-19">' . date_i18n("d F", strtotime($tour_arr["tour_fsdate"])) . ' - ' . date_i18n("d F", strtotime($tour_arr["tour_fedate"])) . '</li>
                            <li class="calendar-19"><h3>' . $tour_arr["tour_title"] . '</h3></li>
                            <li class="calendar-19">' . $tour_arr["tour_destinations"] . '</li>
                            <li class="calendar-19 cal-center">' . $tour_arr["tour_duration"] . ' ' . __('days', 'khl_template') . '</li>
                            <li class="calendar-10">' . $tour_arr["tour_price"] . ' EUR</li>
                            <li class="calendar-14"><a href="' . $tour_arr["tour_book_url"] . '">' . __('Book Now', 'khl_template') . '</a></li></ul>';
							}
						}
					} ?>



					<h2><?php echo __('August', 'khl_template'); ?> 2022</h2>

					<?php foreach ($tours_array as $tour_arr) {
						if ($tour_arr && strpos($tour_arr["tour_fsdate"], 'August') !== false) {
							echo '<ul class="calendar-list"><li class="calendar-19">' . date_i18n("d F", strtotime($tour_arr["tour_fsdate"])) . ' - ' . date_i18n("d F", strtotime($tour_arr["tour_fedate"])) . '</li>
                            <li class="calendar-19"><h3>' . $tour_arr["tour_title"] . '</h3></li>
                            <li class="calendar-19">' . $tour_arr["tour_destinations"] . '</li>
                            <li class="calendar-19 cal-center">' . $tour_arr["tour_duration"] . ' ' . __('days', 'khl_template') . '</li>
                            <li class="calendar-10">' . $tour_arr["tour_price"] . ' EUR</li>
                            <li class="calendar-14"><a href="' . $tour_arr["tour_book_url"] . '">' . __('Book Now', 'khl_template') . '</a></li></ul>';
						}
					} ?>



					<h2><?php echo __('October', 'khl_template'); ?> 2022</h2>

					<?php foreach ($tours_array as $tour_arr) {
						if ($tour_arr && strpos($tour_arr["tour_fsdate"], 'October') !== false) {
							echo '<ul class="calendar-list"><li class="calendar-19">' .  date_i18n("d F", strtotime($tour_arr["tour_fsdate"])) . ' - ' . date_i18n("d F", strtotime($tour_arr["tour_fedate"])) . '</li>
                            <li class="calendar-19"><h3>' . $tour_arr["tour_title"] . '</h3></li>
                            <li class="calendar-19">' . $tour_arr["tour_destinations"] . '</li>
                            <li class="calendar-19 cal-center">' . $tour_arr["tour_duration"] . ' ' . __('days', 'khl_template') . '</li>
                            <li class="calendar-10">' . $tour_arr["tour_price"] . ' EUR</li>
                            <li class="calendar-14"><a href="' . $tour_arr["tour_book_url"] . '">' . __('Book Now', 'khl_template') . '</a></li></ul>';
						}
					} ?>
				<?php } ?>
			</div>
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

get_footer(); ?>


