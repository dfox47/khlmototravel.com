
let $promoInput     = $('.js-order-promo')
let promoVal        = $promoInput.val()

// check at page load
if (promoVal !== '') {
	checkPromo()
}

$('.js-order-promo-submit').click(function (e) {
	e.preventDefault()

	checkPromo()
})

function checkPromo() {
	// get new value of input
	promoVal = $promoInput.val().toLowerCase()

	if ( promoVal === 'moto2022') {
		$promoInput.removeClass('error').addClass('success')
		localStorage.setItem('promo', '0.7')

		priceTotal()

		return
	}

	$promoInput.addClass('error').removeClass('success')
	localStorage.setItem('promo', '1')

	priceTotal()
}
