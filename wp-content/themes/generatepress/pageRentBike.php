<?php
/**
 * Template Name: Rent a Bike
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<?php $i = '/wp-content/themes/khl/img/'; ?>

<main>
	<div class="wrap">
		<h1>
			<span class="lang_bg_only">Мотор под наем в София</span>
			<span class="lang_de_only">Rent a motorcycle in Sofia</span>
			<span class="lang_en_only">Rent a motorcycle in Sofia</span>
		</h1>

		<form class="order_form js-order-form" action="/wp-content/themes/khl/rentBikeMail.php" method="post">
			<div id="bikes" class="bikes">
				<!-- should be 800x600 or equal -->
				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="90" value="Honda CB 650F" />

					<span class="bike_desc">
						<img class="bike_desc__img" src="<?php echo $i; ?>/bikes/1.jpg" alt="" />
						<span class="bike_desc__model">Honda CB 650F</span>
						<span class="bike_desc__price">
							<span class="bike_price"><span class="bike_price__old js-price-old"></span><span class="bike_price__new js-price-new"></span></span>
							<span class="lang_bg_only">лв/ден</span>
							<span class="lang_de_only">BGN/Tag</span>
							<span class="lang_en_only">BGN/day</span>
						</span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="200" value="BMW F-850-GS" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/2.jpg" alt="" />
						<span class="bike_desc__model">BMW F-850-GS</span>
						<span class="bike_desc__price">
							<span class="bike_price"><span class="bike_price__old js-price-old"></span><span class="bike_price__new js-price-new"></span></span>
							<span class="lang_bg_only">лв/ден</span>
							<span class="lang_de_only">BGN/Tag</span>
							<span class="lang_en_only">BGN/day</span>
						</span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="210" value="BMW R-1200-GS" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/3.jpg" alt="" />
						<span class="bike_desc__model">BMW R-1200-GS</span>
						<span class="bike_desc__price">
							<span class="bike_price"><span class="bike_price__old js-price-old"></span><span class="bike_price__new js-price-new"></span></span>
							<span class="lang_bg_only">лв/ден</span>
							<span class="lang_de_only">BGN/Tag</span>
							<span class="lang_en_only">BGN/day</span>
						</span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="230" value="BMW R-1200-GS Adv" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/4.jpg" alt="" />
						<span class="bike_desc__model">BMW R-1200-GS Adv</span>
						<span class="bike_desc__price">
							<span class="bike_price"><span class="bike_price__old js-price-old"></span><span class="bike_price__new js-price-new"></span></span>
							<span class="lang_bg_only">лв/ден</span>
							<span class="lang_de_only">BGN/Tag</span>
							<span class="lang_en_only">BGN/day</span>
						</span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="270" value="BMW R-1250-GS" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/5.jpg" alt="" />
						<span class="bike_desc__model">BMW R-1250-GS</span>
						<span class="bike_desc__price">
									<span class="bike_price"><span class="bike_price__old js-price-old"></span><span class="bike_price__new js-price-new"></span></span>
							<span class="lang_bg_only">лв/ден</span>
							<span class="lang_de_only">BGN/Tag</span>
							<span class="lang_en_only">BGN/day</span>
						</span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="270" value="KTM 1290 Super adventure s" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/7.jpg" alt="" />
						<span class="bike_desc__model">KTM 1290 Super adventure s</span>
						<span class="bike_desc__price">
							<span class="bike_price"><span class="bike_price__old js-price-old"></span><span class="bike_price__new js-price-new"></span></span>
							<span class="lang_bg_only">лв/ден</span>
							<span class="lang_de_only">BGN/Tag</span>
							<span class="lang_en_only">BGN/day</span>
						</span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="270" value="BMW S1000 XR" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/8.jpg" alt="" />
						<span class="bike_desc__model">BMW S1000 XR</span>
						<span class="bike_desc__price">
							<span class="bike_price"><span class="bike_price__old js-price-old"></span><span class="bike_price__new js-price-new"></span></span>
							<span class="lang_bg_only">лв/ден</span>
							<span class="lang_de_only">BGN/Tag</span>
							<span class="lang_en_only">BGN/day</span>
						</span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="310" value="BMW R-1250-GS Adv" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/6.jpg" alt="" />
						<span class="bike_desc__model">BMW R-1250-GS Adv</span>
						<span class="bike_desc__price">
							<span class="bike_price"><span class="bike_price__old js-price-old"></span><span class="bike_price__new js-price-new"></span></span>
							<span class="lang_bg_only">лв/ден</span>
							<span class="lang_de_only">BGN/Tag</span>
							<span class="lang_en_only">BGN/day</span>
						</span>
					</span>
				</label>
			</div>

			<div id="order" class="order_user_info">
				<label class="order_label">
					<span class="lang_bg_only">Промо код</span>
					<span class="lang_de_only">Promo code</span>
					<span class="lang_en_only">Promo code</span>
					<input class="js-order-promo" type="text" name="promo_code" />
					<img class="order_label__icon" src="<?php echo $i; ?>/icons/success.svg" alt="" />
					<span class="order_label__promo_submit js-order-promo-submit"></span>
				</label>

				<label class="order_label pickup_date">
					<span class="lang_bg_only">Дата на вземане</span>
					<span class="lang_de_only">Abholdatum</span>
					<span class="lang_en_only">Pickup date</span>
					<input class="js-datepicker js-pickup-date" type="text" name="pickup_date" />
				</label>

				<label class="order_label return_date">
					<span class="lang_bg_only">Дата на връщане</span>
					<span class="lang_de_only">Rückflugdatum</span>
					<span class="lang_en_only">Return date</span>
					<input class="js-datepicker js-return-date" type="text" name="return_date" />
				</label>

				<div class="order_total_days">
					<span class="lang_bg_only">Общо дни</span>
					<span class="lang_de_only">Die Summe an Tagen</span>
					<span class="lang_en_only">Total days</span>
					: <span class="order_total_days__number js-order-days-rent-total">0</span>
				</div>

				<h2>
					<span class="lang_bg_only">Контакти</span>
					<span class="lang_de_only">Kontakte</span>
					<span class="lang_en_only">Contacts</span>
				</h2>

				<label class="order_label">
					<span class="lang_bg_only">Име</span>
					<span class="lang_de_only">Name</span>
					<span class="lang_en_only">Name</span>
					<input class="order_input_name js-order-value-check js-order-name" type="text" name="biker_name" />
					<img class="order_label__icon" src="<?php echo $i; ?>/icons/success.svg" alt="" />
				</label>

				<label class="order_label">
					<span class="lang_bg_only">Телефон</span>
					<span class="lang_de_only">Telefon</span>
					<span class="lang_en_only">Phone</span>
					<input class="js-order-value-check js-order-phone" type="text" name="biker_phone" />
					<img class="order_label__icon" src="<?php echo $i; ?>/icons/success.svg" alt="" />
				</label>

				<label class="order_label">
					<span class="order_label__title">E-mail</span>
					<input class="js-order-value-check" type="email" name="biker_email" placeholder="example@gmail.com" />
					<img class="order_label__icon" src="<?php echo $i; ?>/icons/success.svg" alt="" />
				</label>

				<label class="order_label">
					<input class="js-order-value-check" type="checkbox" name="terms" checked />
					<span class="order_label__checkbox">
							<span class="lang_bg_only">Запознат с <a href="/bg/terms/" target="_blank">правилата на лизинга</a></span>
							<span class="lang_de_only">Bedingungen <a href="/de/terms/" target="_blank">zugestimmt</a></span>
							<span class="lang_en_only">Agreed with <a href="/terms/" target="_blank">terms</a></span>
						</span>
				</label>

				<div class="form_submit">
					<button class="btn btn__submit" type="submit">
						<span class="lang_bg_only">Изпращане</span>
						<span class="lang_de_only">Senden</span>
						<span class="lang_en_only">Submit</span>
					</button>
				</div>
			</div>

			<input class="js-price-total-input" type="hidden" name="price_total" />
			<input class="js-order-days-rent" type="hidden" name="days_rent" />

			<!-- Sending -->
			<div class="popup js-msg-sending js-popup">
				<div class="popup__content">
					<p>
						<span class="lang_bg_only">Изпращане на поръчка...</span>
						<span class="lang_en_only">Sending an order...</span>
					</p>
				</div>
			</div>

			<!-- Success -->
			<div class="popup js-msg-success js-popup">
				<div class="popup__bg js-popup-close"></div>

				<div class="popup__content">
					<div class="lang_en_only">
						<p>Great! Thank you for your order!</p>

						<p>We will contact you soon.</p>
					</div>

					<div class="lang_bg_only">
						<p>Страхотно! Благодаря ви за вашата поръчка!</p>

						<p>Скоро ще се свържем с вас.</p>
					</div>

					<div class="text-center">
						<img class="popup_icon" src="<?php echo $i; ?>/icons/success.svg" alt="" />
					</div>

					<div class="popup__close js-popup-close"></div>
				</div>
			</div>

			<!-- Incomplete -->
			<div class="popup js-msg-incomplete js-popup">
				<div class="popup__bg js-popup-close"></div>

				<div class="popup__content">
					<p>
						<span class="lang_de_only">Bitte alle Felder ausfüllen</span>
						<span class="lang_en_only">Please fill all fields</span>
						<span class="lang_bg_only">Моля, попълнете всички полета</span>
					</p>

					<div class="text-center">
						<img class="popup_icon" src="<?php echo $i; ?>/icons/error.svg" alt="" />
					</div>

					<div class="popup__close js-popup-close"></div>
				</div>
			</div>

			<!-- Error -->
			<div class="popup js-msg-fail js-popup">
				<div class="popup__bg js-popup-close"></div>

				<div class="popup__content">
					<p>
						<span class="lang_bg_only">Нещо се обърка, моля, презаредете страницата и изпратете поръчката отново.</span>
						<span class="lang_en_only">Something went wront, please reload page and submit order again.</span>
						<span class="lang_de_only">Etwas ist schief gelaufen, bitte laden Sie die Seite neu und senden Sie die Bestellung erneut ab.</span>
					</p>

					<div class="text-center">
						<img class="popup_icon" src="<?php echo $i; ?>/icons/error.svg" alt="" />
					</div>

					<div class="popup__close js-popup-close"></div>
				</div>
			</div>
		</form>

		<div class="price_total">
			<div class="price_total__discount js-order-discount">
				<span class="js-order-discount-val">0</span>
				<span class="lang_bg_only">лв</span>
				<span class="lang_en_only">BGN</span>
				<span class="lang_de_only">BGN</span>
			</div>

			<span class="lang_bg_only">Общо</span>
			<span class="lang_en_only">Total</span>
			<span class="lang_de_only">Gesamt</span>: <span class="price_total__number js-price-total">0</span>
			<span class="lang_bg_only">лв</span>
			<span class="lang_en_only">BGN</span>
			<span class="lang_de_only">BGN</span>
		</div>
	</div>
</main>

<?php get_footer(); ?>
