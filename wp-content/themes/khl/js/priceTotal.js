
function priceTotal() {
	let priceBike   = parseInt($('.js-bike-price:checked').attr('data-price'));
	let rentalDays  = parseInt(localStorage.getItem('rentalDatesDiff'));
	let promo       = localStorage.getItem('promo');

	let priceTotal  = (promo * priceBike * rentalDays).toFixed(0);

	if (priceBike && rentalDays && promo) {
		$('.js-price-total').text(priceTotal);
		$('.js-price-total-input').val(priceTotal);
	}
}
