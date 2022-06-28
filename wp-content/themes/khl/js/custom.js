
var $ = jQuery

// menu toggle
document.querySelectorAll('.menu-toggle').forEach((button) => {
	button.addEventListener('click', () => {
		document.querySelector('html').classList.toggle('topmenu_active')
	})
})



// full form
const fullForm = () => {
	let $showFullForm   = document.querySelector('.js-fullform-btn')
	let $formBook       = document.querySelector('.js-book-form-full')

	if (!$showFullForm || !$formBook) return

	$showFullForm.addEventListener('click', () => {
		setTimeout(() => {
			window.scroll({
				behavior: 'smooth',
				top: $showFullForm.getBoundingClientRect().top + window.scrollY
			});
		}, 100)

		$formBook.classList.toggle('active')
	})
}

fullForm()



$(window).bind('load', function() {
	$('.js-feedback-btn').on('click', function () {
		$('.js-book-popup').addClass('active')
	})

	$('.js-book-popup-close').on('click', function () {
		$('.js-book-popup').removeClass('active')
	})



	let feedBackForm    = $('.js-feedback-form')
	let fieldEmail      = $('.js-field-email')
	let fieldName       = $('.js-field-name')
	let fieldPhone      = $('.js-field-phone')

	let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	fieldEmail.on('input', function () {
		fieldEmail.removeClass('not-valid')

		if ( re.test(String(fieldEmail.val()).toLowerCase()) !== true ) {
			fieldEmail.addClass('not-valid')
		}
	})

	fieldName.on('input', function () {
		fieldName.removeClass('not-valid')

		if ( fieldName.val().length < 3 || !isNaN(fieldName.val()) ) {
			fieldName.addClass('not-valid')
		}
	})

	fieldPhone.on('input', function () {
		fieldPhone.removeClass('not-valid')

		if ( fieldPhone.val().length < 8 || isNaN(fieldPhone.val()) ) {
			fieldPhone.addClass('not-valid')
		}
	})

	function showError() {
		$('.js-form-error').addClass('active')

		$('.js-btn-submit').removeClass('loading')

		setTimeout(function () {
			$('.js-form-error').removeClass('active')
		}, 2000)
	}

	$('.js-btn-submit').on('click', function (e) {
		e.preventDefault()

		let $this = $(this)

		$this.addClass('loading')

		// name
		if (fieldName.val().length < 3 || !isNaN(fieldName.val())) {
			fieldName.addClass('not-valid')

			showError()

			return
		}

		// email
		if (re.test(String(fieldEmail.val()).toLowerCase()) !== true) {
			fieldEmail.addClass('not-valid')

			showError()

			return
		}

		// phone
		if (fieldPhone.val().length < 3 || isNaN(fieldPhone.val())) {
			fieldPhone.addClass('not-valid')

			showError()

			return
		}

		// send form
		$.ajax({
			url: feedBackForm.attr('action') + "?ajax=true",
			type: feedBackForm.attr('method'),
			data: feedBackForm.serialize(),
			success: function () {
				$('.js-form-success').addClass('active')

				$this.removeClass('loading')

				setTimeout(function () {
					$('.js-form-success').removeClass('active')
					$('.js-book-popup ').removeClass('active')
				}, 2000)

				fieldName.removeClass('not-valid').val('')
				fieldPhone.removeClass('not-valid').val('')
				fieldEmail.removeClass('not-valid').val('')
			}
		});
	})



	calcDiff()
	checkPromo()

	$(document).on('change', '.js-bike-price', function () {
		calcDiff()
		checkPromo()
	})

	$(document).on('click', '.js-popup-close', function (e) {
		e.preventDefault()

		$('.js-popup').removeClass('active')
	})
})
