
$(window).bind('load', function() {
	let datePicker = $('.js-datepicker')

	if (datePicker) {
		datePicker.datepicker({
			defaultDate: +1,
			minDate: 0,
			onSelect: function() {
				calcDiff()
				checkPromo()
			},
			yearRange: '2022:2023'
		})
	}

	// check phone | allow only numbers
	$('.js-order-phone').keypress(function (e) {
		let charCode = (e.which) ? e.which : e.keyCode
		if (String.fromCharCode(charCode).match(/[^0-9()\-+]/g)) return false
	})

	// check name | allow only letters
	$('.js-order-name').bind('keyup blur',function() {
		let node = $(this)
		node.val(node.val().replace(/[^a-zA-Z ]/g,''))
	})
})

function calcDiff() {
	let $dateFrom       = $('.js-pickup-date')
	let $dateTo         = $('.js-return-date')

	if (!$dateFrom.length) return

	let dateFromGet     = $dateFrom.datepicker('getDate')
	let dateToGet       = $dateTo.datepicker('getDate')
	let diff

	$dateFrom.removeClass('error')
	$dateTo.removeClass('error')

	// date FROM not empty
	if (!dateFromGet) {
		let dateFromInputVal = $dateFrom.val()

		$dateFrom.datepicker({
			minDate: 0,
			onSelect: function() {
				calcDiff()
				checkPromo()
			}
		})

		$dateFrom.datepicker('setDate', dateFromInputVal)
		dateFromGet = $dateFrom.datepicker('getDate')
	}

	// date TO not empty
	if (!dateToGet) {
		let dateToInputVal = $dateTo.val()
		$dateTo.datepicker({
			defaultDate: +1,
			minDate: +1,
			onSelect: function() {
				calcDiff()
				checkPromo()
			}
		})

		$dateTo.datepicker('setDate', dateToInputVal)
		dateToGet = $dateTo.datepicker('getDate')
	}

	if (dateFromGet && dateToGet) {
		diff = Math.floor((dateToGet.getTime() - dateFromGet.getTime()) / 86400000)
	}

	// set minimum days to 1
	if (diff < 1) {
		diff = 1
	}

	$('.js-order-days-rent').val(diff)
	$('.js-order-days-rent-total').text(diff)

	localStorage.setItem('rentalDatesDiff', diff)
}
