<?php /**
 * Template Name: Archive Tours
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$langCode       = ICL_LANGUAGE_CODE;
$calendarUrl    =  '/' . $langCode . '/calendar'; ?>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<h1><?php echo __('Motorcycle Tours', 'khl_template'); ?></h1>

		<div class="tours_list">
			<!-- Individual -->
			<a class="tours_list__item" href="<?php if ($langCode !== 'en') echo '/' . $langCode; ?>/moto-tours/individual-moto-tour/">
				<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_636336056-e1615801862207.jpg);"></span>

				<span class="tours_desc">
					<span class="tours_desc__title"><?php echo __('Individual Moto Tour', 'khl_template'); ?></span>

					<span class="tours_desc__destinations">
						<?php echo __('We offer individual motorcycle tours drawn up for your liking and desire! Tell us what you need for your trip and we will bring it to live.It is also possible to offer a motorcycle tour of your choice, on dates convenient for you. The group must be at least 4 people.', 'khl_template');  ?>
					</span>

					<span class="tours_desc__destinations">
						<strong><?php echo __('Prices from: ', 'khl_template')?></strong> 150 € /
						<?php if ($langCode == 'bg') { ?>
							ден
						<?php }
						elseif ($langCode == 'de') { ?>
							tag
						<?php }
						elseif ($langCode == 'ru') { ?>
							день
						<?php }
                        else { ?>
                            day
						<?php } ?>
					</span>

					<span class="tours_desc__more">Read more</span>
				</span>
			</a>

			<?php
			// en
			if ($langCode == 'en') { ?>
				<!-- Balkan Moto Cruise | 6 - 18 June 2022 -->
				<a class="tours_list__item" href="/moto-tours/5-countries">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Balkan Moto Cruise</span>
						<span class="tours_desc__destinations">Bulgaria, Serbia, Montenegro, Albania, North Macedonia</span>
						<span class="tours_desc__duration">14 days</span>
						<span class="tours_dates">
							<span class="tours_dates__item">6 - 18 June 2022</span>
							<span class="tours_dates__item">24 June - 6 July 2022</span>
							<span class="tours_dates__item">31 July - 12 August 2022</span>
							<span class="tours_dates__item">16 - 28 September 2022</span>
						</span>
						<span class="tours_desc__more">Read more</span>
					</span>
				</a>

				<!-- Bulgaria -->
				<a class="tours_list__item" href="/moto-tours/highlights-of-bulgaria/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/03/BMW-1200-GS_512_gimp.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgaria</span>
						<span class="tours_desc__destinations">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="tours_desc__duration">9 days</span>
						<span class="tours_dates">
							<span class="tours_dates__item">By prior arrangement. Group of 4 people</span>
						</span>
						<span class="tours_desc__more">Read more</span>
					</span>
				</a>

				<!-- Romania | 15 - 23 July 2022 -->
				<a class="tours_list__item" href="/moto-tours/romania/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/08/Photo_6553967_DJI_367_jpg_7369832_0_2021713112238_photo_original-scaled.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Romania</span>
						<span class="tours_desc__destinations">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse</span>
						<span class="tours_desc__duration">9 days</span>
						<span class="tours_dates">
							<span class="tours_dates__item">15 - 23 July 2022</span>
							<span class="tours_dates__item">19 - 27 August 2022</span>
							<span class="tours_dates__item">2 - 10 September 2022</span>
						</span>
						<span class="tours_desc__more">Read more</span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 11 days -->
				<a class="tours_list__item" href="/moto-tours/bulgaria-offroad-11-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-03.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgaria | Offroad</span>
						<span class="tours_desc__destinations">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="tours_desc__duration">11 days</span>
						<span class="tours_dates">
<!--							<span class="tours_dates__item">30 April - 10 May 2022</span>-->
							<span class="tours_dates__item">18 - 28 June 2022</span>
							<span class="tours_dates__item">23 July - 2 August 2022</span>
							<span class="tours_dates__item">20 - 30 August 2022</span>
							<span class="tours_dates__item">17 - 27 September 2022</span>
						</span>
						<span class="tours_desc__more">Read more</span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 7 days -->
				<a class="tours_list__item" href="/moto-tours/bulgaria-offroad-7-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-08.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgaria | Offroad</span>
						<span class="tours_desc__destinations">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="tours_desc__duration">7 days</span>
						<span class="tours_dates">
							<span class="tours_dates__item">21 - 27 May 2022</span>
							<span class="tours_dates__item">04 - 10 June 2022</span>
							<span class="tours_dates__item">09 - 15 July 2022</span>
							<span class="tours_dates__item">08 - 14 August 2022</span>
							<span class="tours_dates__item">03 - 09 October 2022</span>
							<span class="tours_dates__item">17 - 23 October 2022</span>
						</span>
						<span class="tours_desc__more">Read more</span>
					</span>
				</a>

				<!-- Turkey -->
				<a class="tours_list__item" href="/moto-tours/turkey/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/turkey.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Turkey</span>
						<span class="tours_desc__duration">11 days</span>
						<span class="tours_dates">
<!--							<span class="tours_dates__item">8 - 18 April 2022</span>-->
							<!--							<span class="tours_dates__item">29 April - 9 May 2022</span>-->
							<span class="tours_dates__item">20 - 30 May 2022</span>
							<span class="tours_dates__item">10 - 20 October 2022</span>
						</span>
						<span class="tours_desc__more">Read more</span>
					</span>
				</a>

				<!-- Turkey | offroad -->
				<a class="tours_list__item" href="javascript:void(0);">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/enduro.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Turkey | Offroad</span>
						<span class="tours_desc__duration">15 days</span>
						<span class="tours_desc__more">Coming soon</span>
					</span>
				</a>
			<?php }
			// bg
			else if (get_locale() == 'bg_BG') { ?>
				<!-- Balkan Moto Cruise | 6 - 18 June 2022 -->
				<a class="tours_list__item" href="/bg/moto-tours/5-countries">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Около Балканите</span>
						<span class="tours_desc__destinations">България, Сърбия, Черна гора, Албания, Северна Македония</span>
						<span class="tours_desc__duration">14 дни</span>
						<span class="tours_dates">
							<span class="tours_dates__item">6 - 18 Юни 2022</span>
							<span class="tours_dates__item">24 Юни - 6 Юли 2022</span>
							<span class="tours_dates__item">31 Юли - 12 Август 2022</span>
							<span class="tours_dates__item">16 - 28 Септември 2022</span>
						</span>
						<span class="tours_desc__more">Повече</span>
					</span>
				</a>

				<!-- Bulgaria -->
				<a class="tours_list__item" href="/bg/moto-tours/highlights-of-bulgaria/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/03/BMW-1200-GS_512_gimp.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">България</span>
						<span class="tours_desc__destinations">София, Белоградчик, Велико Търново, Велинград, Девин, Банско</span>
						<span class="tours_desc__duration">9 дни</span>
						<span class="tours_dates">
							<span class="tours_dates__item">След предишни дискусии. Група от 4 човека</span>
						</span>
						<span class="tours_desc__more">Повече</span>
					</span>
				</a>

				<!-- Romania | 15 - 23 July 2022 -->
				<a class="tours_list__item" href="/bg/moto-tours/romania/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/08/Photo_6553967_DJI_367_jpg_7369832_0_2021713112238_photo_original-scaled.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Румъния</span>
						<span class="tours_desc__destinations">София, Белоградчик, Новаци, Турда, Брашов, Букурещ, Русе</span>
						<span class="tours_desc__duration">9 дни</span>
						<span class="tours_dates">
							<span class="tours_dates__item">15 - 23 Юли 2022</span>
							<span class="tours_dates__item">19 - 27 Август 2022</span>
							<span class="tours_dates__item">2 - 10 Септември 2022</span>
						</span>

						<span class="tours_desc__more">Повече</span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 11 days -->
				<a class="tours_list__item" href="/bg/moto-tours/bulgari-offroad-11-dnej/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-03.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">България | Offroad</span>
						<span class="tours_desc__destinations">София, Велико Търново, Велинград</span>
						<span class="tours_desc__duration">11 дни</span>
						<span class="tours_dates">
<!--							<span class="tours_dates__item">30 Април - 10 Май 2022</span>-->
							<span class="tours_dates__item">18 - 28 Юни 2022</span>
							<span class="tours_dates__item">23 Юли - 2 Август 2022</span>
							<span class="tours_dates__item">20 - 30 Август 2022</span>
							<span class="tours_dates__item">17 - 27 Септември 2022</span>
						</span>
						<span class="tours_desc__more">Повече</span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 7 days -->
				<a class="tours_list__item" href="/bg/moto-tours/bulgaria-offroad-7-day/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-08.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">България | Offroad</span>
						<span class="tours_desc__destinations">София, Велико Търново, Велинград</span>
						<span class="tours_desc__duration">7 дни</span>
						<span class="tours_dates">
							<span class="tours_dates__item">21 - 27 May 2022</span>
							<span class="tours_dates__item">4 - 10 Юни 2022</span>
							<span class="tours_dates__item">9 - 15 Юли 2022</span>
							<span class="tours_dates__item">8 - 14 Август 2022</span>
							<span class="tours_dates__item">3 - 9 Октомври 2022</span>
							<span class="tours_dates__item">17 - 23 Октомври 2022</span>
						</span>
						<span class="tours_desc__more">Повече</span>
					</span>
				</a>

				<!-- Turkey -->
				<a class="tours_list__item" href="/bg/moto-tours/die-tuerkei/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/turkey.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Турция</span>
						<span class="tours_desc__duration">11 дни</span>
						<span class="tours_dates">
<!--							<span class="tours_dates__item">8 - 18 Април 2022</span>-->
							<!--							<span class="tours_dates__item">29 Април - 9 Май 2022</span>-->
							<span class="tours_dates__item">20 - 30 Май 2022</span>
							<span class="tours_dates__item">10 - 20 Октомври 2022</span>
						</span>
						<span class="tours_desc__more">Повече</span>
					</span>
				</a>

				<!-- Turkey | offroad -->
				<a class="tours_list__item" href="javascript:void(0);">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/enduro.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Турция | Offroad</span>
						<span class="tours_desc__duration">15 дни</span>
						<span class="tours_desc__more">Очаквайте скоро</span>
					</span>
				</a>
			<?php }
			// de
			else if (get_locale() == 'de_DE') { ?>
				<!-- Balkan Moto Cruise | 6 - 18 June 2022 -->
				<a class="tours_list__item" href="/de/moto-tours/5-countries">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Vokrut Balkan</span>
						<span class="tours_desc__destinations">Bulgarien, Serbien, Montenegro, Albanien, Nordmazedonien</span>
						<span class="tours_desc__duration">14 tage</span>
						<span class="tours_dates">
							<span class="tours_dates__item">6 - 18 Juni 2022</span>
							<span class="tours_dates__item">24 Juni - 6 Juli 2022</span>
							<span class="tours_dates__item">31 Juli - 12 August 2022</span>
							<span class="tours_dates__item">16 - 28 September 2022</span>
						</span>
						<span class="tours_desc__more">Weiterlesen</span>
					</span>
				</a>

				<!-- Bulgaria -->
				<a class="tours_list__item" href="/de/moto-tours/highlights-of-bulgaria/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/03/BMW-1200-GS_512_gimp.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgarien</span>
						<span class="tours_desc__destinations">Sofia, Belogradchik, Veliko Tarnovo, Velingrad, Devin, Bansko</span>
						<span class="tours_desc__duration">9 Tage</span>
						<span class="tours_dates">
							<span class="tours_dates__item">Nach vorheriger Absprache. Gruppe von 4 Personen</span>
						</span>
						<span class="tours_desc__more">Mehr Details</span>
					</span>
				</a>

				<!-- Romania | 15 - 23 July 2022 -->
				<a class="tours_list__item" href="/de/moto-tours/romania/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/08/Photo_6553967_DJI_367_jpg_7369832_0_2021713112238_photo_original-scaled.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Rumänien</span>
						<span class="tours_desc__destinations">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse</span>
						<span class="tours_desc__duration">9 tage</span>
						<span class="tours_dates">
							<span class="tours_dates__item">15 - 23 Juli 2022</span>
							<span class="tours_dates__item">19 - 27 August 2022</span>
							<span class="tours_dates__item">2 - 10 September 2022</span>
						</span>
						<span class="tours_desc__more">Weiterlesen</span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 11 days -->
				<a class="tours_list__item" href="/de/moto-tours/bulgari-offroad-11-dnej/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-03.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgarien | Offroad</span>
						<span class="tours_desc__destinations">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="tours_desc__duration">11 tage</span>
						<span class="tours_dates">
<!--							<span class="tours_dates__item">30 April - 10 May 2022</span>-->
							<span class="tours_dates__item">18 - 28 Juni 2022</span>
							<span class="tours_dates__item">23 Juli - 2 August 2022</span>
							<span class="tours_dates__item">20 - 30 August 2022</span>
							<span class="tours_dates__item">17 - 27 September 2022</span>
						</span>
						<span class="tours_desc__more">Weiterlesen</span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 7 days -->
				<a class="tours_list__item" href="/de/moto-tours/bulgaria-offroad-7-day/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-08.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgarien | Offroad</span>
						<span class="tours_desc__destinations">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="tours_desc__duration">7 tage</span>
						<span class="tours_dates">
							<span class="tours_dates__item">21 - 27 May 2022</span>
							<span class="tours_dates__item">4 - 10 Juni 2022</span>
							<span class="tours_dates__item">9 - 15 Juli 2022</span>
							<span class="tours_dates__item">8 - 14 August 2022</span>
							<span class="tours_dates__item">3 - 9 Oktober 2022</span>
							<span class="tours_dates__item">17 - 23 Oktober 2022</span>
						</span>
						<span class="tours_desc__more">Weiterlesen</span>
					</span>
				</a>

				<!-- Turkey -->
				<a class="tours_list__item" href="/de/moto-tours/die-tuerkei/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/turkey.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Truthahn</span>
						<span class="tours_desc__duration">11 tage</span>
						<span class="tours_dates">
<!--							<span class="tours_dates__item">8 - 18 April 2022</span>-->
							<!--							<span class="tours_dates__item">29 April - 9 May 2022</span>-->
							<span class="tours_dates__item">20 - 30 May 2022</span>
							<span class="tours_dates__item">10 - 20 Oktober 2022</span>
						</span>
						<span class="tours_desc__more">Weiterlesen</span>
					</span>
				</a>

				<!-- Turkey | offroad -->
				<a class="tours_list__item" href="javascript:void(0);">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/enduro.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Truthahn | Offroad</span>
						<span class="tours_desc__duration">15 tage</span>
						<span class="tours_desc__more">Demnächst</span>
					</span>
				</a>
			<?php }
			// ru
			else if (get_locale() == 'ru_RU') { ?>
				<!-- Balkan Moto Cruise | 6 - 18 June 2022 -->
				<a class="tours_list__item" href="/ru/moto-tours/5-countries">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Вокруг Балкан</span>

						<span class="tours_desc__destinations">Болгария, Сербия, Черногория, Албания, Северная Македония</span>

						<span class="tours_dates">
							<span class="tours_dates__item">7 - 19 Июня 2022</span>
							<span class="tours_dates__item">25 Июня - 7 Июля 2022</span>
							<span class="tours_dates__item">1 - 13 Авугста 2022</span>
							<span class="tours_dates__item">17 - 29 Сентября 2022</span>
						</span>

						<span class="tours_desc__duration">14 дней</span>

						<span class="tours_desc__more">Подробнее</span>
					</span>
				</a>

				<!-- Bulgaria -->
				<a class="tours_list__item" href="/ru/moto-tours/highlights-of-bulgaria/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/03/BMW-1200-GS_512_gimp.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Болгария</span>

						<span class="tours_desc__destinations">София, Белоградчик, Велико Тырново, Велинград, Девин, Банско</span>

						<span class="tours_dates">
<!--							<span class="tours_dates__item">7 - 18 Июня 2022</span>-->
							<span class="tours_dates__item">По предварительной заявке. Группа от 4-х человек</span>
						</span>

						<span class="tours_desc__duration">9 дней</span>

						<span class="tours_desc__more">Подробнее</span>
					</span>
				</a>

				<!-- Romania | 15 - 23 July 2022 -->
				<a class="tours_list__item" href="/ru/moto-tours/romania/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/08/Photo_6553967_DJI_367_jpg_7369832_0_2021713112238_photo_original-scaled.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Румыния</span>

						<span class="tours_desc__destinations">София, Белоградчик, Новаци, Турда, Брасов, Бухарест, Русе</span>

						<span class="tours_dates">
							<span class="tours_dates__item">15 - 23 Июля 2022</span>
							<span class="tours_dates__item">19 - 27 Августа 2022</span>
							<span class="tours_dates__item">2 - 10 Сентября 2022</span>
						</span>

						<span class="tours_desc__duration">9 дней</span>

						<span class="tours_desc__more">Подробнее</span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 11 days -->
				<a class="tours_list__item" href="/ru/moto-tours/bolgariya-offroad/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-03.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Болгария | Offroad</span>

						<span class="tours_desc__destinations">София, Велико Тырново, Велинград</span>

						<span class="tours_dates">
							<span class="tours_dates__item">30 Апреля - 10 Мая 2022</span>
							<span class="tours_dates__item">18 - 28 Июня 2022</span>
							<span class="tours_dates__item">23 Июля - 2 Августа 2022</span>
							<span class="tours_dates__item">20 - 30 Августа 2022</span>
							<span class="tours_dates__item">17 - 27 Сентября 2022</span>
						</span>

						<span class="tours_desc__duration">11 дней</span>

						<span class="tours_desc__more">Подробнее</span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 7 days -->
				<a class="tours_list__item" href="/ru/moto-tours/bolgariya-offroad-7-dnej/">
					<!--					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/08/IMG_6987-scaled.jpg);"></span>-->
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-08.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Болгария | Offroad</span>

						<span class="tours_desc__destinations">София, Велико Тырново, Велинград</span>

						<span class="tours_dates">
							<span class="tours_dates__item">21 - 27 Мая 2022</span>
							<span class="tours_dates__item">4 - 10 Июня 2022</span>
							<span class="tours_dates__item">9 - 15 Июля 2022</span>
							<span class="tours_dates__item">8 - 14 Август 2022</span>
							<span class="tours_dates__item">3 - 9 Октября 2022</span>
							<span class="tours_dates__item">17 - 23 Октября 2022</span>
						</span>

						<span class="tours_desc__duration">7 дней</span>

						<span class="tours_desc__more">Подробнее</span>
					</span>
				</a>

				<!-- Turkey -->
				<a class="tours_list__item" href="/ru/moto-tours/turcziya/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/turkey.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Турция</span>

						<span class="tours_dates">
							<span class="tours_dates__item">8 - 18 Апреля 2022</span>
							<span class="tours_dates__item">29 Апреля - 9 Мая 2022</span>
							<span class="tours_dates__item">20 - 30 Мая 2022</span>
							<span class="tours_dates__item">10 - 20 Октября 2022</span>
						</span>

						<span class="tours_desc__duration">11 дней</span>

						<span class="tours_desc__more">Подробнее</span>
					</span>
				</a>

				<!-- Turkey | offroad -->
				<a class="tours_list__item" href="javascript:void(0);">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/enduro.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Турция | Offroad</span>

						<span class="tours_desc__duration">15 дней</span>

						<span class="tours_desc__more">Ожидайте в ближайшее время</span>
					</span>
				</a>
			<?php }
			else { ?>
				<div class="hidden">
					<div class="tours-cont">
						<?php $urll = strval(icl_link_to_element("9127", 'page', ' '));
						$real_url = explode('"', $urll);
						echo '<a href="'. $real_url[1] . '"><div class="tour-cont top-border">
						<img class="arc-feautured-img" src="/wp-content/uploads/2020/05/shutterstock_636336056-e1615801862207.jpg" />
						<div class="arc_tour_details">
						<h2>' . __('Individual Moto Tour', 'khl_template') . '</h2>
						<p>' . __('We offer individual motorcycle tours drawn up for your liking and desire! Tell us what you need for your trip and we will bring it to live.It is also possible to offer a motorcycle tour of your choice, on dates convenient for you. The group must be at least 4 people.', 'khl_template') . '</p>
						</div><div class="arc_tour_details bordered shadowed">
						<h3>' . __('Quick Overview', 'khl_template') . '</h3>
						<strong>' . __('Destinations: ', 'khl_template') . '</strong>' . __('Of your choice', 'khl_template') . '<br />
						<strong>' . __('Duration: ', 'khl_template') . '</strong>' . __('Of your choice', 'khl_template') . '<br />
						<strong>' . __('Dates: ', 'khl_template') . '</strong>' . __('Of your choice', 'khl_template') . '<br />
						<strong>' . __('Prices from: ', 'khl_template') . '</strong>150 EUR<br />
					   </div></div></a>'; ?>
						<?php /**
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
									$tour_book_url = $tour_url . '#book-now';
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
									$tour_duration = $tour_days . ' ' . __('days', 'khl_template');
									$tour_date = get_post_meta($post->ID, 'khl_tour_details_khl_start', true);
									$dateTime = DateTime::createFromFormat("Ymd", $tour_date);
									$tour_dates = $dateTime->format('jS F Y');
									$tour_min_price = get_post_meta($post->ID, 'khl_tour_prices_khl_passenger', true);
									//generate_do_template_part( 'archive' );
									echo '<div class="tour-cont top-border">
						<img class="arc-feautured-img" src="' . $feautured_image[0] . '"></img>
						<div class="arc_tour_details">
						<a href="' . $tour_url . '"><h2>'. $tour_title . '</h2>
						<p>' . $tour_short_desc . '</p></a>
						</div><div class="arc_tour_details bordered shadowed">
						<h3>' . __('Quick Overview', 'khl_template') . '</h3>
						<strong>' . __('Destinations: ', 'khl_template') . '</strong>'. $tour_highlights .'<br />
						<strong>' . __('Duration: ', 'khl_template') . '</strong>' . $tour_duration . '<br />
						<strong>' . __('Dates: ', 'khl_template') . '</strong><a href="' . $calendarUrl . '">' . __('Calendar', 'khl_template') . '</a><br />
						<strong>' . __('Prices from: ', 'khl_template') . '</strong>' . $tour_min_price . ' EUR<br />
					   </div></div>';

								endwhile;

								echo '<div class="tour-cont top-border">
						<img class="arc-feautured-img" src="/img/coming-soon.jpg" />
						<div class="arc_tour_details">
						<a href="#"><h2>Turkey</h2></a>
						<p>' . __('Coming soon', 'khl_template') . '</p>
						</div><div class="arc_tour_details bordered shadowed">
						<h3>' . __('Quick Overview', 'khl_template') . '</h3>
						<strong>' . __('Destinations: Turkey', 'khl_template') . '</strong><br />
						<strong>' . __('Duration: ', 'khl_template') . '</strong><br />
						<strong>' . __('Dates: ', 'khl_template') . '</strong><br />
						<strong>' . __('Prices from: ', 'khl_template') . '</strong>EUR<br />
						</div></div>';
							/**
							 * generate_after_loop hook.
							 *
							 * @since 2.3
							 */
							//do_action( 'generate_after_loop', 'archive' );
							else :
								generate_do_template_part( 'none' );
							endif;
						}

						/**
						 * generate_after_main_content hook.
						 *
						 * @since 0.1
						 */
						do_action( 'generate_after_main_content' ); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</main>
</div>



<?php /**
 * generate_after_primary_content_area hook.
 *
 * @since 2.0
 */
do_action( 'generate_after_primary_content_area' );

generate_construct_sidebars();

get_footer(); ?>


