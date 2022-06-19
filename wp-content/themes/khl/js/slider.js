
// all options https://splidejs.com/guides/options/
// https://splidejs.com/guides/getting-started/
let splideSliders = document.getElementsByClassName('js-splide-slider')

for (let i = 0; i < splideSliders.length; i++) {
	let splide = new Splide(splideSliders[i]).mount({})
}



let splideToursSlider = document.getElementsByClassName('js-tours-sliderX')

for (let i = 0; i < splideToursSlider.length; i++) {
	let splideTours = new Splide(splideToursSlider[i]).mount({
		perPage: 3,
		type   : 'loop'
	})
}


