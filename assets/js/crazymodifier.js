$(document).ready(function(){
	$('.slider_1').slick({
	  slidesToShow: 1,
	  centerMode: false,
	  centerPadding: '00px',
	  mobileFirst:true,
	});
	  $('.articles-slider').slick({
	  slidesToShow: 2,
	  centerMode: false,
	  centerPadding: '00px',
	  mobileFirst:true,
	  responsive: [
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        infinite: true,
	        arrows:true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        infinite: true,
	        arrows:true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 500,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 300,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    ],
	  });
	  $('.project-slider').slick({
	  slidesToShow: 3,
	  centerMode: true,
	  centerPadding: '0px',
	  mobileFirst:true,
	  autoplay:true,
	  autoplayspeed:2000,
	  });
// Sticky navbar
// =========================

                // Custom function which toggles between sticky class (is-sticky)
                var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                    var stickyHeight = sticky.outerHeight();
                    var stickyTop = stickyWrapper.offset().top;
                    if (scrollElement.scrollTop() > stickyTop) {
                        stickyWrapper.height(stickyHeight);
                        sticky.addClass("is-sticky");
                    }
                    else {
                        sticky.removeClass("is-sticky");
                        stickyWrapper.height('auto');
                    }
                };

                // Find all data-toggle="sticky-onscroll" elements
                $('[data-toggle="sticky-onscroll"]').each(function () {
                    var sticky = $(this);
                    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                    sticky.before(stickyWrapper);
                    sticky.addClass('sticky');

                    // Scroll & resize events
                    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                        stickyToggle(sticky, stickyWrapper, $(this));
                    });

                    // On page load
                    stickyToggle(sticky, stickyWrapper, $(window));
                });
            });