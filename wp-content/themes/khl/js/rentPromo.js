
let $promoInput     = $('.js-order-promo')
let promoVal        = $promoInput.val()
let discount        = 0.7
let $html           = $('html')

let checkPromo = () => {
	// get new value of input
	promoVal = $promoInput.val().toLowerCase()

	// set old & new prices
	$('.js-bike-price').each(function () {
		let $this = $(this)
		let price = parseInt($this.attr('data-price'))

		$this.parent().find('.js-price-old').text(price)
		$this.parent().find('.js-price-new').text((price * discount).toFixed(0))
	})

	if ( promoVal === 'moto2022') {
		$promoInput.removeClass('error').addClass('success')
		localStorage.setItem('promo', discount)
		$html.addClass('bike_discount_active')

		priceTotal()

		return
	}

	$promoInput.addClass('error').removeClass('success')
	localStorage.setItem('promo', '1')
	$html.removeClass('bike_discount_active')

	priceTotal()
}

// check at page load
if (promoVal !== '') {
	checkPromo()
}

$('.js-order-promo-submit').click(function (e) {
	e.preventDefault()

	checkPromo()
})
