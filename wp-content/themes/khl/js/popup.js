
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

$(document).on('click', '.js-popup2-close', function (e) {
	e.preventDefault()

	document.querySelector('html').classList.remove('popup2_active')
})

// popup close button
document.querySelectorAll('.js-popup-close').forEach((closeBtn) => {
	closeBtn.addEventListener('click', () => {
		document.querySelector('html').classList.remove('popup_active')
	})
})

// popup2
$('.js-popup2-show').click( function(e) {
	e.preventDefault()

	let popupContent    = document.querySelector('.popup2__content')
	let popupImg        = '<img src="' + $(this).attr('href') + '" alt="" />'

	document.querySelector('html').classList.add('popup2_active')

	if (popupContent !== null) {
		popupContent.innerHTML = popupImg

		return
	}

	const popupContentNew = document.createElement('div')
	popupContentNew.classList.add('popup2')

	popupContentNew.innerHTML = '<div class="popup2__bg js-popup2-close"></div><div class="popup2__content"><div class="popup__close js-popup2-close"></div>' + popupImg +'</div>'

	document.querySelector('html').append(popupContentNew)
})
