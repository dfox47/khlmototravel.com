
function priceTotal() {
	let priceBike           = parseInt($('.js-bike-price:checked').attr('data-price'))
	let rentalDays          = parseInt(localStorage.getItem('rentalDatesDiff'))
	let $priceTotalOld      = $('.js-order-discount')
	let $priceTotalOldVal   = $('.js-order-discount-val')

	let priceOld            = (priceBike * rentalDays).toFixed(0)
	let priceTotal          = (0.7 * priceBike * rentalDays).toFixed(0)

	if (priceBike && rentalDays) {
		$('.js-price-total').text(priceTotal)
		$('.js-price-total-input').val(priceTotal)
	}

	if (priceOld !== priceTotal) {
		$priceTotalOldVal.text(priceOld)
		$priceTotalOld.addClass('active')

		return
	}

	$priceTotalOld.removeClass('active')
}
