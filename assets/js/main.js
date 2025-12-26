/**
 * Main JavaScript File
 * All component scripts are loaded via functions.php with proper dependencies.
 * This file can be used for any global initialization if needed.
 */

var swiper = new Swiper(".swiper_global_brands", {
	slidesPerView: 1,
	spaceBetween: 10,
	// pagination: {
	//   el: ".swiper-pagination",
	//   clickable: true,
	// },
	breakpoints: {
	  640: {
		slidesPerView: 2,
		spaceBetween: 10,
	  },
	  768: {
		slidesPerView:3,
		spaceBetween: 15,
	  },
	  1024: {
		slidesPerView: 3.2,
		spaceBetween: 20,
	  },
	},
  });









  var swiper = new Swiper(".innovative_products", {
	slidesPerView: 1,
	spaceBetween: 10,
	// pagination: {
	//   el: ".swiper-pagination",
	//   clickable: true,
	// },
	breakpoints: {
	  640: {
		slidesPerView: 2,
		spaceBetween: 10,
	  },
	  768: {
		slidesPerView: 3,
		spaceBetween: 15,
	  },
	  1024: {
		slidesPerView: 3,
		spaceBetween: 20,
	  },
	},
  });

  var swiper = new Swiper(".related_news", {
	slidesPerView: 1,
	spaceBetween: 10,
	// pagination: {
	//   el: ".swiper-pagination",
	//   clickable: true,
	// },
	breakpoints: {
	  640: {
		slidesPerView: 2,
		spaceBetween: 10,
	  },
	  768: {
		slidesPerView: 3,
		spaceBetween: 15,
	  },
	  1024: {
		slidesPerView: 3,
		spaceBetween: 20,
	  },
	},
  });

  // Projects Banner Swiper
  var projectsBannerSwiper = new Swiper(".projects_banner_slider", {
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	speed: 800,
	autoplay: {
	  delay: 5000,
	  disableOnInteraction: false,
	},
	pagination: {
	  el: ".projects_banner_pagination",
	  clickable: true,
	},
	navigation: {
	  nextEl: ".projects_banner_next",
	  prevEl: ".projects_banner_prev",
	},
  });

  // Clients Swiper
  var clientsSwiper = new Swiper(".clients_slider", {
	slidesPerView: 2,
	spaceBetween: 0,
	loop: true,
	speed: 600,
	autoplay: {
	  delay: 3000,
	  disableOnInteraction: false,
	},
	breakpoints: {
	  640: {
		slidesPerView: 3,
		spaceBetween: 0,
	  },
	  768: {
		slidesPerView: 4,
		spaceBetween: 0,
	  },
	  1024: {
		slidesPerView: 5,
		spaceBetween: 0,
	  },
	},
  });

  var swiper = new Swiper(".swiper_building_trust", {
	slidesPerView: 1,
	spaceBetween: 0,
	pagination: {
	  el: ".swiper-pagination",
	  clickable: true,
	},
	autoplay: {
	  delay: 5000,
	  disableOnInteraction: false,
	},
	loop: true,
  });

  // Building Trust Vertical Card Swiper
  var buildingTrustVerticalSwiper = new Swiper(".building_trust_vertical_swiper", {
	direction: 'vertical',
	slidesPerView: 1,
	spaceBetween: 10,
	centeredSlides: true,
	grabCursor: true,
	loop: true,
	speed: 600,
	pagination: {
	  el: ".building_trust_vertical_pagination",
	  clickable: true,
	  type: 'bullets',
	},
	// autoplay: {
	//   delay: 3000,
	//   disableOnInteraction: false,
	// },
	breakpoints: {
	  768: {
		slidesPerView: 2,
		spaceBetween: 10,
	  },
	  1024: {
		slidesPerView: 2.5,
		spaceBetween: 15,
	  },
	},
  });



  var swiper = new Swiper(".stay_connected_slider", {
	slidesPerView: 1,
	spaceBetween: 10,
	// pagination: {
	//   el: ".swiper-pagination",
	//   clickable: true,
	// },
	breakpoints: {
	  640: {
		slidesPerView: 2,
		spaceBetween: 10,
	  },
	  768: {
		slidesPerView: 3,
		spaceBetween: 15,
	  },
	  1024: {
		slidesPerView: 3,
		spaceBetween: 20,
	  },
	},
  });

  // Leadership Team Swiper - Initialize when DOM is ready
  (function() {
	const initLeadershipTeamSwiper = function() {
	  // Check if Swiper is loaded
	  if (typeof Swiper === 'undefined') {
		console.warn('LeadershipTeam: Swiper library is not loaded');
		return;
	  }

	  const swiperElement = document.querySelector(".leadership-team-swiper");
	  if (!swiperElement) {
		return; // Element not found, might not be on this page
	  }

	  // Check if already initialized
	  if (swiperElement.swiper) {
		return; // Already initialized
	  }

	  // Find buttons in the global_brands_content_title div (parent section)
	  const section = swiperElement.closest('section');
	  const nextButton = section ? section.querySelector(".leadership-team-next") : null;
	  const prevButton = section ? section.querySelector(".leadership-team-prev") : null;

	  if (!nextButton || !prevButton) {
		console.warn('LeadershipTeam: Navigation buttons not found');
		return;
	  }

	  try {
		// Check if mobile view (below 768px)
		const isMobile = window.innerWidth < 768;
		
		var leadershipTeamSwiper = new Swiper(swiperElement, {
		  slidesPerView: 1,
		  spaceBetween: 20,
		  navigation: {
			nextEl: nextButton,
			prevEl: prevButton,
		  },
		  speed: 800,
		  autoplay: isMobile ? {
			delay: 3000,
			disableOnInteraction: false,
			pauseOnMouseEnter: true,
		  } : false,
		  breakpoints: {
			768: {
			  slidesPerView: 2,
			  spaceBetween: 20,
			  autoplay: false, // Disable autoplay on tablet and desktop
			},
			1024: {
			  slidesPerView: 3,
			  spaceBetween: 30,
			  autoplay: false, // Disable autoplay on desktop
			},
		  },
		  on: {
			// Handle autoplay on window resize
			init: function(swiper) {
			  const handleResize = function() {
				const isMobileNow = window.innerWidth < 768;
				if (isMobileNow && !swiper.autoplay.running) {
				  swiper.autoplay.start();
				} else if (!isMobileNow && swiper.autoplay.running) {
				  swiper.autoplay.stop();
				}
			  };
			  
			  window.addEventListener('resize', handleResize);
			  // Store cleanup function
			  swiper.destroy = (function(originalDestroy) {
				return function() {
				  window.removeEventListener('resize', handleResize);
				  if (originalDestroy) originalDestroy.call(this);
				};
			  })(swiper.destroy);
			}
		  }
		});
		console.log('LeadershipTeam: Swiper initialized successfully', isMobile ? 'with autoplay' : 'without autoplay');
	  } catch (error) {
		console.error('LeadershipTeam: Error initializing Swiper', error);
	  }
	};

	// Initialize when DOM is ready
	if (document.readyState === 'loading') {
	  document.addEventListener('DOMContentLoaded', function() {
		setTimeout(initLeadershipTeamSwiper, 100);
	  });
	} else {
	  setTimeout(initLeadershipTeamSwiper, 100);
	}
  })();









/**
 * Initialize Pinned Gallery with GSAP ScrollTrigger
 */
(function() {
	'use strict';

	// Ensure GSAP and ScrollTrigger are available globally
	const gsap = window.gsap;
	const ScrollTrigger = window.ScrollTrigger;

	/**
	 * Initialize Pinned Gallery Animations
	 */
	const initPinnedGallery = function() {
		// Check if GSAP and ScrollTrigger are loaded
		if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
			console.warn('PinnedGallery: GSAP or ScrollTrigger not loaded');
			return;
		}

		// Register ScrollTrigger plugin
		gsap.registerPlugin(ScrollTrigger);

		// Get all pinned galleries
		const pinnedGalleries = document.querySelectorAll('.pinned-gallery');
		
		if (pinnedGalleries.length === 0) {
			return; // No pinned galleries found
		}

		gsap.utils.toArray('.pinned-gallery').forEach((pinnedGallery) => {
			if (!pinnedGallery) return;

			// Handle random image rotation if class exists
			if (pinnedGallery.classList.contains('random-img-ratation')) {
				const rotatedImages = pinnedGallery.querySelectorAll('.pinned-image:not(:first-child):not(:last-child)');
				gsap.utils.toArray(rotatedImages).forEach((pImage, i, arr) => {
					let rotation = i % 2 === 0 ? gsap.utils.random(-4, 0) : gsap.utils.random(0, 4);
					gsap.set(pImage.querySelector('img'), { rotation: rotation });
				});
			}

			const pinnedImages = pinnedGallery.querySelectorAll('.pinned-image');

			pinnedImages.forEach((pImage, i, arr) => {
				if (i < arr.length - 1) {
					const durationMultiplier = arr.length - i - 1;
					const img = pImage.querySelector('img');
					
					if (!img) return;

					ScrollTrigger.create({
						trigger: pImage,
						start: function() {
							const centerPin = (window.innerHeight - img.offsetHeight) / 2;
							return "top +=" + centerPin;
						},
						end: function() {
							const durationHeight = pImage.offsetHeight * durationMultiplier;
							return "+=" + durationHeight;
						},
						pin: true,
						pinSpacing: false,
						scrub: true,
						animation: gsap.to(img, {
							scale: 0.95,
							opacity: 1,
							zIndex: 0,
							duration: 1,
							ease: "none"
						}),
					});
				}
			});
		});

		// Refresh ScrollTrigger after initialization
		ScrollTrigger.refresh();
	};

	/**
	 * Initialize when DOM and libraries are ready
	 */
	const init = function() {
		let retryCount = 0;
		const maxRetries = 10;
		const retryDelay = 500; // ms

		const tryInit = function() {
			if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
				// Wait a bit for DOM to be fully ready
				if (document.readyState === 'loading') {
					document.addEventListener('DOMContentLoaded', function() {
						setTimeout(initPinnedGallery, 100);
					});
				} else {
					setTimeout(initPinnedGallery, 100);
				}
			} else if (retryCount < maxRetries) {
				retryCount++;
				console.warn(`PinnedGallery: GSAP or ScrollTrigger not loaded, retrying (${retryCount}/${maxRetries})...`);
				setTimeout(tryInit, retryDelay);
			} else {
				console.error('PinnedGallery: Failed to load GSAP or ScrollTrigger after multiple retries.');
			}
		};

		tryInit();
	};

	// Start initialization
	init();

})();








let panels = gsap.utils.toArray(".panel_img");
// we'll create a ScrollTrigger for each panel just to track when each panel's top hits the top of the viewport (we only need this for snapping)
let tops = panels.map(panel => ScrollTrigger.create({trigger: panel, start: "top top"}));

panels.forEach((panel, i) => {
  ScrollTrigger.create({
    trigger: panel,
    start: () => panel.offsetHeight < window.innerHeight ? "top top" : "bottom bottom", // if it's shorter than the viewport, we prefer to pin it at the top
    // start: () => (i - 0.5) * innerHeight,
    end: () => "+=" + window.innerHeight,
    pin: true, 
    pinSpacing: false,
    markers:true,
  });


// end: () => "+=" + window.innerHeight,



  
});







 
var swiper = new Swiper(".mySwiper-cards-swiper", {
	effect: "cards",
	grabCursor: true,
	autoplay: {
	  delay: 3000,
	  disableOnInteraction: false,
	},
	direction: "vertical",
	reverseDirection: true,
	cardsEffect: {
	  slideShadows: true,
	  rotate: false,
	  // perSlideOffset: 8,
	  perSlideOffset: 13,
	  perSlideRotate: 0
	},
	pagination: {
	  el: ".mySwiper-cards-swiper .swiper-pagination",
	  clickable: true,
	},
	breakpoints: {
	  1366: {
		autoplay: false
	  },
	  1199: {
		autoplay: false
	  },
	  820: {},
	  480: {},
	},
});
 


 