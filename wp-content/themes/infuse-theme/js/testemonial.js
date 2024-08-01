document.addEventListener('DOMContentLoaded', function() {
	const testimonials = document.querySelectorAll('.testemonial-card');
	const leftNav = document.querySelector('.gtm_left-navigation');
	const rightNav = document.querySelector('.gtm_right-navigation');
	let currentIndex = 0;

	function showTestimonial(index) {
		testimonials.forEach((testimonial, i) => {
			testimonial.style.display = i === index ? 'block' : 'none';
		});
	}

	function initializeTestimonialSlider() {
		leftNav.addEventListener('click', function() {
			currentIndex = (currentIndex === 0) ? testimonials.length - 1 : currentIndex - 1;
			showTestimonial(currentIndex);
		});

		rightNav.addEventListener('click', function() {
			currentIndex = (currentIndex === testimonials.length - 1) ? 0 : currentIndex + 1;
			showTestimonial(currentIndex);
		});

		// Initially show the first testimonial
		showTestimonial(currentIndex);
	}

	// Media query to check if the viewport width is at least 768px (desktop devices)
	if (window.matchMedia('(min-width: 768px)').matches) {
		initializeTestimonialSlider();
	}
});