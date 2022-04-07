
function priceTotal() {
	let priceBike   = parseInt($('.js-bike-price:checked').attr('data-price'));
	let rentalDays  = parseInt(localStorage.getItem('rentalDatesDiff'));
	let promo       = parseInt(localStorage.getItem('promo'));

	console.log('promo at priceTotal | ', promo);

	if (priceBike && rentalDays) {
		$('.js-price-total').text(priceBike * rentalDays);
		$('.js-price-total-input').val(priceBike * rentalDays);
	}
}
