


<div class="book-popup js-book-popup">
	<div class="book-popup__bg js-book-popup-close"></div>

	<div class="book-popup__wrap">
		<div class="book-popup__content">
			<div class="btn btn_close js-book-popup-close"></div>

			<form action="/wp-content/themes/khl/sendmail.php" method="post" class="book-popup__form js-feedback-form">
				<h3 class="text-center">
					<?php if (get_locale() == 'en_US') { ?>
						Send us your contacts and we will help you make an application
					<?php }
					elseif (get_locale() == 'ru_RU') { ?>
						Отправьте нам свои контакты и мы поможем вам оформить заявку
					<?php }
					elseif (get_locale() == 'de_DE') { ?>
						Senden Sie uns Ihre Kontaktdaten und wir helfen Ihnen bei der Bewerbung
					<?php } ?>
				</h3>

				<label>
								<span>
									<?php if (get_locale() == 'en_US') { ?>
										Name
									<?php }
									elseif (get_locale() == 'ru_RU') { ?>
										Имя
									<?php }
									elseif (get_locale() == 'de_DE') { ?>
										Name
									<?php } ?>
								</span>

					<input class="js-field-name" type="text" name="name" />
				</label>

				<label>
					<span>Email</span>

					<input class="js-field-email" type="text" name="email" />
				</label>

				<label>
								<span>
									<?php if (get_locale() == 'en_US') { ?>
										Phone
									<?php }
									elseif (get_locale() == 'ru_RU') { ?>
										Телефон
									<?php }
									elseif (get_locale() == 'de_DE') { ?>
										Telefon
									<?php } ?>
								</span>

					<input class="js-field-phone" type="text" name="phone"/>
				</label>

				<input type="hidden" name="link" value="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

				<label class="btn_submit js-btn-submit">
					<input type="submit" name="submit" />

					<?php if (get_locale() == 'en_US') { ?>
						Submit
					<?php }
					elseif (get_locale() == 'ru_RU') { ?>
						Отправить
					<?php }
					elseif (get_locale() == 'de_DE') { ?>
						Senden
					<?php } ?>

					<span class="loader"></span>
				</label>
			</form>

			<div class="book-popup__error js-form-error">
				<p>
					<?php if (get_locale() == 'en_US') { ?>
						Please fill in all fields!
					<?php }
					elseif (get_locale() == 'ru_RU') { ?>
						Пожалуйста, заполните все поля
					<?php }
					elseif (get_locale() == 'de_DE') { ?>
						Bitte füllen Sie alle Felder aus
					<?php } ?>
				</p>
			</div>

			<div class="book-popup__success js-form-success">
				<p>
					<?php if (get_locale() == 'en_US') { ?>
						Email sent successfully!
					<?php }
					elseif (get_locale() == 'ru_RU') { ?>
						Письмо успешно отправлено!
					<?php }
					elseif (get_locale() == 'de_DE') { ?>
						Email wurde erfolgreich Versendet
					<?php } ?>
				</p>
			</div>
		</div>
	</div>
</div>


