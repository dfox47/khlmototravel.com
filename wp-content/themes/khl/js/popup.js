
var $ = jQuery;

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
