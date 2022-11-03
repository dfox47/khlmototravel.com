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

<?php $langCode = ICL_LANGUAGE_CODE;

switch ($langCode) {
	case 'ru':
		$textReadMore = 'Подробнее';
		break;
	case 'de':
		$textReadMore = 'Mehr Details';
		break;
	case 'bg':
		$textReadMore = 'Повече информация';
		break;
	default:
		$textReadMore = 'More details';
		break;
} ?>



<div id="primary" <?php generate_do_element_classes('content'); ?>>
	<main id="main" <?php generate_do_element_classes('main'); ?>>
		<h1><?php echo __('Motorcycle Tours Calendar 2023', 'khl_template'); ?></h1>

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
			$price_bulgaria_9   = '2600 €';
			$price_bulgaria_5   = '1500 €';

			while ( $loop->have_posts() ) :
				$loop->the_post();
				$tour_url           = rtrim(get_permalink( $post->ID ), '/');
				$tour_book_url      = $tour_url . '#book-now';
				$tour_end           = get_post_meta($post->ID, 'khl_tour_details_khl_end', true);
				$tour_end2          = get_post_meta($post->ID, 'khl_tour_details_khl_end2', true);
				$tour_end3          = get_post_meta($post->ID, 'khl_tour_details_khl_end3', true);
				$tour_end4          = get_post_meta($post->ID, 'khl_tour_details_khl_end4', true);
				$tour_end5          = get_post_meta($post->ID, 'khl_tour_details_khl_end5', true);
				$tour_end6          = get_post_meta($post->ID, 'khl_tour_details_khl_end6', true);
				$tour_start         = get_post_meta($post->ID, 'khl_tour_details_khl_start', true);
				$tour_start2        = get_post_meta($post->ID, 'khl_tour_details_khl_start2', true);
				$tour_start3        = get_post_meta($post->ID, 'khl_tour_details_khl_start3', true);
				$tour_start4        = get_post_meta($post->ID, 'khl_tour_details_khl_start4', true);
				$tour_start5        = get_post_meta($post->ID, 'khl_tour_details_khl_start5', true);
				$tour_start6        = get_post_meta($post->ID, 'khl_tour_details_khl_start6', true);

				if ($tour_start2) {
					$sdate2     = DateTime::createFromFormat("Ymd", $tour_start2);
					$s_start    = $sdate2->format('jS F');
					$edate2     = DateTime::createFromFormat("Ymd", $tour_end2);
					$s_end      = $edate2->format('jS F');
				}

				if ($tour_start3) {
					$sdate3     = DateTime::createFromFormat("Ymd", $tour_start3);
					$t_start    = $sdate3->format('jS F');
					$edate3     = DateTime::createFromFormat("Ymd", $tour_end3);
					$t_end      = $edate3->format('jS F');
				}

				if ($tour_start4) {
					$sdate4     = DateTime::createFromFormat("Ymd", $tour_start4);
					$fo_start   = $sdate4->format('jS F');
					$edate4     = DateTime::createFromFormat("Ymd", $tour_end4);
					$fo_end     = $edate4->format('jS F');
				}

				if ($tour_start5) {
					$sdate5     = DateTime::createFromFormat("Ymd", $tour_start5);
					$fi_start   = $sdate5->format('jS F');
					$edate5     = DateTime::createFromFormat("Ymd", $tour_end5);
					$fi_end     = $edate5->format('jS F');
				}

				if ($tour_start6) {
					$sdate6     = DateTime::createFromFormat("Ymd", $tour_start6);
					$si_start   = $sdate6->format('jS F');
					$edate6     = DateTime::createFromFormat("Ymd", $tour_end6);
					$si_end     = $edate6->format('jS F');
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


					<h2>April</h2>

					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">15 - 25 April</span>
						<span class="calendar_item__title">Turkey</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">29 April - 9 May</span>
						<span class="calendar_item__title">Turkey</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<h2>May</h2>

					<a class="calendar_item" href="/moto-tours/highlights-of-bulgaria">
						<span class="calendar_item__date">13 - 21 May</span>
						<span class="calendar_item__title">Bulgaria</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/moto-tours/highlights-of-bulgaria">
						<span class="calendar_item__date">27 May - 4 June</span>
						<span class="calendar_item__title">Bulgaria</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>



					<h2>June</h2>

					<a class="calendar_item" href="/moto-tours/5-countries">
						<span class="calendar_item__date">10 - 23 June</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 days</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/moto-tours/highlights-of-bulgaria">
						<span class="calendar_item__date">10 - 18 June</span>
						<span class="calendar_item__title">Bulgaria</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					


					<h2>July</h2>

					<a class="calendar_item" href="/moto-tours/highlights-of-bulgaria">
						<span class="calendar_item__date">1 - 9 July</span>
						<span class="calendar_item__title">Bulgaria</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/moto-tours/5-countries">
						<span class="calendar_item__date">1 - 14 July</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 days</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
						</a>


					<a class="calendar_item" href="/moto-tours/romania/">
						<span class="calendar_item__date">20 - 28 July</span>
						<span class="calendar_item__title">Romania</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/moto-tours/romania/">
						<span class="calendar_item__date">30 July - 7 August</span>
						<span class="calendar_item__title">Romania</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


				

					
					<h2>August</h2>

					<a class="calendar_item" href="/moto-tours/highlights-of-bulgaria">
						<span class="calendar_item__date">12 - 20 August</span>
						<span class="calendar_item__title">Bulgaria</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/moto-tours/5-countries">
						<span class="calendar_item__date">26 August - 8 September</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 days</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>




					<h2>September</h2>

					<a class="calendar_item" href="/moto-tours/wine-spa-history">
						<span class="calendar_item__date">10 - 14 September</span>
						<span class="calendar_item__title">Bulgaria: Wine, Spa & History</span>
						<span class="calendar_item__desc">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="calendar_item__days">5 days</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_5; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/moto-tours/romania/">
						<span class="calendar_item__date">16 - 24 September</span>
						<span class="calendar_item__title">Romania</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 days</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">30 September - 10 October</span>
						<span class="calendar_item__title">Turkey</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>




					<h2>October</h2>

					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">14 - 24 October</span>
						<span class="calendar_item__title">Turkey</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 days</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					
				<?php }
				// bg
				else if (get_locale() == 'bg_BG') { ?>
					
					<h2>Април</h2>

					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">15 - 25 Април</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Истанбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">29 Април - 9 Май</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Истанбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<h2>Май</h2>

					<a class="calendar_item" href="/bg/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">13 - 21 Май</span>
						<span class="calendar_item__title">България</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/bg/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">27 Май - 4 Юни</span>
						<span class="calendar_item__title">България</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>



					<h2>Юни</h2>

					<a class="calendar_item" href="/bg/moto-tours/5-countries/">
						<span class="calendar_item__date">10 - 23 Юни</span>
						<span class="calendar_item__title">Около Балканите</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дни</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">10 - 18 Юни</span>
						<span class="calendar_item__title">България</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					


					<h2>Юли</h2>

					<a class="calendar_item" href="/bg/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">1 - 9 Юли</span>
						<span class="calendar_item__title">България</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/5-countries/">
						<span class="calendar_item__date">1 - 14 Юли</span>
						<span class="calendar_item__title">Около Балканите</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дни</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
						</a>


					<a class="calendar_item" href="/bg/moto-tours/romania/">
						<span class="calendar_item__date">20 - 28 Юли</span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ, Русе</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo$price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/bg/moto-tours/romania/">
						<span class="calendar_item__date">30 Юли - 7 Август</span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ, Русе</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo$price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


				

					
					<h2>Август</h2>

					<a class="calendar_item" href="/bg/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">12 - 20 Август</span>
						<span class="calendar_item__title">България</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/bg/moto-tours/5-countries/">
						<span class="calendar_item__date">26 Август - 8 Септември</span>
						<span class="calendar_item__title">Около Балканите</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дни</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>




					<h2>Септември</h2>

					<a class="calendar_item" href="/bg/moto-tours/wine-spa-history/">
						<span class="calendar_item__date">10 - 14 Септември</span>
						<span class="calendar_item__title">България: Вино, СПА и история</span>
						<span class="calendar_item__desc">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="calendar_item__days">5 дни</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_5; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/bg/moto-tours/romania/">
						<span class="calendar_item__date">16 - 24 Септември</span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ, Русе</span>
						<span class="calendar_item__days">9 дни</span>
						<span class="calendar_item__price"><?php echo$price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">30 Септември - 10 Октмоври</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Истанбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>




					<h2>Октмоври</h2>

					<a class="calendar_item" href="/moto-tours/turkey/">
						<span class="calendar_item__date">14 - 24 Октмоври</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Истанбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>



				<?php }
				// de
				else if (get_locale() == 'de_DE') { ?>

					<h2>April</h2>

					<a class="calendar_item" href="/de/moto-tours/die-tuerkei/">
						<span class="calendar_item__date">15 - 25 April</span>
						<span class="calendar_item__title"> Die Türkei </span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/die-tuerkei/">
						<span class="calendar_item__date">29 April - 9 Mai</span>
						<span class="calendar_item__title">Die Türkei</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<h2>Mai</h2>

					<a class="calendar_item" href="/de/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">13 - 21 Mai</span>
						<span class="calendar_item__title">Bulgarien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/de/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">27 May - 4 Juni</span>
						<span class="calendar_item__title">Bulgarien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>



					<h2>Juni</h2>

					<a class="calendar_item" href="/de/moto-tours/5-countries/">
						<span class="calendar_item__date">10 - 23 Juni</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 Tage</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">10 - 18 Juni</span>
						<span class="calendar_item__title">Bulgarien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					


					<h2>Juli</h2>

					<a class="calendar_item" href="/de/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">1 - 9 Juli</span>
						<span class="calendar_item__title">Bulgarien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/5-countries/">
						<span class="calendar_item__date">1 - 14 Juli</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 Tage</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
						</a>


					<a class="calendar_item" href="/de/moto-tours/romania/">
						<span class="calendar_item__date">20 - 28 Juli</span>
						<span class="calendar_item__title">Rumänien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/de/moto-tours/romania/">
						<span class="calendar_item__date">30 Juli - 7 August</span>
						<span class="calendar_item__title">Rumänien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


				

					
					<h2>August</h2>

					<a class="calendar_item" href="/de/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">12 - 20 August</span>
						<span class="calendar_item__title">Bulgarien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/de/moto-tours/5-countries/">
						<span class="calendar_item__date">26 August - 8 September</span>
						<span class="calendar_item__title">Balkan Moto Cruise</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Zlatibor, Kolasin, Budva, Durres, Ohrid, Bitola, Skopje</span>
						<span class="calendar_item__days">14 Tage</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>




					<h2>September</h2>

					<a class="calendar_item" href="/de/moto-tours/wine-spa-history/">
						<span class="calendar_item__date">10 - 14 September</span>
						<span class="calendar_item__title">Bulgarien: Wein, Spa & Geschichte</span>
						<span class="calendar_item__desc">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="calendar_item__days">5 Tage</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_5; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/de/moto-tours/romania/">
						<span class="calendar_item__date">16 - 24 September</span>
						<span class="calendar_item__title">Rumänien</span>
						<span class="calendar_item__desc">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse.</span>
						<span class="calendar_item__days">9 Tage</span>
						<span class="calendar_item__price"><?php echo $price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/de/moto-tours/die-tuerkei/">
						<span class="calendar_item__date">30 September - 10 Oktober</span>
						<span class="calendar_item__title">Die Türkei</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>




					<h2>Oktober</h2>

					<a class="calendar_item" href="/de/moto-tours/die-tuerkei/">
						<span class="calendar_item__date">14 - 24 Oktober</span>
						<span class="calendar_item__title">Die Türkei</span>
						<span class="calendar_item__desc">Istanbul, Ankara, Cappadocia, Pamukkale, Bergama, Canakkale</span>
						<span class="calendar_item__days">11 Tage</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


				<?php }
				// ru
				else if (get_locale() == 'ru_RU') { ?>

					<h2>Апрель</h2>

					<a class="calendar_item" href="/ru/moto-tours/turcziya/">
						<span class="calendar_item__date">15 - 25 Апреля</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Стамбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дни</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/turcziya/">
						<span class="calendar_item__date">29 Апреля - 9 Мая</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Стамбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дней</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<h2>Май</h2>

					<a class="calendar_item" href="/ru/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">13 - 21 Мая</span>
						<span class="calendar_item__title">Болгария</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/ru/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">27 Мая - 4 Июня</span>
						<span class="calendar_item__title">Болгария</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>



					<h2>Июнь</h2>

					<a class="calendar_item" href="/ru/moto-tours/5-countries/">
						<span class="calendar_item__date">10 - 23 Июня</span>
						<span class="calendar_item__title">Вокруг Балкан</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дней</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">10 - 18 Июня</span>
						<span class="calendar_item__title">Болгария</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					


					<h2>Июль</h2>

					<a class="calendar_item" href="/ru/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">1 - 9 Июля</span>
						<span class="calendar_item__title">Болгария</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/5-countries/">
						<span class="calendar_item__date">1 - 14 Июля</span>
						<span class="calendar_item__title">Вокруг Балкан</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дней</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
						</a>


					<a class="calendar_item" href="/ru/moto-tours/romania/">
						<span class="calendar_item__date">20 - 28 Июля</span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ, Русе</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo$price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/ru/moto-tours/romania/">
						<span class="calendar_item__date">30 Июля - 7 Августа</span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ, Русе</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo$price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


				

					
					<h2>Август</h2>

					<a class="calendar_item" href="/ru/moto-tours/highlights-of-bulgaria/">
						<span class="calendar_item__date">12 - 20 Августа</span>
						<span class="calendar_item__title">Болгария</span>
						<span class="calendar_item__desc">София, Белоградчик, Велико Търново, Велинград, Банско</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_9; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/ru/moto-tours/5-countries/">
						<span class="calendar_item__date">26 Августа - 8 Сентября</span>
						<span class="calendar_item__title">Вокруг Балкан</span>
						<span class="calendar_item__desc">София, Белоградчик, Златибор, Колашин, Будва, Дуррес, Охрид, Битола, Скопие</span>
						<span class="calendar_item__days">14 дней</span>
						<span class="calendar_item__price"><?php echo $price_5_countries; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>




					<h2>Сентябрь</h2>

					<a class="calendar_item" href="/ru/moto-tours/wine-spa-history/">
						<span class="calendar_item__date">10 - 14 Сентября </span>
						<span class="calendar_item__title">Болгария: Вино, СПА и история</span>
						<span class="calendar_item__desc">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="calendar_item__days">5 дней</span>
						<span class="calendar_item__price"><?php echo $price_bulgaria_5; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>

					<a class="calendar_item" href="/ru/moto-tours/romania/">
						<span class="calendar_item__date">16 - 24 Сентября </span>
						<span class="calendar_item__title">Румъния</span>
						<span class="calendar_item__desc">София, Белоградчик, Новачи, Турда, Брашов, Букорещ, Русе</span>
						<span class="calendar_item__days">9 дней</span>
						<span class="calendar_item__price"><?php echo$price_romania; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>


					<a class="calendar_item" href="/ru/moto-tours/turcziya/">
						<span class="calendar_item__date">30 Сентября - 10 Октября</span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Стамбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дней</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
					</a>




					<h2> Октябрь</h2>

					<a class="calendar_item" href="/ru/moto-tours/turcziya/">
						<span class="calendar_item__date">14 - 24 Октября </span>
						<span class="calendar_item__title">Турция</span>
						<span class="calendar_item__desc">Стамбул, Анкара, Кападокия, Памуккале, Бергама, Чанаккале</span>
						<span class="calendar_item__days">11 дней</span>
						<span class="calendar_item__price"><?php echo $price_turkey; ?></span>
						<span class="calendar_item__book"><?php echo $textReadMore; ?></span>
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
do_action('generate_after_primary_content_area');

generate_construct_sidebars();

get_footer(); ?>
