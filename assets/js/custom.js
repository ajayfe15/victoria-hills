$(document).ready(function () {
	$(".toggle").click(function () {
		$(".sidebar-contact").toggleClass("active"), $(".toggle").toggleClass("active");
	});

	$('.gallerySlider').slick({
		centerMode: true,
		slidesToShow: 3,
		centerPadding: '0px',
		arrows: false,
		responsive: [{
				breakpoint: 768,
				settings: {
					arrows: true,
					centerMode: true,
					slidesToShow: 3
				}
                },
			{
				breakpoint: 480,
				settings: {
					arrows: true,
					centerMode: true,
					slidesToShow: 1
				}
                }
            ]
	});

});

var lightbox = GLightbox();

var lightboxVideo = GLightbox({
	selector: ".sitemapImg",
});
var lightboxVideo = GLightbox({
	selector: ".event-2",
});
var lightboxVideo = GLightbox({
	selector: ".event-3",
});
var lightboxVideo = GLightbox({
	selector: ".event-4",
});
