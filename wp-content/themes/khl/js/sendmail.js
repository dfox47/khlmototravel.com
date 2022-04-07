
let $contactForm        = $('.js-order-form');
let $inputCheck         = $contactForm.find('.js-order-value-check');
let $msgFail            = $contactForm.find('.js-msg-fail');
let $msgIncomplete      = $contactForm.find('.js-msg-incomplete');
let $msgSending         = $contactForm.find('.js-msg-sending');
let $msgSuccess         = $contactForm.find('.js-msg-success');
let messageDelay        = 3000;
let nextStep            = true;

$contactForm.on('input', '.js-order-value-check', function () {
	let $this = $(this);
	$this.removeClass('error').addClass('success');

	if ( !$this.val() ) {
		$this.addClass('error').removeClass('success');
	}
});

// check for complete fields at the page loaded
$inputCheck.each(function () {
	let $this = $(this);
	$this.removeClass('error');

	if ( $this.val() ) {
		$this.addClass('success');
	}
});

$(document).on('submit', $contactForm, function (e) {
	e.preventDefault();

	submitForm();
});

// AJAX contact form
function submitForm() {
	nextStep = true;

	// incomplete
	$inputCheck.each(function () {
		if (!nextStep) return;

		let $this = $(this);
		$this.removeClass('error');

		if ( !$this.val() ) {
			$this.addClass('error');

			$msgIncomplete.addClass('active').delay(messageDelay).queue(function () {
				$(this).removeClass('active').dequeue();
			});

			nextStep = false;

			return;
		}

		$this.addClass('success');
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
