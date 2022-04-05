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
			<span class="lang_en_only">Rent a motorcycle in Sofia</span>
			<span class="lang_bg_only">Мотор под наем в София</span>
		</h1>


		<form class="order_form js-order-form" action="/template-parts/sendmail.php" method="post">
			<div id="bikes" class="bikes">
				<!-- should be 800x600 or equal -->
				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="60" value="Honda CB 650F" />

					<span class="bike_desc">
						<img class="bike_desc__img" src="<?php echo $i; ?>/bikes/1.jpg" alt="" />
						<span class="bike_desc__model">Honda CB 650F</span>
						<span class="bike_desc__price"><span class="bike_price">60</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>/<span class="lang_en_only">day</span><span class="lang_bg_only">ден</span></span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="100" value="BMW F-850-GS" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/2.jpg" alt="" />
						<span class="bike_desc__model">BMW F-850-GS</span>
						<span class="bike_desc__price"><span class="bike_price">100</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>/<span class="lang_en_only">day</span><span class="lang_bg_only">ден</span></span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="105" value="BMW R-1200-GS" />

					<span class="bike_desc">
						<img src="<?php echo $i; ?>/bikes/3.jpg" alt="" />
						<span class="bike_desc__model">BMW R-1200-GS</span>
						<span class="bike_desc__price"><span class="bike_price">105</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>/<span class="lang_en_only">day</span><span class="lang_bg_only">ден</span></span>
					</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="115" value="BMW R-1200-GS Adv" />

					<span class="bike_desc">
				<img src="<?php echo $i; ?>/bikes/4.jpg" alt="" />
				<span class="bike_desc__model">BMW R-1200-GS Adv</span>
				<span class="bike_desc__price"><span class="bike_price">115</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>/<span class="lang_en_only">day</span><span class="lang_bg_only">ден</span></span>
			</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="135" value="BMW R-1250-GS" />

					<span class="bike_desc">
				<img src="<?php echo $i; ?>/bikes/5.jpg" alt="" />
				<span class="bike_desc__model">BMW R-1250-GS</span>
				<span class="bike_desc__price"><span class="bike_price">135</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>/<span class="lang_en_only">day</span><span class="lang_bg_only">ден</span></span>
			</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="135" value="KTM 1290 Super adventure s" />

					<span class="bike_desc">
				<img src="<?php echo $i; ?>/bikes/7.jpg" alt="" />
				<span class="bike_desc__model">KTM 1290 Super adventure s</span>
				<span class="bike_desc__price"><span class="bike_price">135</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>/<span class="lang_en_only">day</span><span class="lang_bg_only">ден</span></span>
			</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="135" value="BMW S1000 XR" />

					<span class="bike_desc">
				<img src="<?php echo $i; ?>/bikes/8.jpg" alt="" />
				<span class="bike_desc__model">BMW S1000 XR</span>
				<span class="bike_desc__price"><span class="bike_price">135</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>/<span class="lang_en_only">day</span><span class="lang_bg_only">ден</span></span>
			</span>
				</label>

				<label class="bike_item">
					<input class="js-bike-price" type="radio" name="bike" data-price="155" value="BMW R-1250-GS Adv" />

					<span class="bike_desc">
				<img src="<?php echo $i; ?>/bikes/6.jpg" alt="" />
				<span class="bike_desc__model">BMW R-1250-GS Adv</span>
				<span class="bike_desc__price"><span class="bike_price">155</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>/<span class="lang_en_only">day</span><span class="lang_bg_only">ден</span></span>
			</span>
				</label>
			</div>

			<div id="order" class="order_user_info">
				<div>
					<label class="order_label pickup_date">
						<span class="lang_en_only">Pickup date</span>
						<span class="lang_bg_only">Дата на вземане</span>
						<input class="js-datepicker js-pickup-date js-order-value-check" type="text" name="pickup_date" />
					</label>
				</div>

				<div>
					<label class="order_label return_date">
						<span class="lang_en_only">Return date</span>
						<span class="lang_bg_only">Дата на връщане</span>
						<input class="js-datepicker js-return-date js-order-value-check" type="text" name="return_date" />
					</label>
				</div>

				<h2>
					<span class="lang_en_only">Contacts</span>
					<span class="lang_bg_only">Контакти</span>
				</h2>

				<div>
					<label class="order_label">
						<span class="lang_en_only">Name</span>
						<span class="lang_bg_only">Име</span>
						<input class="js-order-value-check" type="text" name="biker_name" />
					</label>

					<label class="order_label">
						<span class="lang_en_only">Phone</span>
						<span class="lang_bg_only">Телефон</span>
						<input class="js-order-value-check" type="text" name="biker_phone" />
					</label>

					<label class="order_label">
						<span>E-mail</span>
						<input class="js-order-value-check" type="text" name="biker_email" />
					</label>

					<label class="order_label">
						<input class="js-order-value-check" type="checkbox" name="biker_email" checked />
						<span class="order_label__checkbox">
					<span class="lang_bg_only">Запознат с правилата на лизинга</span>
					<span class="lang_en_only">Agreed with terms </span>
				</span>
					</label>
				</div>

				<div class="form_submit">
					<button class="btn btn__submit" type="submit">
						<span class="lang_en_only">Submit</span>
						<span class="lang_bg_only">Изпращане</span>
					</button>
				</div>
			</div>

			<input class="js-price-total-input" type="hidden" name="price_total" />

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
						<span class="lang_bg_only">Моля, попълнете всички полета</span>
						<span class="lang_en_only">Please fill all fields</span>
					</p>

					<div class="text-center">
						<img class="popup_icon" src="<?php echo $i; ?>/icons/error.svg" alt="" />
					</div>

					<div class="popup__close js-popup-close"></div>
				</div>
			</div>
		</form>

		<div class="price_total">
			<span class="lang_en_only">Total</span><span class="lang_bg_only">Общо</span>: <span class="price_total__number js-price-total">0</span> <span class="lang_en_only">BGN</span><span class="lang_bg_only">лв</span>
		</div>
	</div>
</main>

<?php get_footer(); ?>
