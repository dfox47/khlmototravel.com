
var $ = jQuery;

let $contactForm = $('.js-order-form');

$(document).on('submit', $contactForm, function (e) {
	e.preventDefault();

	submitForm();
});

// AJAX contact form
function submitForm() {
	let messageDelay        = 3000;
	let nextStep            = true;
	let $msgFail            = $contactForm.find('.js-msg-fail');
	let $msgIncomplete      = $contactForm.find('.js-msg-incomplete');
	let $msgSending         = $contactForm.find('.js-msg-sending');
	let $msgSuccess         = $contactForm.find('.js-msg-success');

	$contactForm.on('input', '.js-order-value-check', function () {
		$(this).removeClass('error');
	});

	// incomplete
	$('.js-order-value-check').removeClass('error').each(function () {
		let $this = $(this);

		if ( !$this.val() ) {
			$this.addClass('error');

			$msgIncomplete.addClass('active').delay(messageDelay).queue(function () {
				$(this).removeClass('active').dequeue();
			});

			nextStep = false;
		}
	});

	if (!nextStep) return;

	// sending
	$msgSending.addClass('active');

	$.ajax({
		url:        $contactForm.attr('action') + "?ajax=true",
		type:       $contactForm.attr('method'),
		data:       $contactForm.serialize(),
		success:    submitFinished
	});

	function submitFinished(response) {
		response = $.trim(response);

		$msgSending.removeClass('active');

		if (response === 'success') {
			$msgSuccess.addClass('active');

			return;
		}

		$msgFail.addClass('active').delay(messageDelay).queue(function() {
			$(this).removeClass('active').dequeue();
		});
	}
}
