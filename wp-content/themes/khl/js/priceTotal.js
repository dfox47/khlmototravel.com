
// calculate price after some equip was selected
$('.js-rent-equip').on('change', function () {
	checkPromo()
})

function priceTotal(discount) {
	const $priceTotalOld    = $('.js-order-discount')
	const $priceTotalOldVal = $('.js-order-discount-val')
	const priceBike         = parseInt($('.js-bike-price:checked').attr('data-price'))
	let rentalDays          = parseInt(localStorage.getItem('rentalDatesDiff'))
	const rentEquipChecked  = $('.js-rent-equip:checked')
	let rentEquipTotal      = 0

	let discountVal = discount ? discount : '1'

	if (!$priceTotalOld) return

	// set minimum 1 day for a rent
	if (rentalDays < 1) {
		rentalDays = 1
	}



	rentEquipChecked.each(function() {
		rentEquipTotal += parseInt($(this).attr('data-price'))
	})



	// count old price
	let priceOld            = parseInt((priceBike * rentalDays + rentEquipTotal)).toFixed(0)

	// count new total price
	let priceTotal          = parseInt((discountVal * priceBike * rentalDays + rentEquipTotal)).toFixed(0)

	// set/update total price
	if (priceBike && rentalDays) {
		$('.js-price-total').text(priceTotal)
		$('.js-price-total-input').val(priceTotal)

		$('#ezfc_element-857-child').val(priceTotal)
		$('.ezfc-price-value').text(priceTotal)
	}

	// activate/deactivate old price
	if (priceOld !== priceTotal) {
		$priceTotalOldVal.text(priceOld)
		$priceTotalOld.addClass('active')

		return
	}

	$priceTotalOld.removeClass('active')
}
