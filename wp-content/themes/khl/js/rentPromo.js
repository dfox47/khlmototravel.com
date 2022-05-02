
let $promoInput     = $('.js-order-promo')
let promoVal        = $promoInput ? $promoInput.val() : ''
let discount        = 0.7
let $html           = $('html')
let promoCodeUrl    = getUrlParameter('promo')

if (promoCodeUrl && $promoInput) {
	$promoInput.val(promoCodeUrl.toLowerCase())

	checkPromo()
}

function checkPromo() {
	console.log('s33')

	if ($promoInput.val() == null) return

	// get new value of input
	promoVal = $promoInput.val().toLowerCase()

	if (promoVal === 'moto2022') {
		$promoInput.removeClass('error').addClass('success')
		localStorage.setItem('promo', discount)
		$html.addClass('bike_discount_active')

		priceTotal(discount)

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

// set old & new prices
$('.js-bike-price').each(function () {
	let $this = $(this)
	let price = parseInt($this.attr('data-price'))

	$this.parent().find('.js-price-old').text(price)
	$this.parent().find('.js-price-new').text((price * discount).toFixed(0))
})
