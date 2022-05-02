
function priceTotal(discount) {
	let $priceTotalOld      = $('.js-order-discount')
	let $priceTotalOldVal   = $('.js-order-discount-val')
	let priceBike           = parseInt($('.js-bike-price:checked').attr('data-price'))
	let rentalDays          = parseInt(localStorage.getItem('rentalDatesDiff'))

	// let discountVal = discount ? discount : '1'
	let discountVal = discount ? discount : '0.7'

	if (!$priceTotalOld) return

	if (rentalDays < 1) {
		rentalDays = 1
	}

	let priceOld            = (priceBike * rentalDays).toFixed(0)
	let priceTotal          = (discountVal * priceBike * rentalDays).toFixed(0)

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
