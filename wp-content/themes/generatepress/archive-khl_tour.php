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
$calendarUrl    =  '/' . $langCode . '/calendar';

switch ($langCode) {
	case 'ru':
		$readMore = 'Подробнее';
		break;
	case 'de':
		$readMore = 'Weiterlesen';
		break;
	case 'bg':
		$readMore = 'Повече';
		break;
	// en
	default:
		$readMore = 'Read more';
		break;
} ?>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<h1><?php echo __('Motorcycle Tours', 'khl_template'); ?></h1>

		<div class="tours_list">
			<!-- Individual -->
			<a class="tours_list__item" href="<?php if ($langCode !== 'en') echo '/' . $langCode; ?>/individual-moto-tour/">
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
						// en
						else { ?>
							day
						<?php } ?>
					</span>

					<span class="tours_desc__more"><?php echo $readMore; ?></span>
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
							<span class="tours_dates__item">10 - 23 June 2023</span>
							<span class="tours_dates__item">1 June - 14 July 2023</span>
							<span class="tours_dates__item">26 August - 8 September 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
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
							<span class="tours_dates__item">13 - 21 May 2023</span>
							<span class="tours_dates__item">27 May - 4 June 2023</span>
							<span class="tours_dates__item">10 - 18 June 2023</span>
							<span class="tours_dates__item">1 - 9 July 2023</span>
							<span class="tours_dates__item">12 - 20 August 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


				<!-- Bulgaria  -->
				<a class="tours_list__item" href="/moto-tours/wine-spa-history/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/06/shutterstock_633371231-e1615800001229.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Bulgaria | Wine, Spa & History</span>
						<span class="tours_desc__destinations">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="tours_desc__duration">5 days</span>
						<span class="tours_dates">
						<span class="tours_dates__item">22 - 26 May 2023</span>
						<span class="tours_dates__item">20 - 25 July 2023</span>
						<span class="tours_dates__item">10 - 14 Septmeber 2023</span>
					</span>

						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


				<!-- Bulgaria | offroad | 11 days -->
				<a class="tours_list__item" href="/moto-tours/bulgaria-offroad-11-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-03.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgaria | Offroad</span>
						<span class="tours_desc__destinations">Sofia, Bansko, Dospat, Devin, Smolyan, Byal Izvor, Zlatograd</span>
						<span class="tours_desc__duration">11 days</span>
						<span class="tours_dates">
						<span class="tours_dates__item">May - Septermber 2023 Available on request</span>
						<span class="tours_dates__item">Min. group 2 people</span>	
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 7 days -->
				<a class="tours_list__item" href="/moto-tours/bulgaria-offroad-7-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-08.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgaria | Offroad</span>
						<span class="tours_desc__destinations">Sofia, Bansko, Dospat, Devin, Pamporovo</span>
						<span class="tours_desc__duration">7 days</span>
						<span class="tours_dates">
						<span class="tours_dates__item">May - Septermber 2023 Available on request</span>
						<span class="tours_dates__item">Min. group 2 people</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Turkey -->
				<a class="tours_list__item" href="/moto-tours/turkey/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2022/09/i5p8jrecg2s71.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Turkey</span>
						<span class="tours_desc__duration">11 days</span>
						<span class="tours_dates">
							<span class="tours_dates__item">15 - 25 April 2023</span>
							<span class="tours_dates__item">29 April - 9 May 2023</span>
							<span class="tours_dates__item">30 Septmeber - 10 October 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Turkey | offroad -->
				<a class="tours_list__item" href="javascript:void(0);">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2022/09/33.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Turkey | Offroad</span>
						<span class="tours_desc__duration">15 days</span>
						<span class="tours_desc__more">Coming soon</span>
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
							<span class="tours_dates__item">20 - 28 July 2023</span>
							<span class="tours_dates__item">30 July - 8 August 2023</span>
							<span class="tours_dates__item">16 - 24 Septmeber 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Macedonia -->
				<a class="tours_list__item" href="/moto-tours/macedonia/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/05/IMG_6666-scaled.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Macedonia</span>
						<span class="tours_desc__destinations">Sofia, Skopje, Bitola, Ohrid, Mavrovo</span>
						<span class="tours_desc__duration">7 days</span>
						<span class="tours_dates__item">May - Septermber 2023 Available on request</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				

				<!-- History, sea, culture of Bulgaria and Greece -->
				<a class="tours_list__item" href="/moto-tours/history-sea-culture-of-bulgaria-and-greece/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">History, sea, culture of Bulgaria and Greece</span>
						<span class="tours_desc__destinations">Sofia, Belogradchik, Tsarevo, Devin, Thassos, Sandanski, Velingrad</span>
						<span class="tours_desc__duration">12 days</span>
						<span class="tours_dates__item">May - Septermber 2023 Available on request</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


			<?php }
			// bg
			else if ($langCode == 'bg') { ?>
				<!-- Balkan Moto Cruise | 6 - 18 June 2022 -->
				<a class="tours_list__item" href="/bg/moto-tours/5-countries">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Около Балканите</span>
						<span class="tours_desc__destinations">България, Сърбия, Черна гора, Албания, Северна Македония</span>
						<span class="tours_desc__duration">14 дни</span>
						<span class="tours_dates">
							<span class="tours_dates__item">10 - 23 Июни 2023</span>
							<span class="tours_dates__item">1 Июни - 14  Июли</span>
							<span class="tours_dates__item">26 Август - 8 Септември 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
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
							<span class="tours_dates__item">13 - 21 Май 2023</span>
							<span class="tours_dates__item">27 Май - 4 Июни 2023</span>
							<span class="tours_dates__item">10 - 18 Июни 2023</span>
							<span class="tours_dates__item">1 - 9 Июли 2023</span>
							<span class="tours_dates__item">12 - 20 Август 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


				<!-- Bulgaria  -->
				<a class="tours_list__item" href="/bg/moto-tours/wine-spa-history/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/06/shutterstock_633371231-e1615800001229.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">България | Вино, СПА и история</span>
						<span class="tours_desc__destinations">София, Велико Търново, Велинград</span>
						<span class="tours_desc__duration">5 дни</span>
						<span class="tours_dates">
						<span class="tours_dates__item">22 - 26 Май 2023</span>
						<span class="tours_dates__item">20 - 25 Июни 2023</span>
						<span class="tours_dates__item">10 - 14 Септември 2023</span>
					</span>

						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


				<!-- Bulgaria | offroad | 11 days -->
				<a class="tours_list__item" href="/bg/moto-tours/bulgaria-offroad-11-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-03.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">България | Offroad</span>
						<span class="tours_desc__destinations">София, Банско, Доспат, Девин, Смолян, Бял извор, Златоград</span>
						<span class="tours_desc__duration">11 дни</span>
						<span class="tours_dates">
						<span class="tours_dates__item">Май - септември 2023 г.</span>
						<span class="tours_dates__item">Мин. група 2 души. Ние предлагаме при поискване</span>	
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 7 days -->
				<a class="tours_list__item" href="/bg/moto-tours/bulgaria-offroad-7-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-08.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">България | Offroad</span>
						<span class="tours_desc__destinations">София, Банско, Доспат, Девин, Пампорово</span>
						<span class="tours_desc__duration">7 дни</span>
						<span class="tours_dates">
						<span class="tours_dates__item">Май - септември 2023 г.</span>
						<span class="tours_dates__item">Мин. група 2 души. Ние предлагаме при поискване</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Turkey -->
				<a class="tours_list__item" href="/bg/moto-tours/turkey/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2022/09/i5p8jrecg2s71.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Турция</span>
						<span class="tours_desc__duration">11 дни</span>
						<span class="tours_dates">
							<span class="tours_dates__item">15 - 25 Април 2023</span>
							<span class="tours_dates__item">29 Април - 9 Май 2023</span>
							<span class="tours_dates__item">30 Септеври - 10 Октомври 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Turkey | offroad -->
				<a class="tours_list__item" href="javascript:void(0);">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2022/09/33.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Турция | Offroad</span>
						<span class="tours_desc__duration">15 дни</span>
						<span class="tours_desc__more">ОЧАКВАЙТЕ СКОРО</span>
					</span>
				</a>

				<!-- Romania | 15 - 23 July 2022 -->
				<a class="tours_list__item" href="/bg/moto-tours/romania/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/08/Photo_6553967_DJI_367_jpg_7369832_0_2021713112238_photo_original-scaled.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">РУМЪНИЯ</span>
						<span class="tours_desc__destinations">София, Белоградчик, Новаци, Турда, Брашов, Букурещ, Русе</span>
						<span class="tours_desc__duration">9 дни</span>
						<span class="tours_dates">							
							<span class="tours_dates__item">20 - 28 Юли 2023</span>
							<span class="tours_dates__item">30 Юли - 8 Аугуст 2023</span>
							<span class="tours_dates__item">16 - 24 Септември 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Macedonia -->
				<a class="tours_list__item" href="/moto-tours/macedonia/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/05/IMG_6666-scaled.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Македония</span>
						<span class="tours_desc__destinations">Сфоия, Скопие, Битоля, Охрид, Маврово</span>
						<span class="tours_desc__duration">7 days</span>
						<span class="tours_dates__item">Май - септември 2023 г. Ние предлагаме при поискване</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				

				<!-- History, sea, culture of Bulgaria and Greece -->
				<a class="tours_list__item" href="/bg/moto-tours/history-sea-culture-of-bulgaria-and-greece/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">История, море, култура на България и Гърция</span>
						<span class="tours_desc__destinations">София, Белоградчик, Велико Търново, Царево, Девин, о. Тасос, Сандански, Велинград</span>
						<span class="tours_desc__duration">12 дни</span>
						<span class="tours_dates__item">Май - септември 2023 г. Ние предлагаме при поискване</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>



			<?php }
			// de
			else if ($langCode == 'de') { ?>
				<!-- Balkan Moto Cruise | 6 - 18 June 2022 -->
				<a class="tours_list__item" href="/de//moto-tours/5-countries">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Vokrut Balkan</span>
						<span class="tours_desc__destinations">Bulgarien, Serbien, Montenegro, Albanien, Nordmazedonien</span>
						<span class="tours_desc__duration">14 tage</span>
						<span class="tours_dates">
							<span class="tours_dates__item">10 - 23 Juni 2023</span>
							<span class="tours_dates__item">1 Juni - 14 Juli 2023</span>
							<span class="tours_dates__item">26 August - 8 September 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
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
							<span class="tours_dates__item">13 - 21 May 2023</span>
							<span class="tours_dates__item">27 May - 4 Juni 2023</span>
							<span class="tours_dates__item">10 - 18 Juni 2023</span>
							<span class="tours_dates__item">1 - 9 Juli 2023</span>
							<span class="tours_dates__item">12 - 20 August 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


				<!-- Bulgaria  -->
				<a class="tours_list__item" href="/de/moto-tours/wine-spa-history/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/06/shutterstock_633371231-e1615800001229.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Bulgarien | Wein, Spa & Geschichte</span>
						<span class="tours_desc__destinations">Sofia, Veliko Tarnovo, Velingrad</span>
						<span class="tours_desc__duration">5 Tage</span>
						<span class="tours_dates">
						<span class="tours_dates__item">22 - 26 May 2023</span>
						<span class="tours_dates__item">20 - 25 Juli 2023</span>
						<span class="tours_dates__item">10 - 14 Septmeber 2023</span>
					</span>

						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


				<!-- Bulgaria | offroad | 11 days -->
				<a class="tours_list__item" href="/de/moto-tours/bulgaria-offroad-11-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-03.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgarien | Offroad</span>
						<span class="tours_desc__destinations">Sofia, Bansko, Dospat, Devin, Smolyan, Byal Izvor, Zlatograd</span>
						<span class="tours_desc__duration">11 Tage</span>
						<span class="tours_dates">
						<span class="tours_dates__item">May - Septermber 2023 Auf Anfrage verfügbar</span>
						<span class="tours_dates__item">Min Gruppe 2 Personen</span>	
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 7 days -->
				<a class="tours_list__item" href="/de/moto-tours/bulgaria-offroad-7-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-08.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Bulgarien | Offroad</span>
						<span class="tours_desc__destinations">Sofia, Bansko, Dospat, Devin, Pamporovo</span>
						<span class="tours_desc__duration">7 Tage</span>
						<span class="tours_dates">
						<span class="tours_dates__item">May - Septermber 2023 Auf Anfrage verfügbar</span>
						<span class="tours_dates__item">Min Gruppe 2 Personen</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Turkey -->
				<a class="tours_list__item" href="/de/moto-tours/turkey/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2022/09/i5p8jrecg2s71.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Truthahn</span>
						<span class="tours_desc__duration">11 Tage</span>
						<span class="tours_dates">
							<span class="tours_dates__item">15 - 25 April 2023</span>
							<span class="tours_dates__item">29 April - 9 May 2023</span>
							<span class="tours_dates__item">30 Septmeber - 10 October 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Turkey | offroad -->
				<a class="tours_list__item" href="javascript:void(0);">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2022/09/33.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Truthahn | Offroad</span>
						<span class="tours_desc__duration">15 Tage</span>
						<span class="tours_desc__more">Demnächst</span>
					</span>
				</a>

				<!-- Romania | 15 - 23 July 2022 -->
				<a class="tours_list__item" href="/de/moto-tours/romania/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/08/Photo_6553967_DJI_367_jpg_7369832_0_2021713112238_photo_original-scaled.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Rumänien</span>
						<span class="tours_desc__destinations">Sofia, Belogradchik, Novaci, Turda, Brasov, Bucharest, Ruse</span>
						<span class="tours_desc__duration">9 Tage</span>
						<span class="tours_dates">							
							<span class="tours_dates__item">20 - 28 Juli 2023</span>
							<span class="tours_dates__item">30 Juli - 8 August 2023</span>
							<span class="tours_dates__item">16 - 24 Septmeber 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Macedonia -->
				<a class="tours_list__item" href="/de/moto-tours/macedonia/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/05/IMG_6666-scaled.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Mazedonien</span>
						<span class="tours_desc__destinations">Sofia, Skopje, Bitola, Ohrid, Mavrovo</span>
						<span class="tours_desc__duration">7 Tage</span>
						<span class="tours_dates__item">May - Septermber 2023 Auf Anfrage verfügbar</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				

				<!-- History, sea, culture of Bulgaria and Greece -->
				<a class="tours_list__item" href="/de/moto-tours/history-sea-culture-of-bulgaria-and-greece/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Geschichte, Meer, Kultur Bulgariens und Griechenlands</span>
						<span class="tours_desc__destinations">Sofia, Belogradchik, Tsarevo, Devin, Thassos, Sandanski, Velingrad</span>
						<span class="tours_desc__duration">12 Tage</span>
						<span class="tours_dates__item">May - Septermber 2023 Auf Anfrage verfügbar</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


			<?php }
			// ru
			else if ($langCode == 'ru') { ?>
				<!-- Balkan Moto Cruise | 6 - 18 June 2022 -->
				<a class="tours_list__item" href="/ru/moto-tours/5-countries">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Вокруг Балкан</span>
						<span class="tours_desc__destinations">Болгария, Сербия, Черногория, Албания, Северная Македония</span>
						<span class="tours_desc__duration">14 дней</span>
						<span class="tours_dates">
							<span class="tours_dates__item">10 - 23 Июня 2023</span>
							<span class="tours_dates__item">1 Июня - 14 Июля</span>
							<span class="tours_dates__item">26 Августа - 8 Сентября 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Bulgaria -->
				<a class="tours_list__item" href="/ru/moto-tours/highlights-of-bulgaria/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/03/BMW-1200-GS_512_gimp.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Болгария</span>
						<span class="tours_desc__destinations">София, Белоградчик, Велико Търново, Велинград, Девин, Банско</span>
						<span class="tours_desc__duration">9 дней</span>
						<span class="tours_dates">
							<span class="tours_dates__item">13 - 21 Мая 2023</span>
							<span class="tours_dates__item">27 Мая - 4 Июня 2023</span>
							<span class="tours_dates__item">10 - 18 Июня 2023</span>
							<span class="tours_dates__item">1 - 9 Июля 2023</span>
							<span class="tours_dates__item">12 - 20 Августа 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


				<!-- Bulgaria  -->
				<a class="tours_list__item" href="/ru/moto-tours/wine-spa-history/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/06/shutterstock_633371231-e1615800001229.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Болгария | Вино, СПА и история</span>
						<span class="tours_desc__destinations">София, Велико Търново, Велинград</span>
						<span class="tours_desc__duration">5 дней</span>
						<span class="tours_dates">
						<span class="tours_dates__item">22 - 26 Мая 2023</span>
						<span class="tours_dates__item">20 - 25 Июня 2023</span>
						<span class="tours_dates__item">10 - 14 Сентября 2023</span>
					</span>

						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>


				<!-- Bulgaria | offroad | 11 days -->
				<a class="tours_list__item" href="/ru/moto-tours/bulgaria-offroad-11-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-03.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Болгария | Offroad</span>
						<span class="tours_desc__destinations">София, Банско, Доспат, Девин, Смолян, Бял извор, Златоград</span>
						<span class="tours_desc__duration">11 дней</span>
						<span class="tours_dates">
						<span class="tours_dates__item">Май - Сентябрь 2023 г.</span>
						<span class="tours_dates__item">Мин. группа 2 человека. Доступно по запросу</span>	
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Bulgaria | offroad | 7 days -->
				<a class="tours_list__item" href="/ru/moto-tours/bulgaria-offroad-7-days/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/12/photo_2021-12-23_19-44-08.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Болгария | Offroad</span>
						<span class="tours_desc__destinations">София, Банско, Доспат, Девин, Пампорово</span>
						<span class="tours_desc__duration">7 дней</span>
						<span class="tours_dates">
						<span class="tours_dates__item">Май - Сентябрь 2023 г.</span>
						<span class="tours_dates__item">Мин. группа 2 человека. Доступно по запросу</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Turkey -->
				<a class="tours_list__item" href="/ru/moto-tours/turkey/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2022/09/i5p8jrecg2s71.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Турция</span>
						<span class="tours_desc__duration">11 дней</span>
						<span class="tours_dates">
							<span class="tours_dates__item">15 - 25 Апреля 2023</span>
							<span class="tours_dates__item">29 Апреля - 9 Мая 2023</span>
							<span class="tours_dates__item">30 Сентября - 10 Октября 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Turkey | offroad -->
				<a class="tours_list__item" href="javascript:void(0);">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2022/09/33.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Турция | Offroad</span>
						<span class="tours_desc__duration">15 дней</span>
						<span class="tours_desc__more">СКОРО</span>
					</span>
				</a>

				<!-- Romania | 15 - 23 July 2022 -->
				<a class="tours_list__item" href="/ru/moto-tours/romania/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/08/Photo_6553967_DJI_367_jpg_7369832_0_2021713112238_photo_original-scaled.jpg);"></span>

					<span class="tours_desc">
						<span class="tours_desc__title">Румыния</span>
						<span class="tours_desc__destinations">София, Белоградчик, Новаци, Турда, Брашов, Букурещ, Русе</span>
						<span class="tours_desc__duration">9 дней</span>
						<span class="tours_dates">							
							<span class="tours_dates__item">20 - 28 Июля 2023</span>
							<span class="tours_dates__item">30 Июля - 8 Аугуста 2023</span>
							<span class="tours_dates__item">16 - 24 Сентября 2023</span>
						</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				<!-- Macedonia -->
				<a class="tours_list__item" href="/moto-tours/macedonia/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2021/05/IMG_6666-scaled.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">Македония</span>
						<span class="tours_desc__destinations">София, Скопие, Битоля, Охрид, Маврово</span>
						<span class="tours_desc__duration">7 дней</span>
						<span class="tours_dates__item"> Май - Сентябрь 2023 г. Доступно по запросу</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
					</span>
				</a>

				

				<!-- History, sea, culture of Bulgaria and Greece -->
				<a class="tours_list__item" href="/ru/moto-tours/history-sea-culture-of-bulgaria-and-greece/">
					<span class="tours_bg" style="background-image: url(/wp-content/uploads/2020/05/shutterstock_639716314-e1615802247379.jpg);"></span>
					<span class="tours_desc">
						<span class="tours_desc__title">История, море, культура Болгарии и Греции</span>
						<span class="tours_desc__destinations">София, Белоградчик, Велико Търново, Царево, Девин, о. Тасос, Сандански, Велинград</span>
						<span class="tours_desc__duration">12 дней</span>
						<span class="tours_dates__item">Май - Сентябрь 2023 г. Доступно по запросу</span>
						<span class="tours_desc__more"><?php echo $readMore; ?></span>
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


