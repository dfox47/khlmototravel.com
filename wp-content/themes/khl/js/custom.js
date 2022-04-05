


var $ = jQuery;

$(window).bind('load', function() {
	console.log('custom.js loaded');



	// popup [START]
	$(document).on('click', '.js-popup-link', function (e) {
		e.preventDefault();

		var url = $(this).attr('href');

		$.ajax({
			url: url,
			success: function (result) {
				var $result = $(result).find('article').html();

				$('.js-popup-desc').html($result);
			}
		});

		$('html').addClass('popup_active');
	});

	$(document).on('click', '.js-popup-close', function (e) {
		e.preventDefault();

		$('html').removeClass('popup_active');
	});
	// popup [END]



	$(document).on('click', '.menu-toggle', function (e) {
		e.preventDefault();

		$('html').toggleClass('topmenu_active');
	});



	$('.js-feedback-btn').on('click', function () {
		$('.js-book-popup').addClass('active');
	});

	$('.js-book-popup-close').on('click', function () {
		$('.js-book-popup').removeClass('active');
	});

	$('.js-fullform-btn').on('click', function () {
		$('.js-book-form-full').addClass('active');
	});



	var feedBackForm    = $('.js-feedback-form');
	var fieldEmail      = $('.js-field-email');
	var fieldName       = $('.js-field-name');
	var fieldPhone      = $('.js-field-phone');

	var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	fieldEmail.on('input', function () {
		fieldEmail.removeClass('not-valid');

		if ( re.test(String(fieldEmail.val()).toLowerCase()) !== true ) {
			fieldEmail.addClass('not-valid');
		}
	});

	fieldName.on('input', function () {
		fieldName.removeClass('not-valid');

		if ( fieldName.val().length < 3 || !isNaN(fieldName.val()) ) {
			fieldName.addClass('not-valid');
		}
	});

	fieldPhone.on('input', function () {
		fieldPhone.removeClass('not-valid');

		if ( fieldPhone.val().length < 8 || isNaN(fieldPhone.val()) ) {
			fieldPhone.addClass('not-valid');
		}
	});

	function showError() {
		$('.js-form-error').addClass('active');

		$('.js-btn-submit').removeClass('loading');

		setTimeout(function () {
			$('.js-form-error').removeClass('active');
		}, 2000);
	}

	$('.js-btn-submit').on('click', function (e) {
		e.preventDefault();

		let $this = $(this);

		$this.addClass('loading');

		// name
		if (fieldName.val().length < 3 || !isNaN(fieldName.val())) {
			fieldName.addClass('not-valid');

			showError();

			return;
		}

		// email
		if (re.test(String(fieldEmail.val()).toLowerCase()) !== true) {
			fieldEmail.addClass('not-valid');

			showError();

			return;
		}

		// phone
		if (fieldPhone.val().length < 3 || isNaN(fieldPhone.val())) {
			fieldPhone.addClass('not-valid');

			showError();

			return;
		}

		// send form
		$.ajax({
			url: feedBackForm.attr('action') + "?ajax=true",
			type: feedBackForm.attr('method'),
			data: feedBackForm.serialize(),
			success: function () {
				$('.js-form-success').addClass('active');

				$this.removeClass('loading');

				setTimeout(function () {
					$('.js-form-success').removeClass('active');
					$('.js-book-popup ').removeClass('active');
				}, 2000);

				fieldName.removeClass('not-valid').val('');
				fieldPhone.removeClass('not-valid').val('');
				fieldEmail.removeClass('not-valid').val('');
			}
		});
	});
});


