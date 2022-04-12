
$(window).bind('load', function() {
	$('.js-datepicker').datepicker({
		minDate: 0,
		onSelect: function() {
			calcDiff()
			priceTotal()
		}
	})

	$('.js-order-phone').keypress(function (e) {
		let charCode = (e.which) ? e.which : e.keyCode
		if (String.fromCharCode(charCode).match(/[^0-9()\-+]/g)) return false
	})

	$('.js-order-name').bind('keyup blur',function() {
		let node = $(this)
		node.val(node.val().replace(/[^a-zA-Z ]/g,''))
	})
})

function calcDiff() {
	let $dateFrom       = $('.js-pickup-date')
	let $dateTo         = $('.js-return-date')
	let dateFromGet     = $dateFrom.datepicker('getDate')
	let dateToGet       = $dateTo.datepicker('getDate')
	let diff

	$dateFrom.removeClass('error')
	$dateTo.removeClass('error')

	// when date FROM empty
	if (!dateFromGet) {
		let dateFromInputVal = $dateFrom.val()
		$dateFrom.datepicker({
			minDate: 0,
			onSelect: function() {
				calcDiff()
				priceTotal()
			}
		});
		$dateFrom.datepicker('setDate', dateFromInputVal)
		dateFromGet = $dateFrom.datepicker('getDate')
	}

	// when date TO empty
	if (!dateToGet) {
		let dateToInputVal = $dateTo.val()
		$dateTo.datepicker({
			minDate: 0,
			onSelect: function() {
				calcDiff()
				priceTotal()
			}
		})

		$dateTo.datepicker('setDate', dateToInputVal)
		dateToGet = $dateTo.datepicker('getDate')
	}

	if (dateFromGet && dateToGet) {
		diff = Math.floor((dateToGet.getTime() - dateFromGet.getTime()) / 86400000)
	}

	$('.js-order-days-rent').val(diff)
	$('.js-order-days-rent-total').text(diff)

	localStorage.setItem('rentalDatesDiff', diff)
}
