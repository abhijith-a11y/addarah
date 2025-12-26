/**
 * Banner Component JavaScript
 * Converted from React to vanilla JavaScript for WordPress
 * 
 * Handles GSAP animations and Swiper slider initialization
 */

(function () {
	'use strict';

	// Store Swiper instance globally for debugging
	window.bannerSwiperInstance = null;

	/**
	 * Initialize Banner Component
	 */
	const initBanner = function () {
		// Get DOM elements using data attributes
		const bannerRef = document.querySelector('[data-banner-ref]');
		const logoRef = document.querySelector('[data-logo-ref]');
		const circleRef = document.querySelector('[data-circle-ref]');
		const titleRef = document.querySelector('[data-title-ref]');
		const buttonRef = document.querySelector('[data-button-ref]');
		const descriptionRef = document.querySelector('[data-description-ref]');
		const sliderButtonRef = document.querySelector('[data-slider-button-ref]');

		// Validate required elements
		if (!logoRef || !circleRef || !bannerRef || !sliderButtonRef) {
			console.warn('Banner: Required elements not found');
			// Remove scroll lock if banner elements not found
			document.body.classList.remove('banner-animating');
			document.documentElement.classList.remove('banner-animating');
			return;
		}

		// Check if GSAP is loaded
		if (typeof gsap === 'undefined') {
			console.error('Banner: GSAP library is not loaded');
			// Remove scroll lock if GSAP not loaded
			document.body.classList.remove('banner-animating');
			document.documentElement.classList.remove('banner-animating');
			return;
		}

		// Prevent scrolling during animation
		document.body.classList.add('banner-animating');
		document.documentElement.classList.add('banner-animating');

		// Initialize GSAP animations
		initBannerAnimations(logoRef, circleRef, titleRef, buttonRef, descriptionRef, sliderButtonRef);
	};

	/**
	 * Initialize GSAP Animations
	 */
	const initBannerAnimations = function (logoRef, circleRef, titleRef, buttonRef, descriptionRef, sliderButtonRef) {
		// Set initial states
		gsap.set(logoRef, {
			opacity: 1,
			x: "0%",
			y: "0%",
			transformOrigin: "center center",
		});

		gsap.set(circleRef, {
			scale: -2,
			opacity: 1,
			transformOrigin: "center center",
		});

		// Set initial states for text elements (bottom to top animation)
		gsap.set([titleRef, buttonRef, descriptionRef, sliderButtonRef], {
			opacity: 0,
			y: 100,
		});

		// Create main timeline with delay
		const tl = gsap.timeline({ delay: 1 });

		const getLeftPosition = function () {
			return window.innerWidth <= 1200 ? "0%" : "50%";
		};

		const getXTransform = function () {
			return window.innerWidth <= 1200 ? "20px" : "50px";
		};
		// Circle scales to 1300 and logo moves to top at the same time
		tl.to(circleRef, {
			scale: 1300,
			duration: 2,
			ease: "power2.out",
			immediateRender: false,
		})
			.to(logoRef, {
				top: getXTransform(),
				left: getLeftPosition(),
				x: "0%",
				y: "0%",
				scale: 1,
				width: "150px",
				transform: "translate(0%, 0%)",
				duration: 1.5,
				ease: "power2.out",
				immediateRender: false,
				onStart: function () {
					document.body.classList.add("banner_animation_started");
				},
				onComplete: function () {
					gsap.set(logoRef, {
						delay: 0.1,
						// display: "none",
					});
					document.body.classList.add("banner_animation_completed");
					// Allow scrolling after animation completes
					document.body.classList.remove("banner-animating");
					document.documentElement.classList.remove("banner-animating");

					setTimeout(function () {
						if (window.bannerSwiperInstance && window.bannerSwiperInstance.autoplay) {
							window.bannerSwiperInstance.autoplay.start();
						}
					}, 100);
				},
			}, "<1")
			// Animate text elements from bottom to top when logo animation starts
			.to([titleRef, buttonRef, sliderButtonRef], {
				opacity: 1,
				y: 0,
				duration: 1,
				ease: "power2.out",
				stagger: 0.2,
			}, "<1.5")
			.to(descriptionRef, {
				opacity: 1,
				y: 0,
				duration: 1,
				ease: "power2.out",
			}, "<0.3");
	};

	/**
	 * Initialize Swiper Slider
	 */
	const initSwiper = function () {
		const swiperElement = document.getElementById('bannerSwiper');
		if (!swiperElement) {
			console.warn('Banner: Swiper element #bannerSwiper not found');
			return;
		}

		// Check if wrapper exists
		const wrapper = swiperElement.querySelector('.swiper-wrapper');
		if (!wrapper) {
			console.warn('Banner: Swiper wrapper not found');
			return;
		}

		// Check if slides exist
		const slides = wrapper.querySelectorAll('.swiper-slide');
		if (slides.length === 0) {
			console.warn('Banner: No Swiper slides found');
			return;
		}

		console.log('Banner: Found', slides.length, 'slides');

		// Function to initialize Swiper
		const initSwiperInstance = function (attempt = 0) {
			// Check if Swiper is loaded
			if (typeof Swiper === 'undefined') {
				if (attempt < 10) {
					// Retry up to 10 times
					setTimeout(function () {
						initSwiperInstance(attempt + 1);
					}, 200);
				} else {
					console.error('Banner: Swiper library failed to load after multiple attempts');
				}
				return;
			}

			try {
				// Initialize Swiper with element directly
				// Autoplay is disabled initially, will be started after banner animation completes + 2 seconds
				window.bannerSwiperInstance = new Swiper(swiperElement, {
					spaceBetween: 0,
					slidesPerView: 1,
					navigation: {
						nextEl: '.swiper_btn_next',
						prevEl: '.swiper_btn_prev',
					},
					speed: 2000,
					autoplay: {
						delay: 3000,
						disableOnInteraction: false,
						enabled: false, // Disabled initially, will be enabled after banner animation
					},
					loop: slides.length > 1, // Only loop if more than 1 slide
					watchOverflow: true,
				});

				console.log('Banner: Swiper initialized successfully', window.bannerSwiperInstance);
			} catch (error) {
				console.error('Banner: Error initializing Swiper', error);
			}
		};

		// Initialize after a short delay to ensure DOM is ready
		if (document.readyState === 'loading') {
			document.addEventListener('DOMContentLoaded', function () {
				setTimeout(function () {
					initSwiperInstance();
				}, 500);
			});
		} else if (document.readyState === 'interactive') {
			setTimeout(function () {
				initSwiperInstance();
			}, 500);
		} else {
			// DOM is complete
			setTimeout(function () {
				initSwiperInstance();
			}, 500);
		}
	};

	/**
	 * Initialize when DOM is ready
	 */
	const init = function () {
		if (document.readyState === 'loading') {
			document.addEventListener('DOMContentLoaded', function () {
				initBanner();
				initSwiper();
			});
		} else {
			// DOM already loaded
			initBanner();
			initSwiper();
		}
	};

	// Start initialization
	init();

})();
