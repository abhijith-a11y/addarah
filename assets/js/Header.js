/**
 * Header Component JavaScript
 * Handles scroll detection and mobile menu toggle
 */

(function () {
	"use strict";

	/**
	 * Initialize Header Component
	 */
	const initHeader = function () {
		const headerSection = document.getElementById("headerMainSection");
		const menuIcon = document.getElementById("menuIcon");

		if (!headerSection) {
			return;
		}

		let isScrolled = false;
		let isMenuOpen = false;
		const isHomePage = document.body.classList.contains("home");

		// Show header immediately on non-home pages
		if (!isHomePage) {
			document.body.classList.add("header_visible");
		}

		/**
		 * Handle scroll event
		 */
		const handleScroll = function () {
			if (window.scrollY > 1) {
				if (!isScrolled) {
					isScrolled = true;
					headerSection.classList.add("scrolled");
				}
			} else {
				if (isScrolled) {
					isScrolled = false;
					headerSection.classList.remove("scrolled");
				}
			}
		};

		/**
		 * Toggle mobile menu
		 */
		const toggleMenu = function (e) {
			if (e) {
				e.preventDefault();
				e.stopPropagation();
			}

			isMenuOpen = !isMenuOpen;

			if (menuIcon) {
				if (isMenuOpen) {
					menuIcon.classList.add("menu_open");
				} else {
					menuIcon.classList.remove("menu_open");
				}
			}

			// Toggle body classes
			document.body.classList.toggle("overflow_body_hidden");
			document.body.classList.toggle("header_activated");

			// Toggle mobile menu overlay
			const mobileMenuOverlay = document.getElementById("mobileMenuOverlay");
			if (mobileMenuOverlay) {
				if (isMenuOpen) {
					mobileMenuOverlay.classList.add("mobile_menu_open");
				} else {
					mobileMenuOverlay.classList.remove("mobile_menu_open");
				}
			}
		};

		// Check initial scroll position
		handleScroll();

		// Add scroll event listener
		window.addEventListener("scroll", handleScroll, { passive: true });

		// Add menu toggle event listener
		if (menuIcon) {
			menuIcon.addEventListener("click", toggleMenu);
		}

		// Close menu when clicking outside or on menu items
		document.addEventListener("click", function (event) {
			const mobileMenuOverlay = document.getElementById("mobileMenuOverlay");
			if (isMenuOpen && mobileMenuOverlay) {
				// Close if clicking outside the menu overlay and menu icon
				if (
					!mobileMenuOverlay.contains(event.target) &&
					!menuIcon.contains(event.target)
				) {
					toggleMenu();
				}
				// Close if clicking on a menu item
				if (
					mobileMenuOverlay.contains(event.target) &&
					event.target.classList.contains("mobile_menu_item")
				) {
					setTimeout(toggleMenu, 300);
				}
			}
		});

		// Close menu on escape key
		document.addEventListener("keydown", function (event) {
			if (event.key === "Escape" && isMenuOpen) {
				toggleMenu();
			}
		});
	};

	/**
	 * Initialize when DOM is ready
	 */
	const init = function () {
		if (document.readyState === "loading") {
			document.addEventListener("DOMContentLoaded", initHeader);
		} else {
			initHeader();
		}
	};

	// Start initialization
	init();
})();
