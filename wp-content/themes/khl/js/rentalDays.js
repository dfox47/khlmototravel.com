
$(window).bind('load', function() {
	calendarDate()

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

let calendarDate = () => {
	let datePicker = $('.js-datepicker')

	if (!datePicker.length) return

	// after update
	datePicker.datepicker({
		defaultDate: +1,
		dateFormat: 'dd/mm/yy',
		minDate: 0,
		onSelect: function() {
			calcDiff()
			checkPromo()
		},
		yearRange: '2022:2023'
	})
}

let calcDiff = () => {
	let $dateFrom       = $('.js-pickup-date')
	let $dateTo         = $('.js-return-date')

	if (!$dateFrom.length) return

	let dateFromGet     = $dateFrom.datepicker('getDate')
	let dateToGet       = $dateTo.datepicker('getDate')
	let diff

	$dateFrom.removeClass('error')
	$dateTo.removeClass('error')

	// date FROM empty
	if (!dateFromGet) {
		$dateFrom.datepicker({
			dateFormat: 'dd/mm/yy',
			defaultDate: $dateFrom.val(),
			minDate: 0,
			onSelect: function() {
				calcDiff()
				checkPromo()
			},
			yearRange: '2022:2023'
		})

		dateFromGet = $dateFrom.datepicker('getDate')
	}

	// date TO empty
	if (!dateToGet) {
		$dateTo.datepicker({
			dateFormat: 'dd/mm/yy',
			defaultDate: +1,
			minDate: +1,
			onSelect: function() {
				calcDiff()
				checkPromo()
			},
			yearRange: '2022:2023'
		})

		$dateTo.datepicker('setDate', $dateTo.val())
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
