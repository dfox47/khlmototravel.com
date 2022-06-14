
var $ = jQuery

$(document).on('click', '.js-popup-link', function (e) {
	e.preventDefault()

	let url             = $(this).attr('href')
	let $popupDesc      = $('.js-popup-content')

	if ( !$popupDesc.length ) return

	$popupDesc.empty()

	$.ajax({
		url: url,
		success: function (result) {
			let $result = $(result).find('article').html()

			$popupDesc.html($result)
		}
	})

	document.querySelector('html').classList.add('popup_active')
})

// popup close button
document.querySelectorAll('.js-popup-close').forEach((closeBtn) => {
	console.log('s28')

	closeBtn.addEventListener('click', () => {
		document.querySelector('html').classList.remove('popup_active')
	})
})
