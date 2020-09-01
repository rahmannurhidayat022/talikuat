/**
 * Template Name: Gp - v2.1.0
 * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
!(function ($) {
	"use strict";

	//jika width window lebih besar dari 990 && < 1200 maka hilangkan .logo
	$(window).resize(function () {
		let wd = $(window).width();

		if (wd > 990 && wd < 1200) {
			$("#header .logo").css("display", "none");
		} else {
			$("#header .logo").css("display", "block");
		}
	});

	//arrow down
	const AllIdElmn = [
		"about",
		"clients",
		"features",
		"services",
		"cta",
		"portfolio",
		"counts",
		"testimonials",
		"team",
		"contact",
	];
	console.log(AllIdElmn[0]);
	$(window).scroll(function () {
		let Y = this.scrollY;
		console.log(Y);
		if (Y < 100) {
			$(".back-to-down").attr("href", `#${AllIdElmn[0]}`);
		}

		if (Y > 100 && Y < 810) {
			$(".back-to-down").attr("href", `#${AllIdElmn[1]}`);
		}

		if (Y > 810 && Y < 1340) {
			$(".back-to-down").attr("href", `#${AllIdElmn[3]}`);
		}

		if (Y > 1340 && Y < 2287) {
			console.log("MASUKKK");
			$(".back-to-down").attr("href", `#${AllIdElmn[4]}`);
		}
	});

	// Preloader
	$(window).on("load", function () {
		if ($("#preloader").length) {
			$("#preloader")
				.delay(100)
				.fadeOut("slow", function () {
					$(this).remove();
				});
		}
	});

	// Smooth scroll for the navigation menu and links with .scrollto classes
	var scrolltoOffset = $("#header").outerHeight() - 2;
	$(document).on("click", ".nav-menu a, .mobile-nav a, .scrollto", function (
		e
	) {
		if (
			location.pathname.replace(/^\//, "") ==
				this.pathname.replace(/^\//, "") &&
			location.hostname == this.hostname
		) {
			e.preventDefault();
			var target = $(this.hash);
			if (target.length) {
				var scrollto = target.offset().top - scrolltoOffset;

				if ($(this).attr("href") == "#header") {
					scrollto = 0;
				}

				$("html, body").animate(
					{
						scrollTop: scrollto,
					},
					1500,
					"easeInOutExpo"
				);

				if ($(this).parents(".nav-menu, .mobile-nav").length) {
					$(".nav-menu .active, .mobile-nav .active").removeClass("active");
					$(this).closest("li").addClass("active");
				}

				if ($("body").hasClass("mobile-nav-active")) {
					$("body").removeClass("mobile-nav-active");
					$(".mobile-nav-toggle i").toggleClass(
						"icofont-navigation-menu icofont-close"
					);
					$(".mobile-nav-overly").fadeOut();
				}
				return false;
			}
		}
	});

	// Activate smooth scroll on page load with hash links in the url
	$(document).ready(function () {
		if (window.location.hash) {
			var initial_nav = window.location.hash;
			if ($(initial_nav).length) {
				var scrollto = $(initial_nav).offset().top - scrolltoOffset;
				$("html, body").animate(
					{
						scrollTop: scrollto,
					},
					1500,
					"easeInOutExpo"
				);
			}
		}
	});

	// Mobile Navigation
	if ($(".nav-menu").length) {
		var $mobile_nav = $(".nav-menu").clone().prop({
			class: "mobile-nav d-lg-none",
		});
		$("body").append($mobile_nav);
		$("body").prepend(
			'<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>'
		);
		$("body").append('<div class="mobile-nav-overly"></div>');

		$(document).on("click", ".mobile-nav-toggle", function (e) {
			$("body").toggleClass("mobile-nav-active");
			$(".mobile-nav-toggle i").toggleClass(
				"icofont-navigation-menu icofont-close"
			);
			$(".mobile-nav-overly").toggle();
		});

		$(document).on("click", ".mobile-nav .drop-down > a", function (e) {
			e.preventDefault();
			$(this).next().slideToggle(300);
			$(this).parent().toggleClass("active");
		});

		$(document).click(function (e) {
			var container = $(".mobile-nav, .mobile-nav-toggle");
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if ($("body").hasClass("mobile-nav-active")) {
					$("body").removeClass("mobile-nav-active");
					$(".mobile-nav-toggle i").toggleClass(
						"icofont-navigation-menu icofont-close"
					);
					$(".mobile-nav-overly").fadeOut();
				}
			}
		});
	} else if ($(".mobile-nav, .mobile-nav-toggle").length) {
		$(".mobile-nav, .mobile-nav-toggle").hide();
	}

	// Navigation active state on scroll
	var nav_sections = $("section");
	var main_nav = $(".nav-menu, #mobile-nav");

	$(window).on("scroll", function () {
		var cur_pos = $(this).scrollTop() + 200;

		nav_sections.each(function () {
			var top = $(this).offset().top,
				bottom = top + $(this).outerHeight();

			if (cur_pos >= top && cur_pos <= bottom) {
				if (cur_pos <= bottom) {
					main_nav.find("li").removeClass("active");
				}
				main_nav
					.find('a[href="#' + $(this).attr("id") + '"]')
					.parent("li")
					.addClass("active");
			}
			if (cur_pos < 300) {
				$(".nav-menu ul:first li:first").addClass("active");
			}
		});
	});

	// Toggle .header-scrolled class to #header when page is scrolled
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$("#header").addClass("header-scrolled");
		} else {
			$("#header").removeClass("header-scrolled");
		}
	});

	if ($(window).scrollTop() > 100) {
		$("#header").addClass("header-scrolled");
	}

	// Back to top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$(".back-to-top").fadeIn("slow");
		} else {
			$(".back-to-top").fadeOut("slow");
		}
	});

	$(".back-to-top").click(function () {
		$("html, body").animate(
			{
				scrollTop: 0,
			},
			1500,
			"easeInOutExpo"
		);
		return false;
	});

	// // Back to down button
	// $(window).scroll(function () {
	// 	if ($(this).scrollTop() < 2500) {
	// 		$(".back-to-down").fadeIn("slow");
	// 	} else {
	// 		$(".back-to-down").fadeOut("slow");
	// 	}
	// });

	// $(".back-to-down").click(function () {
	// 	$("html, body").animate(
	// 		{
	// 			scrollTop: 9999,
	// 		},
	// 		1500,
	// 		"easeInOutExpo"
	// 	);
	// 	return false;
	// });

	///baruuu

	//hero carousel
	$(document).ready(() => {
		$(".box-slider").owlCarousel({
			autoplay: true,
			dots: true,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 3,
					nav: false,
				},
				1000: {
					items: 4,
					nav: false,
					loop: true,
				},
			},
		});
	});

	// Clients carousel (uses the Owl Carousel library)
	$(".clients-carousel").owlCarousel({
		autoplay: true,
		dots: true,
		loop: true,
		responsive: {
			0: {
				items: 1,
				nav: true,
			},
			600: {
				items: 3,
				nav: false,
			},
			1000: {
				items: 5,
				nav: true,
				loop: false,
			},
		},
	});

	// Porfolio isotope and filter
	$(window).on("load", function () {
		var portfolioIsotope = $(".portfolio-container").isotope({
			itemSelector: ".portfolio-item",
		});

		$("#portfolio-flters li").on("click", function () {
			$("#portfolio-flters li").removeClass("filter-active");
			$(this).addClass("filter-active");

			portfolioIsotope.isotope({
				filter: $(this).data("filter"),
			});
			aos_init();
		});

		// Initiate venobox (lightbox feature used in portofilo)
		$(document).ready(function () {
			$(".venobox").venobox({
				share: false,
			});
		});
	});

	// jQuery counterUp
	$('[data-toggle="counter-up"]').counterUp({
		delay: 10,
		time: 1000,
	});

	// Testimonials carousel (uses the Owl Carousel library)
	$(".testimonials-carousel").owlCarousel({
		autoplay: true,
		dots: true,
		loop: true,
		items: 1,
	});

	// Portfolio details carousel
	$(".portfolio-details-carousel").owlCarousel({
		autoplay: true,
		dots: true,
		loop: true,
		items: 1,
	});

	// Init AOS
	function aos_init() {
		AOS.init({
			duration: 1000,
			once: true,
		});
	}
	$(window).on("load", function () {
		aos_init();
	});
})(jQuery);

// JS bagian layar chatting

document.addEventListener("DOMContentLoaded", () => {
	//tampilkan pesan yang diketikan

	document
		.querySelector(".send-message")
		.addEventListener("click", async () => {
			let chatValue = await document.querySelector(".inputan").value;

			const replaceChat = await document.querySelector(".chat-body");
			if (chatValue) {
				replaceChat.innerHTML += `
             <div class="guest">
                <div class="text-guest pt-3 px-2 mr-2">
                     <p>${chatValue}</p>
                </div>
                <div class="pp-guest">
                     <img src="assets/img/chat/admin.jpg" alt="admin pp" />
                </div>
           </div>
           `;
			}

			$(".inputan").val("");
		});
});

//ketika btnChat di klik,akan menampilakan layar chatting

$(document).ready(function () {
	$("#icon-chat").click(function () {
		$("#chat").toggle();
		$("#icon-chat").css({
			"z-index": "-1",
			opacity: "0",
		});
	});

	//close layar chatting

	$(".close").ready(function () {
		$(".close").click(function () {
			$("#chat").css("display", "none");
			$("#icon-chat").css({
				"z-index": "99",
				opacity: "1",
			});
		});
	});
});
